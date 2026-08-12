
let non_investmentIdx = 1;
let non_investmentNmbr = 2;
function addHTML(count){
      let rowIdx = count;
        var add_investment_html = `<div class="form-row-investment grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
    <label>Investment Property ${non_investmentNmbr}</label>
    <select name="row[${non_investmentIdx}][non_investment_owner]"  id="non-investment-owner" class="investment_property block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option value="Owner">Owner</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input client_percentage"  placeholder="0%" name="row[${non_investmentIdx}][client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input partner_percentage"  placeholder="0%" name="row[${non_investmentIdx}][partner_percentage]">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input market_value"  placeholder="0.00" name="row[${non_investmentIdx}][market_value]">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input client"  placeholder="0.00" name="row[${non_investmentIdx}][client]">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input partner"  placeholder="0.00" name="row[${non_investmentIdx}][partner]">
  </div>
 <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input investment_id"  placeholder="0.00" name="row[${non_investmentIdx}][investment_id]" >
  </div>
  <div>`;
    $('.investment-property').append(add_investment_html);
      non_investmentIdx++;
      non_investmentNmbr++
}

let otherIdx = 1;
let otherNmbr = 2;
function Add_Non_Investment_HTML(){
   
        var add_non_investment_html = `<div class="form-row grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
    <label>Other Personal Assets ${otherNmbr}</label>
    <select  id="non-investment-owner-asset" name="noninvestmentasset[${otherIdx}][other_personal_asset] "class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select non-investment-owner-asset ">
    <option selected>Owner</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input non_investment_asset_client_percentage"  placeholder="0%" name="noninvestmentasset[${otherIdx}][non_investment_asset_client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input non_investment_asset_partner_percentage"  name="noninvestmentasset[${otherIdx}][non_investment_asset_partner_percentage]" placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input non_investment_asset_market_value" name="noninvestmentasset[${otherIdx}][non_investment_asset_market_value]"  placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input non_investment_asset_client"  name="noninvestmentasset[${otherIdx}][non_investment_asset_client]" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input non_investment_asset_partner" name="noninvestmentasset[${otherIdx}][non_investment_asset_partner]"  placeholder="0.00">
  </div>
  <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input others_id" name="noninvestmentasset[${otherIdx}][others_id]"  placeholder="0.00" >
  </div>
  <div>`;
    $('.div-non-investment-property').append(add_non_investment_html);
      otherIdx++;
      otherNmbr++;
}
  let number = 2;
  let rowIdx = 1;
  
function Add_Other_Debt_HTML(){
   

        var add_other_debt_html = ` <br/> <div class="form-liabilities-non-investment grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

  <div>
    <label >Other Debt ${number} </label>
    <select  id="other_debt" name="debt[${rowIdx}][other_debt] "class="other_debt block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input other_debt_client_percentage" name="debt[${rowIdx}][other_debt_client_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input other_debt_partner_percentage" name="debt[${rowIdx}][other_debt_partner_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input other_debt_market_value" name="debt[${rowIdx}][other_debt_market_value]"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input other_debt_client" name="debt[${rowIdx}][other_debt_client]" placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input other_debt_parnter" name="debt[${rowIdx}][other_debt_parnter]"  placeholder="0.00">
  </div>
    <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input other_debt_id" name="debt[${rowIdx}][other_debt_id]"  placeholder="0.00">
  </div>

  </div>`;
     
    $('.div-add-debt').append(add_other_debt_html);
      rowIdx++;
      number++;
   
}

