    
    function calculateAnnualIncome(clientSelector, partnerSelector, frequencySelector, clientAnnualSelector, partnerAnnualSelector) {
        let clientVal = $(clientSelector).val();
        let partnerVal = $(partnerSelector).val();
        let frequency = $(frequencySelector).val();


        if ((clientVal !== null && clientVal !== '') || (partnerVal !== null && partnerVal !== '')) {
            let amountClient = parseFloat(clientVal) || 0;
            let amountPartner = parseFloat(partnerVal) || 0;

        
            let multipliers = { 'Weekly': 52, 'Fortnightly': 26, 'Monthly': 12, 'Annual': 1};
            let multiplier = multipliers[frequency] || 0;

            let totalClient = amountClient * multiplier;
            let totalPartner = amountPartner * multiplier;

    
            let formattedClient = totalClient.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
            let formattedPartner = totalPartner.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

            $(clientAnnualSelector).val(formattedClient);
            $(partnerAnnualSelector).val(formattedPartner);

            $('.gross_salary').val(formattedClient);
            $('.partner_gross_salary').val(formattedPartner);

            supperAnnutationCalcs('.gross_salary','.sg_rate','.annual_contribution','.quarterly_contribution');
      
        } else {
            $(clientAnnualSelector).val('');
            $(partnerAnnualSelector).val('');
        }
        updateGrandTotal();
       
       
    }

     function updateGrandTotal() {
        let total = 0;
        let totalGrandPartner = 0;

   
        let clientFields = [
            '.salary_client_annual',
            '.bonus_client_annual',
            '.interest_income_client_annual',
            '.rental_income_client_annual',
            '.dividend_income_client_annual',
            '.ss_income_client_annual',
            '.business_income_client_annual',
            '.other_income_client_annual'
        ];

        let partnerFields = [
            '.salary_partner_annual',
            '.bonus_partner_annual',
            '.interest_income_partner_annual',
            '.rental_income_partner_annual',
            '.dividend_income_partner_annual',
            '.ss_income_partner_annual',
            '.business_income_partner_annual',
            '.other_income_partner_annual'
        ];

       
        clientFields.forEach(function(selector) {
            let valString = $(selector).val() || '0';
            let cleanNum = parseFloat(valString.replace(/,/g, '')) || 0;
            total += cleanNum;
        });

  
         partnerFields.forEach(function(selector) {
            let partnervalString = $(selector).val() || '0';
            let cleanVal = parseFloat(partnervalString.replace(/,/g, '')) || 0;
            totalGrandPartner += cleanVal;
        });

        let formattedGrandTotal = total.toLocaleString('en-US', { 
            minimumFractionDigits: 2, 
            maximumFractionDigits: 2 
        });
        let formattedGrandPartnerTotal = totalGrandPartner.toLocaleString('en-US', { 
            minimumFractionDigits: 2, 
            maximumFractionDigits: 2 
        });

        $('.total_income_client_annual').val(formattedGrandTotal);
        $('.total_income_partner_annual').val(formattedGrandPartnerTotal);

  
     
     
    }

    function supperAnnutationCalcs(grossSalary,sgRate,grandannualContribution,grandquarterlyContribution){

    let grossSalaryStr = $(grossSalary).val() || "0";
    let sgRateStr = $(sgRate).val() || "0";  
    let Salary = grossSalaryStr.replace(/[^0-9.]/g, '');
    let Rate = sgRateStr.replace(/[^0-9.]/g, '');
    let gross_Salary = parseFloat(Salary) || 0;
    let sg_rate = parseFloat(Rate) || 0;

    let totalQuarterly = 0;
    let totalAnnual_Contribution = 0;
    let annualContribution = gross_Salary * (sg_rate / 100);
    let totalAnnualContribution = annualContribution.toLocaleString('en-US', { 
            minimumFractionDigits: 2, 
            maximumFractionDigits: 2 
        })
    $(grandannualContribution).val(totalAnnualContribution);

    let quarterContribution = parseFloat(annualContribution) / 4;
    let totalQuarterlyContribution = quarterContribution.toLocaleString('en-US', { 
            minimumFractionDigits: 2, 
            maximumFractionDigits: 2 
        })
    $(grandquarterlyContribution).val(totalQuarterlyContribution);

        let annaulContributionFields = [
            '.annual_contribution',
            '.partner_annual_contribution'
           
        ];

        let quarterlyContributionFields = [
            '.quarterly_contribution',
            '.partner_quarterly_contribution'
           
        ];

       
        annaulContributionFields.forEach(function(selector) {
            let valString = $(selector).val() || '0';
            let cleanNum = parseFloat(valString.replace(/,/g, '')) || 0;
            totalAnnual_Contribution += cleanNum;
        });

  
         quarterlyContributionFields.forEach(function(selector) {
            let partnervalString = $(selector).val() || '0';
            let cleanVal = parseFloat(partnervalString.replace(/,/g, '')) || 0;
            totalQuarterly += cleanVal;
        });

           let formattedGrandAnnualContributionTotal = totalAnnual_Contribution.toLocaleString('en-US', { 
            minimumFractionDigits: 2, 
            maximumFractionDigits: 2 
        });

        let formattedGrandQuarterlyContributionTotal = totalQuarterly.toLocaleString('en-US', { 
            minimumFractionDigits: 2, 
            maximumFractionDigits: 2 
        });

        $('.grand_total_annual').val(formattedGrandAnnualContributionTotal);

        $('.grand_total_quarterly').val(formattedGrandQuarterlyContributionTotal);

    }

    function calculateNonInvestmentAsset(ownerSelection,clientPercentage,partnerPercentage,marketValue,clientCalc,partnerCalc){
        let ownerStr = $(ownerSelection).val();
        let clientStr =  $(clientPercentage).val();
        let partnerStr = $(partnerPercentage).val()
        let marketValueStr = $(marketValue).val();
        let cleanClientStr;
        let cleanMarketStr;
        let clientResult;
        let formattedTotal

         if(clientStr !== null && clientStr !== '' || partnerStr !== null && partnerStr !== ''){

            switch (ownerStr) {
                case "Client":
                 
                    cleanMarketStr = parseFloat(marketValueStr.replace(/,/g, '')) || 0;
                    clientResult = cleanMarketStr * (clientStr / 100);
                    formattedTotal = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });
                    $(clientCalc).val(formattedTotal);
                    $(partnerCalc).val('');
                    $(partnerPercentage).val('');

                break;
                case "Partner":
                    cleanMarketStr = parseFloat(marketValueStr.replace(/,/g, '')) || 0;
                    clientResult = cleanMarketStr * (partnerStr / 100);
                    formattedTotal = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });
                    $(partnerCalc).val(formattedTotal);
                      $(clientCalc).val('');
                      $(clientPercentage).val('');
                break;
        
                case "Joint":
                   
                      
                    cleanMarketStr = parseFloat(marketValueStr.replace(/,/g, '')) || 0;
                    clientResult = cleanMarketStr * (clientStr / 100);
                    const remaingforPartner =  100 - clientStr;

                    // const remainingWholeVal = parseFloat(remaingforPartner);
                    // const remainingPercenteage = 100 - remainingWholeVal;
                   
                        $(partnerPercentage).val(remaingforPartner);
                   
                  
                    formattedTotal = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let remainingVal = cleanMarketStr - clientResult;
                    let formattedHalfPartner = remainingVal.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let formattedHalfClient = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    $(partnerCalc).val(formattedHalfPartner);
                    $(clientCalc).val(formattedHalfClient);
                    
                   
                break;
                case "Other":
            
                break;
    
        default:
            break;
    }
         }
            

    }

