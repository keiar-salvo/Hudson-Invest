function addHTML(count){
      let rowIdx = count;
        var add_investment_html = `<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
    <label>Investment Property</label>
    <select name="row[${rowIdx}][non_investment_owner]"  id="non-investment-owner" class="investment_property block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select ">
    <option value="Owner">Owner</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input client_percentage"  placeholder="0%" name="row[${rowIdx}][client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input partner_percentage"  placeholder="0%" name="row[${rowIdx}][partner_percentage]">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input market_value"  placeholder="0.00" name="row[${rowIdx}][market_value]">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input client"  placeholder="0.00" name="row[${rowIdx}][client]">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input partner"  placeholder="0.00" name="row[${rowIdx}][partner]">
  </div>
 <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input investment_id"  placeholder="0.00" name="row[${rowIdx}][investment_id]" >
  </div>
  <div>`;
    $('.investment-property').append(add_investment_html);
      rowIdx++;
}

function Add_Non_Investment_HTML(count){
      let rowIdx = count;
        var add_non_investment_html = `<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 gap-6">
<div>
    <label>Other Personal Assets</label>
    <select  id="non-investment-owner-asset" name="noninvestmentasset[${rowIdx}][other_personal_asset] "class="block w-full bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand px-3 py-2.5 shadow-xs form-select non-investment-owner-asset ">
    <option selected>Owner</option>
    <option value="Client">Client</option>
    <option value="Partner">Partner</option>
    <option value="Joint">Joint</option>
    <option value="Other">Other</option>
  </select>
  </div>
  
  <div>
   <label >Client Percentage</label>
    <input type="text"  class="mt-1 form-input non_investment_asset_client_percentage"  placeholder="0%" name="noninvestmentasset[${rowIdx}][non_investment_asset_client_percentage]">
  </div>

  <div>
   <label >Partner Percentage</label>
    <input type="email"  class="mt-1 form-input non_investment_asset_partner_percentage"  name="noninvestmentasset[${rowIdx}][non_investment_asset_partner_percentage]" placeholder="0%">
  </div>

  <div>
   <label >Market Value</label>
    <input type="tel"  class="mt-1 form-input non_investment_asset_market_value" name="noninvestmentasset[${rowIdx}][non_investment_asset_market_value]"  placeholder="0.00">
  </div>

  <div>
   <label >Client </label>
    <input type="text" class="mt-1 form-input non_investment_asset_client"  name="noninvestmentasset[${rowIdx}][non_investment_asset_client]" placeholder="0.00">
  </div>
    <div>
   <label >Partner</label>
    <input type="text" class="mt-1 form-input non_investment_asset_partner" name="noninvestmentasset[${rowIdx}][non_investment_asset_partner]"  placeholder="0.00">
  </div>
  <div style="display:none;">
   <label >ID</label>
    <input type="text" class="mt-1 form-input others_id" name="noninvestmentasset[${rowIdx}][others_id]"  placeholder="0.00" >
  </div>
  <div>`;
    $('.div-non-investment-property').append(add_non_investment_html);
      rowIdx++;
}