let creditIdx = 1;
let creditNumber = 2;
function Add_Credit_Card_HTML(){
   

        var add_credit_card = `<br/> <div class="form-row-credit-card-liabilities grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
       <label >Credit Card ${creditNumber} <i style="font-weight:normal;font-size:12px;">(If paid in full leave blank)</i></label></label>
    <select  id="credit_card" name="creditcard[${creditIdx}][credit_card]" class="credit_card block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
   
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div >
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input credit_card_client_percentage" name="creditcard[${creditIdx}][credit_card_client_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input credit_card_partner_percentage" name="creditcard[${creditIdx}][credit_card_partner_percentage]"  placeholder="0%">
  </div>

 <div >
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input credit_card_market_value" name="creditcard[${creditIdx}][credit_card_market_value]"  placeholder="0.00">
  </div>

 <div >
   <label >Client </label>
    <input type="text" class="mt-1 form-input credit_card_client" name="creditcard[${creditIdx}][credit_card_client]"  placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input credit_card_partner" name="creditcard[${creditIdx}][credit_card_partner]"  placeholder="0.00">
  </div>
   <div style="display:none;>
   <label ">ID</label>
    <input type="text" class="mt-1 form-input credit_card_id" name="creditcard[${creditIdx}][credit_card_id]"  placeholder="0.00">
  </div>
  </div>`;
     
    $('.div-add-credit-card').append(add_credit_card);
      creditIdx++;
      creditNumber++;
   
}
let mortgageIdx = 1;
let mortgageNumber = 2;
function Add_Mortgage_Investment_Property(){
  var add_mortgage = `<br/><div class="form-row-mortgage-investment grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">

<div>
 
       <label >Mortgage - Investment Property ${mortgageNumber}</label>
    <select  id="mortgage_investment" name="mortgageInvestment[${mortgageIdx}][mortgage_investment]" class="mortgage_investment block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option selected disabled>Select</option>
    <option value="client">Client</option>
    <option value="partner">Partner</option>
    <option value="joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input mortgage_investment_client_percentage" name="mortgageInvestment[${mortgageIdx}][mortgage_investment_client_percentage]"  placeholder="0%">
  </div>

 <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input mortgage_investment_partner_percentage" name="mortgageInvestment[${mortgageIdx}][mortgage_investment_partner_percentage]" placeholder="0%">
  </div>

 <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input mortgage_investment_market_value" name="mortgageInvestment[${mortgageIdx}][mortgage_investment_market_value]" placeholder="0.00">
  </div>

 <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input mortgage_investment_client" name="mortgageInvestment[${mortgageIdx}][mortgage_investment_client]"   placeholder="0.00">
  </div>
  <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input mortgage_investment_partner" name="mortgageInvestment[${mortgageIdx}][mortgage_investment_partner]" placeholder="0.00">
  </div>
    <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input mortgage_investment_id" name="mortgageInvestment[${mortgageIdx}][mortgage_investment_id]" placeholder="0.00">
  </div>

  </div> <br/>`;
   $('.div-add-mortgage-investment-property').append(add_mortgage);
      mortgageIdx++;
      mortgageNumber++;

}

let personalOtherDebtsIdx = 1;
let personalOtherDebtsNumber = 2;

function Add_Personal_Other_Debts(){
  var personal_other_debts = `<br/><div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Other Debt ${personalOtherDebtsNumber}</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_other_debts" name="personalDebtRateOtherDebt[${personalOtherDebtsIdx}][personal_debt_rate_other_debts]" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_other_debt_years" name="personalDebtRateOtherDebt[${personalOtherDebtsIdx}][personal_debt_rate_other_debt_years]">
                    </div>

                       <div class="col-span-1 md:col-span-3">
                        <label>ID</label>
                        <input type="text" class="mt-1 form-input debt_rates_other_id" name="personalDebtRateOtherDebt[${personalOtherDebtsIdx}][debt_rates_other_id]">
                    </div>

                </div>`;
                 $('.div-add-personal-other-debts').append(personal_other_debts);
      personalOtherDebtsIdx++;
      personalOtherDebtsNumber++;
}

let personalCCIdx = 1;
let personalCCNumber = 2;

function Add_Personal_Credit_Cards(){
  var personal_cc = `<br/><div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                    <div class="col-span-1 md:col-span-3">
                        <label>Credit Card ${personalCCNumber}</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_credit_card" name="personalDebtRatesCreditCard[${personalCCIdx}][personal_debt_rate_credit_card]" placeholder="0%">
                    </div>


                    <div class="col-span-1 md:col-span-3">
                        <label>Years</label>
                        <input type="text" class="mt-1 form-input personal_debt_rate_credit_card_years" name="personalDebtRatesCreditCard[${personalCCIdx}][personal_debt_rate_credit_card_years]">
                    </div>

                </div>      
                <div class="col-span-1 md:col-span-3">
                        <label>ID</label>
                        <input type="text" class="mt-1 form-input debt_rates_credit_card_id" name="personalDebtRatesCreditCard[0][debt_rates_credit_card_id]">
                    </div><br/>`;

                 $('.div-add-personal-credit-cards').append(personal_cc);

            personalCCIdx++;
            personalCCNumber++;
}
