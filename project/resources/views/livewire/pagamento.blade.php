<form>
              
    <div class="color flex gap-4  lg:text-2xl items-center sm:text-xs">

          <div>
           <input type="checkbox" id="paga" name="paga" value="" />
            <label for="paga" class="text-poppins" > Carta di credito </label>
          </div>
         <div class="flex gap-3.5">
            <i class="fab fa-cc-mastercard"></i> <i class="fab fa-cc-visa"></i
             ><i class="fab fa-cc-amex"></i>
         </div>
    </div>

    <div class="credit_card lg:w-full lg:rounded-md lg:p-2.5 lg:flex lg:flex-col lg:gap-6">
      <div class="credit_data flex flex-col">
        <label for="provinzia" class="color text-popins lg:text-2xl sm:text-xs">Provinzia</label>
        <livewire:pagamento-textfield text="provinzia"/>
      </div>
        <div class="lg:grid lg:grid-cols-2 lg:gap-4 sm:grid-cols-2">
     
            <livewire:pagamento-text label="Data di scadenza" type="date" text="date"/>
     
              
            <livewire:pagamento-text  label="CVC/CVV" type="number" text="cvc" />
            {{-- <i class="far fa-credit-card cvc"></i> --}}
      
       </div>
      <div class="credit_data  flex flex-col">
        <label for="nome" class="color text-popins lg:text-2xl sm:text-xs">Nome sualla carta</label>
        <livewire:pagamento-textfield text="nome"/>
      </div>
    </div>

  <div class="flex flex-col gap-6">

    <div>
      <input type="checkbox" id="paga" name="Paypal" value="" />
      <label for="paga" class="text-poppins color lg:text-2xl sm:text-xs">
        PayPal <i class="fab fa-cc-paypal"></i> Che cos'e PayPal </label>
      </div>
      <div>
      <input type="checkbox" id="paga" name="googlePay" value="" />
      <label for="paga" class="color lg:text-2xl sm:text-xs"> GooglePay </label>
    </div>
    
 </div>
</form>

