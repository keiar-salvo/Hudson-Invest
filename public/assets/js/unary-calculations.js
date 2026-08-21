    
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
            let cleanNum = parseFloat(valString?.replace(/,/g, '')) || 0;
            total += cleanNum;
        });

  
         partnerFields.forEach(function(selector) {
            let partnervalString = $(selector).val() || '0';
            let cleanVal = parseFloat(partnervalString?.replace(/,/g, '')) || 0;
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
                 
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                   
                      
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
                    clientResult = cleanMarketStr * (clientStr / 100);
                    const remaingforPartnerjoint =  100 - clientStr;

                    // const remainingWholeVal = parseFloat(remaingforPartner);
                    // const remainingPercenteage = 100 - remainingWholeVal;
                   
                    $(partnerPercentage).val(remaingforPartnerjoint);
                   
                  
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
                    $(partnerCalc).val('0');
                    $(clientCalc).val('0');

                    cleanMarketStrVal = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
                    clientResultVal = cleanMarketStr * (clientStr / 100);
                    const remaingforPartners =  100 - clientStr;

                    // const remainingWholeVal = parseFloat(remaingforPartner);
                    // const remainingPercenteage = 100 - remainingWholeVal;
                   
                    $(partnerPercentage).val(remaingforPartners);
                   
                  
                    formattedTotal = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let remainingVals = cleanMarketStrVal - clientResultVal;
                    let formattedHalfPartnerVal = remainingVals.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let formattedHalfClientVal = clientResultVal.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    $(partnerCalc).val(formattedHalfPartnerVal);
                    $(clientCalc).val(formattedHalfClientVal);
                break;
    
        default:
            break;
            
    }
    calculateGrandTotalForNonInvestment();
    GrandTotalAssets();
    NetAssetsGrandTotal();
         }
            

    }

function calculateInvestmentAsset(ownerSelection,clientPercentage,partnerPercentage,marketValue,clientCalc,partnerCalc){
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
                 
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                   
                      
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                    $(partnerCalc).val('0');
                    $(clientCalc).val('0');
                    
                    cleanMarketStrs = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
                    clientResults = cleanMarketStr * (clientStr / 100);
                    const remaingforPartnerValue =  100 - clientStr;

                    // const remainingWholeVal = parseFloat(remaingforPartner);
                    // const remainingPercenteage = 100 - remainingWholeVal;
                   
                    $(partnerPercentage).val(remaingforPartnerValue);
                   
                  
                    formattedTotal = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let remainingVals = cleanMarketStrs - clientResults;
                    let formattedHalfPartners = remainingVals.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let formattedHalfClients = clientResults.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    $(partnerCalc).val(formattedHalfPartners);
                    $(clientCalc).val(formattedHalfClients);
                break;
    
        default:
            break;
            
    }

    calculateGrandTotalForInvestment();
    GrandTotalAssets();
    NetAssetsGrandTotal();
         }
            

    }
