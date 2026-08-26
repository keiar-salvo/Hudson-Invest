    
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

function calculateFV(finalrate, nper, pmt, pvalue, type = 0) {
        if (finalrate === 0) return -(pvalue + pmt * nper);

        let pvFactor = Math.pow(1 + finalrate, nper);
        let pmtFactor = ((Math.pow(1 + finalrate, nper) - 1) / finalrate) * (1 + finalrate * type);
    
        return -(pvalue * pvFactor + pmt * pmtFactor);
}

function currentPosition_and_financial_independance(formData,annual_growth_rate_invest_assets,income_investment_portfolio_assets,annual_inflation_rate){
    
    // Get Total House Hold Income
    var gross_annual_income_client = parseFloat($('.total_income_client_annual').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var gross_annual_income_partner = parseFloat($('.total_income_partner_annual').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var total_household_income = gross_annual_income_client + gross_annual_income_partner;
    var formatted_household_income = total_household_income.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Value of Your Home
    var principle_residence_client = parseFloat($('.principle_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var principle_residence_partner = parseFloat($('.principle_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var your_value_home = principle_residence_client + principle_residence_partner;
    
    var formatted_value_your_home =  your_value_home.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Your Home Mortgage
    var your_home_mortgage = $('.mortgage_market_value').val().toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Equity in Your Home
    var cleanMortgage = your_home_mortgage?.replace(/[^0-9.-]/g, '') || 0;
    var equity = your_value_home  - cleanMortgage;
    var formatted_equity_in_your_home = equity.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Investment Portfolio Long Term Savings
    var long_term_savings_client = parseFloat($('.long_term_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var long_term_savings_partner = parseFloat($('.long_term_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var investment_portfolio_long_term_savings = long_term_savings_client + long_term_savings_partner;
    var formatted_investment_long_term_savings = investment_portfolio_long_term_savings.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Shares / Managed Funds Net Value
    var share_fund_client = parseFloat($('.shares_fund_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var share_fund_partner = parseFloat($('.shares_fund_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var margin_investment_client  = parseFloat($('.margin_investment_client').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var margin_investment_partner  = parseFloat($('.margin_investment_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var investment_portfolio_shares_net_value  = share_fund_client + share_fund_partner - margin_investment_client - margin_investment_partner;
    var formatted_investment_portfolio_shares_net_value =  investment_portfolio_shares_net_value.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Business Net Value
    var business_client  = parseFloat($('.business_client ').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var business_partner  = parseFloat($('.business_partner ').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var business_loans_client   = parseFloat($('.business_loans_client ').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var business_loans_partner  = parseFloat($('.business_loans_partner').val()?.replace(/[^0-9.-]/g, '')) || 0;
    var investment_portfolio_business_net_value  = business_client + business_partner - business_loans_client - business_loans_partner;
    var formatted_investment_portfolio_business_net_value =  investment_portfolio_business_net_value.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Get Total Existing Investment Property Portfolio
    var total_investment_portfolio = 0;
    var formatted_investment_portfolio_existing_investment_property = 0;

    $('.form-row-investment').each(function() {
        let row = $(this);
        
    
        // let marketVal = parseFloat(row.find('.market_value').val()?.replace(/,/g, '')) || 0;
        let clientVal = parseFloat(row.find('.client').val()?.replace(/,/g, '')) || 0;
        let partnerVal = parseFloat(row.find('.partner').val()?.replace(/,/g, '')) || 0;

   
        total_investment_portfolio += clientVal + partnerVal
        formatted_investment_portfolio_existing_investment_property = total_investment_portfolio.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
        
    });

    // Get Total Porfolio Mortgage
    var total_investment_portfolio_mortgage = 0;
    var formatted_investment_portfolio_mortgage = 0;
      $('.form-row-mortgage-investment').each(function() {
        let row = $(this);
        
        let mortgageMarketVal = parseFloat(row.find('.mortgage_investment_market_value').val()?.replace(/,/g, '')) || 0;
        let mortgageClientVal = parseFloat(row.find('.mortgage_investment_client').val()?.replace(/,/g, '')) || 0;
        let mortgagePartnerVal = parseFloat(row.find('.mortgage_investment_partner').val()?.replace(/,/g, '')) || 0;

      
        total_investment_portfolio_mortgage += mortgageClientVal + mortgagePartnerVal;
        
      
    });
    
      formatted_investment_portfolio_mortgage = total_investment_portfolio_mortgage.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 

 
    });

    // Get Total Investment Portfolio Total
    var total_long_term_savings = parseFloat(formatted_investment_long_term_savings?.replace(/,/g, '')) || 0; 
    var total_superannuation_client = parseFloat($('.superannuation_client_client').val()?.replace(/,/g, '')) || 0; 
    var total_superannuation_partner_partner = parseFloat($('.superannuation_partner_partner').val()?.replace(/,/g, '')) || 0; 
    var total_shares_net_value = parseFloat(formatted_investment_portfolio_shares_net_value?.replace(/,/g, '')) || 0; 
    var total_business_net_value = parseFloat(formatted_investment_portfolio_business_net_value?.replace(/,/g, '')) || 0; 
    var total_existing_invesment_property = parseFloat(formatted_investment_portfolio_existing_investment_property?.replace(/,/g, '')) || 0; 
    var investment_portfolio_total = total_long_term_savings + total_superannuation_client + total_superannuation_partner_partner + total_shares_net_value + total_business_net_value + total_existing_invesment_property;

    var formatted_investment_portfolio_total = investment_portfolio_total.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

    // Get Total Investment Portfolio Net Position
    var total_investment_porfolio_net_position = investment_portfolio_total + total_investment_portfolio_mortgage;
    var formatted_investment_portfolio_net_position = total_investment_porfolio_net_position.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

    // Get Total Current Net Financial Assets
    var repay_mortgage  = parseFloat($('.mortgage_market_value').val()?.replace(/,/g, '')) || 0;
    var total_investment_portfolio_net_position = total_investment_porfolio_net_position;
    var cuurent_net_financial_assets =  total_investment_portfolio_net_position - repay_mortgage;
    var formatted_cuurent_net_financial_assets = cuurent_net_financial_assets.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });


    let rate = parseFloat(annual_growth_rate_invest_assets) / 100; 
    let periods = parseInt($('.years_to_target_age').val()) || 0;
    let total_superanuation_annual =parseFloat($('.grand_total_annual').val()?.replace(/,/g, '')) || 0;
    let total_superannuation = total_superannuation_client + total_superannuation_partner_partner;

    let rawperiods = parseFloat($('.years_to_target_age').val()) || 0;
    let finalrate = (rate) / 4;

    let nper = rawperiods * 4;
    let pmt =  -(total_superanuation_annual / 4);
    let pvalue = -total_superannuation;
    let type = 1;


    // Future Value Long Term Savings
    let long_term_raw_pv = parseFloat(formatted_investment_long_term_savings?.replace(/,/g, '')) || 0 
    let long_term_pmt = 0;
    let long_term_pv = -long_term_raw_pv;
    let long_term_calculated_value = calculateFV(rate,periods,long_term_pmt,long_term_pv,type);
    if (Math.abs(long_term_calculated_value) === 0) {
    long_term_calculated_value = 0.00;
        }

    var long_term_total_future_value  = long_term_calculated_value.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
    

    // Future Value Superannuation
    let totalFutureValue = calculateFV(finalrate,nper,pmt,pvalue,type);

    var supper_annuation_futureValue = totalFutureValue.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
    

    // Future Value of Value of your home
    let pv = parseFloat(formatted_value_your_home?.replace(/,/g, '')) || 0;
    let pValue = Math.abs(pv);
    let futureValue = pValue * Math.pow((1 + rate), periods);
    var value_of_your_home_futureValue = futureValue.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });

    // Future Value for Shares
    let total_shares =  parseFloat($('.shares_fund_market_value').val()?.replace(/,/g, '')) || 0;
    let deduction = parseFloat($('.margin_investment_market_value').val()?.replace(/,/g, '')) || 0;
    let postValue = -total_shares;
    let shares_pmt = 0;

    let shares_calculated_future_value = calculateFV(rate,periods,shares_pmt,postValue,type);
    // console.log("Shares FV: " + shares_calculated_future_value);
    // console.log("Deduction: " + deduction);
    let final_shares_value = shares_calculated_future_value - deduction;
       if (Math.abs(final_shares_value) === 0) {
            final_shares_value = 0.00;
        }

    let share_net_future_value = final_shares_value.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

    // Future Value for Business
    let clean_pv = parseFloat($('.business_market_value').val()?.replace(/,/g, '')) || 0;
    let clean_business_loan_decution = parseFloat($('.business_loans_market_value').val()?.replace(/,/g, '')) || 0;
    let raw_pv = -clean_pv;
    let raw_pmt = 0;
    let business_future_value = calculateFV(rate,periods,raw_pmt,raw_pv,type);
    let deducted_future_value = business_future_value - clean_business_loan_decution;
    if (Math.abs(deducted_future_value) === 0) {
            deducted_future_value = 0.00;
        }
    var formatted_business_future_value = deducted_future_value.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

    let clean_existing_investment_portfolio = parseFloat(formatted_investment_portfolio_existing_investment_property?.replace(/,/g, '')) || 0;
    let existing_portfolio_pv = -clean_existing_investment_portfolio;
    let total_existing_investment_porfolio_future_value = calculateFV(rate,periods,raw_pmt,existing_portfolio_pv,type);
    let formatted_existing_investment_portfolio_future_value = total_existing_investment_porfolio_future_value.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
   
let superannuation_net_value_fv = parseFloat(supper_annuation_futureValue?.replace(/,/g, '')) || 0; 
let long_term_savings_fv = parseFloat(long_term_total_future_value?.replace(/,/g, '')) || 0;  
let share_net_fv = parseFloat(share_net_future_value?.replace(/,/g, '')) || 0;   
let business_net_fv = parseFloat(formatted_business_future_value?.replace(/,/g, '')) || 0;    
let existing_investment_fv =  parseFloat(formatted_existing_investment_portfolio_future_value?.replace(/,/g, '')) || 0;  
let mortgage_static = parseFloat(formatted_investment_portfolio_mortgage?.replace(/,/g, '')) || 0; 

let total_financial_assets = superannuation_net_value_fv + long_term_savings_fv + share_net_fv + business_net_fv + existing_investment_fv + mortgage_static;
var grand_total_financial_assets = Math.round(total_financial_assets).toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
let formatted_repay_mortgage = $('.mortgage_market_value').val().toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

let clean_total_household_income =  parseFloat(formatted_household_income?.replace(/,/g, '')) || 0; 
let current_income_required_in_retrement_rate = parseFloat($('.current_income_required_in_retirement').val()) / 100; 
let annual_gross_household = clean_total_household_income * current_income_required_in_retrement_rate;
var formatted_annual_gross_household = annual_gross_household.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

let weekly_gross_household_income = parseFloat(annual_gross_household) / 52;
var formatted_weekly_gross_household_income = Math.round(weekly_gross_household_income).toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

let agethisyear = parseFloat($('.age_average').val());
let retirementage =  parseFloat($('.target_age').val());
let years_to_achive_financial_independence =  retirementage - agethisyear + 1;
console.log("Age: " + years_to_achive_financial_independence);

let get_income_investment_portfolio_assets = parseFloat(income_investment_portfolio_assets) / 100;
let clean_annual_gross_household = parseFloat(formatted_annual_gross_household?.replace(/,/g, '')) || 0; 
let total_invesemtment_porfolio = clean_annual_gross_household / get_income_investment_portfolio_assets;
var formatted_total_invesemtment_porfolio = total_invesemtment_porfolio.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

let raw_rate = parseFloat(annual_inflation_rate) || 0;
let fin_rate = raw_rate > 1 ? raw_rate / 100 : raw_rate;

let fi_nper = parseFloat(years_to_achive_financial_independence) || 0;

// Remove commas from string formatted numbers (e.g., "3,750,000" becomes 3750000)
let raw_fi_pv = 0;
if (formatted_total_invesemtment_porfolio) {
    let cleanString = formatted_total_invesemtment_porfolio.toString().replace(/,/g, '');
    raw_fi_pv = parseFloat(cleanString) || 0;
}

let fi_pmt = 0;
let fi_pv  = -raw_fi_pv; // Mirrors the negative flag (-$C$16) from Excel
let fi_type = 1;        // Mirrors the Type parameter (1) from Excel

// 3. Execute the function
let total_investment_portfolio_desired_retirement_age = calculateFV(fin_rate, fi_nper, fi_pmt, fi_pv, fi_type);

// 4. Format the final output to display with commas and no decimals (e.g., "7,185,388")
let formatted_total_investment_portfolio_desired_retirement_age = Math.round(total_investment_portfolio_desired_retirement_age).toLocaleString('en-US');

// var formatted_total_investment_portfolio_desired_retirement_age = Math.round(total_investment_portfolio_desired_retirement_age).toLocaleString('en-US', { 
//           minimumFractionDigits: 2, 
//           maximumFractionDigits: 2 
//     });
let clean_total_investment_portfolio_desired_retirement_age =  parseFloat(formatted_total_investment_portfolio_desired_retirement_age?.replace(/,/g, '')) || 0;
let equivalent_value_annual_household =  clean_total_investment_portfolio_desired_retirement_age * get_income_investment_portfolio_assets;
var formatted_equivalent_value_of_annual_household = equivalent_value_annual_household.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

let clean_net_financial_assets = parseFloat(formatted_cuurent_net_financial_assets?.replace(/,/g, '')) || 0;
let your_current_net_financial_asset_value = clean_total_investment_portfolio_desired_retirement_age - clean_net_financial_assets;
var formatted_your_current_net_financial_asset_value =  your_current_net_financial_asset_value.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
let clean_years_to_achieve = fi_nper;
let annual_increase_net_financial_assets = -your_current_net_financial_asset_value / clean_years_to_achieve;
var formatted_annual_increase_net_financial_assets =  annual_increase_net_financial_assets.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

let clean_monthly_increase_net_financial_asset = parseFloat(formatted_annual_increase_net_financial_assets?.replace(/,/g, '')) || 0 ;
let monthly_increase_net_financial_asset = clean_monthly_increase_net_financial_asset / 12;
var formatted_monthly_increase_net_financial_asset = monthly_increase_net_financial_asset.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });
let weekly_increase_net_financial_asset = clean_monthly_increase_net_financial_asset / 52;
var formatted_weekly_increase_net_financial_asset = weekly_increase_net_financial_asset.toLocaleString('en-US', { 
          minimumFractionDigits: 2, 
          maximumFractionDigits: 2 
    });

    formData.append('_method','POST');
    formData.append('gross_anual_income_client',$('.total_income_client_annual').val());
    formData.append('gross_anual_income_partner',$('.total_income_partner_annual').val());
    formData.append('total_houese_hold_income',formatted_household_income);
    formData.append('your_home_value_of_your_home',formatted_value_your_home);
    formData.append('your_home_mortgage',your_home_mortgage);
    formData.append('equity_in_your_home',formatted_equity_in_your_home);
    formData.append('investment_portfolio_long_term_savings',formatted_investment_long_term_savings);
    
    formData.append('investment_portfolio_superannuation_client_net_value',$('.superannuation_client_client').val());
    formData.append('investment_portfolio_superannuation_partner_net_value',$('.superannuation_partner_partner').val());
    formData.append('investment_portfolio_shares_net_value',formatted_investment_portfolio_shares_net_value);
    formData.append('investment_portfolio_business_net_value',formatted_investment_portfolio_business_net_value);
    formData.append('investment_portfolio_existing_investment_property',formatted_investment_portfolio_existing_investment_property);
    formData.append('investment_portfolio_mortgage',formatted_investment_portfolio_mortgage);
    formData.append('investment_portfolio_total',formatted_investment_portfolio_total);
    formData.append('investment_portfolio_net_position',formatted_investment_portfolio_net_position);
    formData.append('investment_portfolio_repay_mortgage',formatted_repay_mortgage);

    formData.append('investment_portfolio_current_net_financial_assets',formatted_cuurent_net_financial_assets);
    formData.append('projected_value_of_your_home',value_of_your_home_futureValue);
    formData.append('investment_portfolio_assets_superannuation',supper_annuation_futureValue);
    formData.append('investment_portfolio_assets_long_term_savings',long_term_total_future_value);
    formData.append('investment_portfolio_assets_shares',share_net_future_value);
    formData.append('investment_portfolio_assets_business_net_value',formatted_business_future_value);
    formData.append('investment_portfolio_assets_existing_investment_property',formatted_existing_investment_portfolio_future_value);
    formData.append('investment_portfolio_assets_mortgage',formatted_investment_portfolio_mortgage);
    formData.append('investment_portfolio_net_financial_assets',grand_total_financial_assets);

    // Financial Independance
    formData.append('gross_household_income_per_annum',formatted_household_income);
    formData.append('desired_current_income_required_retirement',$('.current_income_required_in_retirement').val());
    formData.append('annual_gross_houshold_income_required_in_retirement',formatted_annual_gross_household);
    formData.append('weekly_gross_household_income',formatted_weekly_gross_household_income);
    formData.append('age_this_year',$('.age_average').val());
    formData.append('prefer_retirement_age',$('.target_age').val());
    formData.append('years_to_achieve_financial_independence',years_to_achive_financial_independence);
    formData.append('net_financial_assets',formatted_cuurent_net_financial_assets);
    formData.append('total_investment_portfolio_required',formatted_total_invesemtment_porfolio);
    formData.append('total_annual_household_income_retirement',formatted_total_investment_portfolio_desired_retirement_age);
    formData.append('equivalent_value_of_annual_household',formatted_equivalent_value_of_annual_household);
    formData.append('your_current_net_financial_assets_value',formatted_your_current_net_financial_asset_value);
    formData.append('annual_increase_in_net_financial_assets',formatted_annual_increase_net_financial_assets);
    formData.append('monthly_increase_in_net_financial_assets',formatted_monthly_increase_net_financial_asset);
    formData.append('weekly_increase_in_net_financial_assets',formatted_weekly_increase_net_financial_asset);
    formData.append('current_level_of_income_and_expenses',$('.amount_per_week').val());
    formData.append('total_investment_portfolio_achieve_annual_household_today',formatted_total_invesemtment_porfolio);
    

    

    

    
    

    

    
    

}


