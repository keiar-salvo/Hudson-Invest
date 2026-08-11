    
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
         }
            

    }

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

   let withTotalClientVal = total + totalClient;
    let withTotalPartnerVal = totalGrandPartner + totalPartner;
    let withTotalMarketVal = totalGrandMarketVal + totalMarket;

    let formattedGrandTotal = withTotalClientVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandPartnerTotal = withTotalPartnerVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandMarketTotal = withTotalMarketVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    // 4. Update the grand total fields
    $('.total_non_investment_client').val(formattedGrandTotal);
    $('.total_non_investment_partner').val(formattedGrandPartnerTotal);
    $('.total_non_investment_market_value').val(formattedGrandMarketTotal);
   
}

    function calculateGrandTotalForInvestment(){
    let total = 0;
    let totalGrandPartner = 0;
    let totalGrandMarketVal = 0;
    let totalMarket = 0;
    let totalClient = 0;
    let totalPartner = 0;

    let clientFields = [
        '.long_term_client',
        '.superannuation_client_client',
        '.superannuation_partner_client',
        '.shares_fund_client',
        '.business_client'
    ];

    let partnerFields = [
        '.long_term_partner',
        '.superannuation_client_partner',
        '.superannuation_partner_partner',
        '.shares_fund_partner',
        '.business_partner'
    ];
    
    let marketValueFields = [
        '.long_term_market_value',
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

    // FIX 1: Narrow down selectors so it only loops through valid individual data rows
    $('.form-row-investment').each(function() {
        let row = $(this);
        
        // FIX 2: Added optional chaining (?.) to prevent crashing if fields don't exist in a row
        let marketVal = parseFloat(row.find('.market_value').val()?.replace(/,/g, '')) || 0;
        let clientVal = parseFloat(row.find('.client').val()?.replace(/,/g, '')) || 0;
        let partnerVal = parseFloat(row.find('.partner').val()?.replace(/,/g, '')) || 0;

        totalMarket += marketVal;
        totalClient += clientVal;
        totalPartner += partnerVal;
    });

    // FIX 3: Moved final math and DOM updates outside the .each loop 
    // to prevent updating total fields repeatedly on every loop iteration.
    let withTotalClientVal = total + totalClient;
    let withTotalPartnerVal = totalGrandPartner + totalPartner;
    let withTotalMarketVal = totalGrandMarketVal + totalMarket;

    let formattedGrandTotal = withTotalClientVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandPartnerTotal = withTotalPartnerVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });
    let formattedGrandMarketTotal = withTotalMarketVal.toLocaleString('en-US', { 
        minimumFractionDigits: 2, 
        maximumFractionDigits: 2 
    });

    $('.total_investment_asset_client').val(formattedGrandTotal);
    $('.total_investment_asset_partner').val(formattedGrandPartnerTotal);
    $('.total_investment_asset_market_value').val(formattedGrandMarketTotal);
}