// Calculate Non-Investment Liabilities
    function calculateNonInvestmentLiabilities(ownerSelection,clientPercentage,partnerPercentage,marketValue,clientCalc,partnerCalc){
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
                 
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                   
                      
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
                    clientResult = cleanMarketStr * (clientStr / 100);
                    const remaingforPartner =  100 - clientStr;

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
                    $(partnerCalc).val('0');
                    $(clientCalc).val('0');
                    
                    cleanMarketStrs = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
                    clientResults = cleanMarketStr * (clientStr / 100);
                    const remaingforPartnerValue =  100 - clientStr;

                    // const remainingWholeVal = parseFloat(remaingforPartner);
                    // const remainingPercenteage = 100 - remainingWholeVal;
                   
                    $(partnerPercentage).val(remaingforPartnerValue);
                   
                  
                    formattedTotal = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let remainingVals = cleanMarketStrs - clientResults;
                    let formattedHalfPartners = remainingVals.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let formattedHalfClients = clientResults.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    $(partnerCalc).val(formattedHalfPartners);
                    $(clientCalc).val(formattedHalfClients);
                break;
    
        default:
            break;
            
    }
    calculateGrandTotalForNonInvestmentLiabilities();
    GrandTotalLiabilities();
    NetAssetsGrandTotal();

         }
            

    }

     function calculateInvestmentLiabilities(ownerSelection,clientPercentage,partnerPercentage,marketValue,clientCalc,partnerCalc){
        let ownerStr = $(ownerSelection).val();
        let clientStr =  $(clientPercentage).val();
        let partnerStr = $(partnerPercentage).val()
        let marketValueStr = $(marketValue).val();
        let cleanClientStr;
        let cleanMarketStr;
        let clientResult;
        let formattedTotal

        // alert(ownerStr);

         if(clientStr !== null && clientStr !== '' || partnerStr !== null && partnerStr !== ''){

            switch (ownerStr) {
                case "Client":

                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
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
                   
                      
                    cleanMarketStr = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
                    clientResult = cleanMarketStr * (clientStr / 100);
                    const remaingforPartner =  100 - clientStr;

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
                    $(partnerCalc).val('0');
                    $(clientCalc).val('0');
                    
                    cleanMarketStrs = parseFloat(marketValueStr?.replace(/,/g, '')) || 0;
                    clientResults = cleanMarketStr * (clientStr / 100);
                    const remaingforPartnerValue =  100 - clientStr;

                    // const remainingWholeVal = parseFloat(remaingforPartner);
                    // const remainingPercenteage = 100 - remainingWholeVal;
                   
                    $(partnerPercentage).val(remaingforPartnerValue);
                   
                  
                    formattedTotal = clientResult.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let remainingVals = cleanMarketStrs - clientResults;
                    let formattedHalfPartners = remainingVals.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    let formattedHalfClients = clientResults.toLocaleString('en-US', { 
                        minimumFractionDigits: 2, 
                        maximumFractionDigits: 2 
                    });

                    $(partnerCalc).val(formattedHalfPartners);
                    $(clientCalc).val(formattedHalfClients);
                break;
    
        default:
            break;
            
    }
calculateGrandTotalForInvestmentLiabilities();
GrandTotalLiabilities();
NetAssetsGrandTotal();

         }
            

    }

    var withTotalNonInvestmentClientVal = 0;
    var withTotalNonInvestmentPartnerVal = 0;
    var withTotalNonInvestmentMarketVal = 0;
    var withTotalInvestmentClientVal = 0;
    var withTotalInvestmentPartnerVal = 0;
    var withTotalInvestmentMarketVal = 0;

    function calculateGrandTotalForNonInvestment(){
    let total = 0;
    let totalGrandPartner = 0;
    let totalGrandMarketVal = 0;
    let totalMarket = 0;
    let totalClient = 0;
    let totalPartner = 0;

    let clientFields = ['.principle_client', '.cash_client'];
    let partnerFields = ['.principle_partner', '.cash_partner'];
    let marketValueFields = ['.principle_market_value', '.cash_market_value'];

    // 1. Sum up baseline static inputs
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

    marketValueFields.forEach(function(selector) {
        let marketvalString = $(selector).val() || '0';
        let cleanMarketVal = parseFloat(marketvalString.replace(/,/g, '')) || 0;
        totalGrandMarketVal += cleanMarketVal;
    });

    // 2. FIX: Only loop through actual rows inside your container
    // Adjust '#assets-container .form-row' to match your actual wrapper layout
    $('.form-row').each(function() {
        let row = $(this);
        
        let marketVal = parseFloat(row.find('.non_investment_asset_market_value').val()?.replace(/,/g, '')) || 0;
        let clientVal = parseFloat(row.find('.non_investment_asset_client').val()?.replace(/,/g, '')) || 0;
        let partnerVal = parseFloat(row.find('.non_investment_asset_partner').val()?.replace(/,/g, '')) || 0;

        totalMarket += marketVal;
        totalClient += clientVal;
        totalPartner += partnerVal;

 
    });

   withTotalNonInvestmentClientVal = total + totalClient;
    withTotalNonInvestmentPartnerVal = totalGrandPartner + totalPartner;
    withTotalNonInvestmentMarketVal = totalGrandMarketVal + totalMarket;

    let formattedGrandTotal = withTotalNonInvestmentClientVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandPartnerTotal = withTotalNonInvestmentPartnerVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandMarketTotal = withTotalNonInvestmentMarketVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    // 4. Update the grand total fields
    $('.total_non_investment_client').val(formattedGrandTotal);
    $('.total_non_investment_partner').val(formattedGrandPartnerTotal);
    $('.total_non_investment_market_value').val(formattedGrandMarketTotal);
       GrandTotalAssets();
       NetAssetsGrandTotal();
   
}

  var withTotalNonInvestmentLiabilitiesClientVal = 0;
    var withTotalNonInvestmentLiabilitiesPartnerVal = 0;
    var withTotalNonInvestmentLiabilieitsMarketVal = 0;
    // var withTotalInvestmentClientVal = 0;
    // var withTotalInvestmentPartnerVal = 0;
    // var withTotalInvestmentMarketVal = 0;

     // Non-Investment Liabilities
