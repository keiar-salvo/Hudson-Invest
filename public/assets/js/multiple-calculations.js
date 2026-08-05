    
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

