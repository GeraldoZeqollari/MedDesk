<form>
<div class="page_left">        
    <div class="color  flex pb-8 pt-4  lg:text-2xl items-center sm:text-xs">
      <div class="flex gap-3.5 items-center">
        <livewire:pagamento-method pagamento_method="Carta di credito" name="credit"/>
         
             <i class="fab fa-cc-mastercard"></i> <i class="fab fa-cc-visa"></i
             ><i class="fab fa-cc-amex"></i>
         </div>
    </div>

    <div class="credit_card  title04 lg:w-full lg:rounded-md lg:p-5 lg:flex lg:flex-col lg:gap-6">
      <div class="credit_data flex flex-col">
        <label for="provinzia" class="color text-popins lg:text-2xl sm:text-xs">Provinzia</label>
        <livewire:pagamento-textfield text="provinzia"/>
      </div>
        <div class="pagamento lg:grid lg:grid-cols-2 sm:flex sm:flex-row gap-1">
     
            <livewire:pagamento-text label="Data di scadenza" type="date" text="date"/>
     
              
            <livewire:pagamento-text  label="CVC/CVV" type="number" text="cvc"/>
            {{-- <i class="far fa-credit-card cvc"></i> --}}
      
       </div>
      <div class="credit_data  flex flex-col">
        <label for="nome" class="color text-popins lg:text-2xl sm:text-xs">Nome sualla carta</label>
        <livewire:pagamento-textfield text="nome"/>
      </div>
    </div>

  <div class="flex flex-col gap-6 pt-8">

    <div class="color flex gap-3 lg:text-2xl items-center sm:text-xs">
      <livewire:pagamento-method pagamento_method="PayPal" name="paypal"/> 
      <i class="fab fa-cc-paypal"></i> Che cos'e PayPal </label>
    </div>
      <div class="color flex   lg:text-2xl  sm:text-xs">
        <livewire:pagamento-method pagamento_method="Google Pay" name="googlePay"/>
      </div>
    
  </div>
</div>
</form>