function calculateGrandTotalForNonInvestmentLiabilities(){
    let total = 0;
    let totalGrandPartner = 0;
    let totalGrandMarketVal = 0;
    let totalMarket = 0;
    let totalClient = 0;
    let totalPartner = 0;
    let totalCreditCardMarket = 0;
    let totalCrediCardClient = 0;
    let totalCreditCardPartner = 0;

    let clientFields = ['.mortgage_client', '.personal_loans_client','.car_loans_client'];
    let partnerFields = ['.mortgage_partner', '.personal_loans_partner','.car_loans_partner'];
    let marketValueFields = ['.mortgage_market_value', '.personal_loans_market_value','.car_loans_market_value'];

    // 1. Sum up baseline static inputs
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

    marketValueFields.forEach(function(selector) {
        let marketvalString = $(selector).val() || '0';
        let cleanMarketVal = parseFloat(marketvalString.replace(/,/g, '')) || 0;
        totalGrandMarketVal += cleanMarketVal;
    });

    // 2. FIX: Only loop through actual rows inside your container
    // Adjust '#assets-container .form-row' to match your actual wrapper layout
    $('.form-liabilities-non-investment').each(function() {
        let row = $(this);
        
        let marketVal = parseFloat(row.find('.other_debt_market_value').val()?.replace(/,/g, '')) || 0;
        let clientVal = parseFloat(row.find('.other_debt_client').val()?.replace(/,/g, '')) || 0;
        let partnerVal = parseFloat(row.find('.other_debt_parnter').val()?.replace(/,/g, '')) || 0;

        totalMarket += marketVal;
        totalClient += clientVal;
        totalPartner += partnerVal;

 
    });

      $('.form-row-credit-card-liabilities ').each(function() {
        let row_credit_card = $(this);
        
        let creditCardMarketVal = parseFloat(row_credit_card.find('.credit_card_market_value').val()?.replace(/,/g, '')) || 0;
        let creditCardClientVal = parseFloat(row_credit_card.find('.credit_card_client').val()?.replace(/,/g, '')) || 0;
        let creditCardPartnerVal = parseFloat(row_credit_card.find('.credit_card_partner').val()?.replace(/,/g, '')) || 0;

        totalCreditCardMarket += creditCardMarketVal;
        totalCrediCardClient += creditCardClientVal;
        totalCreditCardPartner += creditCardPartnerVal;

 
    });

    withTotalNonInvestmentLiabilitiesClientVal = total + totalCrediCardClient + totalClient;
    withTotalNonInvestmentLiabilitiesPartnerVal = totalGrandPartner + totalCreditCardPartner + totalPartner;
    withTotalNonInvestmentLiabilieitsMarketVal = totalGrandMarketVal + totalCreditCardMarket + totalMarket;

    let formattedGrandTotal = withTotalNonInvestmentLiabilitiesClientVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandPartnerTotal = withTotalNonInvestmentLiabilitiesPartnerVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandMarketTotal = withTotalNonInvestmentLiabilieitsMarketVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    // 4. Update the grand total fields
    $('.total_non_invesment_liabilities_client').val(formattedGrandTotal);
    $('.total_non_invesment_liabilities_partner').val(formattedGrandPartnerTotal);
    $('.total_non_invesment_liabilities_market_value').val(formattedGrandMarketTotal);
     
   
}
    var withTotalInvestmentLiabilitiesClientVal = 0;
    var withTotalInvestmentLiabilitiesPartnerVal = 0;    
    var withTotalInvestmentLiabilieitsMarketVal = 0;

function calculateGrandTotalForInvestmentLiabilities(){
    let total = 0;
    let totalGrandPartner = 0;
    let totalGrandMarketVal = 0;
    let totalMarket = 0;
    let totalClient = 0;
    let totalPartner = 0;
    let totalCreditCardMarket = 0;
    let totalCrediCardClient = 0;
    let totalCreditCardPartner = 0;
    let totalMortgageMarket = 0;
    let totalMortgageClient = 0;
    let totalMortgagePartner = 0;

    let clientFields = ['.margin_investment_client', '.business_loans_client'];
    let partnerFields = ['.margin_investment_partner', '.business_loans_partner'];
    let marketValueFields = ['.margin_investment_market_value', '.business_loans_market_value'];

    // 1. Sum up baseline static inputs
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

    marketValueFields.forEach(function(selector) {
        let marketvalString = $(selector).val() || '0';
        let cleanMarketVal = parseFloat(marketvalString.replace(/,/g, '')) || 0;
        totalGrandMarketVal += cleanMarketVal;
    });

    // 2. FIX: Only loop through actual rows inside your container
    // Adjust '#assets-container .form-row' to match your actual wrapper layout
    
      $('.form-row-mortgage-investment').each(function() {
        let row = $(this);
        
        let mortgageMarketVal = parseFloat(row.find('.mortgage_investment_market_value').val()?.replace(/,/g, '')) || 0;
        let mortgageClientVal = parseFloat(row.find('.mortgage_investment_client').val()?.replace(/,/g, '')) || 0;
        let mortgagePartnerVal = parseFloat(row.find('.mortgage_investment_partner').val()?.replace(/,/g, '')) || 0;

        totalMortgageMarket += mortgageMarketVal;
        totalMortgageClient += mortgageClientVal;
        totalMortgagePartner += mortgagePartnerVal;

 
    });

    withTotalInvestmentLiabilitiesClientVal = total + totalMortgageClient ;
    withTotalInvestmentLiabilitiesPartnerVal = totalGrandPartner + totalMortgagePartner;
    withTotalInvestmentLiabilieitsMarketVal = totalGrandMarketVal + totalMortgageMarket;

    let formattedGrandTotal = withTotalInvestmentLiabilitiesClientVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandPartnerTotal = withTotalInvestmentLiabilitiesPartnerVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandMarketTotal = withTotalInvestmentLiabilieitsMarketVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    // 4. Update the grand total fields
    $('.total_related_liabilities_client').val(formattedGrandTotal);
    $('.total_related_liabilities_partner').val(formattedGrandPartnerTotal);
    $('.total_related_liabilities_market_value').val(formattedGrandMarketTotal);
     
   
}

    function calculateGrandTotalForInvestment(){
    let total = 0;
    let totalGrandPartner = 0;
    let totalGrandMarketVal = 0;
    let totalMarket = 0;
    let totalClient = 0;
    let totalPartner = 0;

    let clientFields = [
        // '.long_term_client',
        '.superannuation_client_client',
        '.superannuation_partner_client',
        '.shares_fund_client',
        '.business_client'
    ];

    let partnerFields = [
        // '.long_term_partner',
        '.superannuation_client_partner',
        '.superannuation_partner_partner',
        '.shares_fund_partner',
        '.business_partner'
    ];
    
    let marketValueFields = [
        // '.long_term_market_value',
        '.superannuation_client_market_value',
        '.superannuation_partner_market_value',
        '.shares_fund_market_value',
        '.business_market_value'
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

    marketValueFields.forEach(function(selector) {
        let marketvalString = $(selector).val() || '0';
        let cleanMarketVal = parseFloat(marketvalString.replace(/,/g, '')) || 0;
        totalGrandMarketVal += cleanMarketVal;
    });


    $('.form-row-investment').each(function() {
        let row = $(this);
        
    
        let marketVal = parseFloat(row.find('.market_value').val()?.replace(/,/g, '')) || 0;
        let clientVal = parseFloat(row.find('.client').val()?.replace(/,/g, '')) || 0;
        let partnerVal = parseFloat(row.find('.partner').val()?.replace(/,/g, '')) || 0;

        totalMarket += marketVal;
        totalClient += clientVal;
        totalPartner += partnerVal;
    });


    withTotalInvestmentClientVal = total + totalClient;
    withTotalInvestmentPartnerVal = totalGrandPartner + totalPartner;
    withTotalInvestmentMarketVal = totalGrandMarketVal + totalMarket;

    let formattedGrandTotal = withTotalInvestmentClientVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandPartnerTotal = withTotalInvestmentPartnerVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandMarketTotal = withTotalInvestmentMarketVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    $('.total_investment_asset_client').val(formattedGrandTotal);
    $('.total_investment_asset_partner').val(formattedGrandPartnerTotal);
    $('.total_investment_asset_market_value').val(formattedGrandMarketTotal);

    GrandTotalAssets();
    NetAssetsGrandTotal();
}

function GrandTotalAssets(){
    let cleanNonInvestmentTotalMarketValue = parseFloat(String(withTotalNonInvestmentMarketVal || '').replace(/[^0-9.-]/g, '')) || 0;
    //  let cleanNonInvestmentTotalMarketValue = withTotalNonInvestmentClientVal;
    let cleanNonInvestmentTotalClientValue = parseFloat(String(withTotalNonInvestmentClientVal || '').replace(/[^0-9.-]/g, '')) || 0;
    let cleanNonInvestmentPartnerValue = parseFloat(String(withTotalNonInvestmentPartnerVal || '').replace(/[^0-9.-]/g, '')) || 0;
   
    let cleanInvestmentTotalMarkettValue = parseFloat(String(withTotalInvestmentMarketVal || '' ).replace(/[^0-9.-]/g, '')) || 0;
    // let cleanInvestmentTotalMarkettValue = withTotalInvestmentMarketVal;
    let cleanInvestmentClientValue = parseFloat(String(withTotalInvestmentClientVal || '').replace(/[^0-9.-]/g, '')) || 0;
    let cleanInvestmentPartnerValue = parseFloat(String(withTotalInvestmentPartnerVal || 0).replace(/[^0-9.-]/g, '')) || 0;

    let totalAssetsForMarketValue = cleanNonInvestmentTotalMarketValue + cleanInvestmentTotalMarkettValue;
    let totalAssetsForClientValue = cleanNonInvestmentTotalClientValue + cleanInvestmentClientValue;
    let totalAssetsForPartnerValue = cleanNonInvestmentPartnerValue + cleanInvestmentPartnerValue;

     let formattedGrandMarketTotalValue = totalAssetsForMarketValue.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    let formattedGrandClientTotalValue = totalAssetsForClientValue.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    
    let formattedGrandPartnerTotalValue = totalAssetsForPartnerValue.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    $('.total_asset_market_value').val(formattedGrandMarketTotalValue);
    $('.total_asset_client').val(formattedGrandClientTotalValue);
    $('.total_asset_partner').val(formattedGrandPartnerTotalValue);
}

function GrandTotalLiabilities(){
    let cleanNonInvestmentTotalMarketValue = parseFloat(String(withTotalNonInvestmentLiabilieitsMarketVal  || '').replace(/[^0-9.-]/g, '')) || 0;
    //  let cleanNonInvestmentTotalMarketValue = withTotalNonInvestmentClientVal;
    let cleanNonInvestmentTotalClientValue = parseFloat(String(withTotalNonInvestmentLiabilitiesClientVal  || '').replace(/[^0-9.-]/g, '')) || 0;
    let cleanNonInvestmentPartnerValue = parseFloat(String(withTotalNonInvestmentLiabilitiesPartnerVal  || '').replace(/[^0-9.-]/g, '')) || 0;
    let cleanInvestmentTotalMarkettValue = parseFloat(String(withTotalInvestmentLiabilieitsMarketVal  || '' ).replace(/[^0-9.-]/g, '')) || 0;
    // let cleanInvestmentTotalMarkettValue = withTotalInvestmentMarketVal;
    let cleanInvestmentClientValue = parseFloat(String(withTotalInvestmentLiabilitiesClientVal  || '').replace(/[^0-9.-]/g, '')) || 0;
    let cleanInvestmentPartnerValue = parseFloat(String(withTotalInvestmentLiabilitiesPartnerVal  || 0).replace(/[^0-9.-]/g, '')) || 0;

    let totalAssetsForMarketValue = cleanNonInvestmentTotalMarketValue + cleanInvestmentTotalMarkettValue;
    let totalAssetsForClientValue = cleanNonInvestmentTotalClientValue + cleanInvestmentClientValue;
    let totalAssetsForPartnerValue = cleanNonInvestmentPartnerValue + cleanInvestmentPartnerValue;

     let formattedGrandMarketTotalValue = totalAssetsForMarketValue.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    let formattedGrandClientTotalValue = totalAssetsForClientValue.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    
    let formattedGrandPartnerTotalValue = totalAssetsForPartnerValue.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    $('.total_liabilities_market_value').val(formattedGrandMarketTotalValue);
    $('.total_liabilities_client').val(formattedGrandClientTotalValue);
    $('.total_liabilities_partner').val(formattedGrandPartnerTotalValue);
}

function NetAssetsGrandTotal(){

    let totalAssetMarketValue =  parseFloat($('.total_asset_market_value').val()?.replace(/,/g, '') || 0) ;
    let totalAssetClient = parseFloat($('.total_asset_client').val()?.replace(/,/g, '') || 0);
    let totalAssetPartner = parseFloat($('.total_asset_partner').val()?.replace(/,/g, '') || 0);

    let totalLiabilititiesMarketValue = parseFloat($('.total_liabilities_market_value').val()?.replace(/,/g, '') || 0);
    let totalLiabilititiesClientValue = parseFloat($('.total_liabilities_client').val()?.replace(/,/g, '') || 0);
    let totalLiabilititiesPartnerValue = parseFloat($('.total_liabilities_partner').val()?.replace(/,/g, '') || 0);

    let netAssetMarketValueTotal = totalAssetMarketValue - totalLiabilititiesMarketValue;
    let netAssetClientValueTotal = totalAssetClient - totalLiabilititiesClientValue;
    let netAssetPartnerValueTotal = totalAssetPartner - totalLiabilititiesPartnerValue;

     let currencyFormatNetAssetMarketValue = netAssetMarketValueTotal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    
    let currencyFormatNetAssetClientValue = netAssetClientValueTotal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    let currencyFormatNetAssetPartnerValue = netAssetPartnerValueTotal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    $('.net_assets_market_value').val(currencyFormatNetAssetMarketValue);
    $('.net_assets_client').val(currencyFormatNetAssetClientValue);
    $('.net_assets_partner').val(currencyFormatNetAssetPartnerValue);
}

function calculatePayGEstimation(salary,estimation){

let salaryClientAnnual = parseFloat($(salary).val()?.replace(/,/g, '')) || 0; 
let result = 0;

if (salaryClientAnnual < 18200) {
    result = 0;
} else if (salaryClientAnnual < 37000) {
    result = (salaryClientAnnual - 18200) * 0.19;
} else if (salaryClientAnnual < 90000) {
  
    result = 3572 + (90000 - 37200) * 0.325; 
} else if (salaryClientAnnual < 180000) {
    result = (salaryClientAnnual - 90000) * 0.37 + 20797;
} else {
    result = 54097 + (salaryClientAnnual - 180000) * 0.45;
}

  let currencyFormatPayGClient = result.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
$(estimation).val(currencyFormatPayGClient);

}



