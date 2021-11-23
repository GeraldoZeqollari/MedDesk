
<p class="color page_left pb-4 text-poppins lg:text-2xl sm:text-sm">A chi dovra essere intestata la fattura</p>

   <div class="page_left flex gap-3">
    <div>
       <livewire:squarebutton button_text="Azienda" icon="fas fa-users fa-2x button_text_color" value="azienda"/>
    </div>
    <div>
       <livewire:squarebutton button_text="Private" icon="fas fa-user fa-2x button_text_color" value="private"/>
    </div>
   </div>

  <div class="title04 page_left pt-4 lg:grid lg:grid-cols-2 lg:gap-16 sm:flex sm:flex-col sm:gap-6">
    
      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('f_name') ? ' has-error' : '' }}">
        <label for="fname">{{$text}}</label>
        <livewire:textfield type="text" name="f_name"/>
        <small class="text_error">{{ $errors->first('f_name') }}</small>
      </div>
  
      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('l_name') ? ' has-error' : '' }}">

         <label for="cname">{{$text1}}</label>
         <livewire:textfield type="text" name="l_name"/>
         <small class="text_error">{{ $errors->first('l_name') }}</small>
      </div>
  
      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('f_code') ? ' has-error' : '' }}">
         <label for="code">{{$text2}}</label>
          <livewire:textfield type="number" name="f_code"/>
          <small class="text_error">{{ $errors->first('f_code') }}</small>
      </div>

      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('invoice_email') ? ' has-error' : '' }}">
          <label for="email">{{$text3}}</label>
          <livewire:textfield type="email" name="invoice_email"/>
          <small class="text_error">{{ $errors->first('invoice_email') }}</small>
      </div>
    
      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('indirizzo') ? ' has-error' : '' }}">
        <label for="code">{{$text4}}</label>
        <livewire:textfield type="text" name="indirizzo"/>
        <small class="text_error">{{ $errors->first('indirizzo') }}</small>
      </div>

      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('citta') ? ' has-error' : '' }}">
       <label for="citta">{{$text5}}</label>
        <livewire:textfield type="text" name="citta"/>
        <small class="text_error">{{ $errors->first('citta') }}</small>
      </div>
  
      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('postal_code') ? ' has-error' : '' }}">
        <label for="cap">{{$text6}}</label>
        <livewire:textfield type="number" name="postal_code"/>
        <small class="text_error">{{ $errors->first('postal_code') }}</small>
      </div>
  
      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('provinzia') ? ' has-error' : '' }}">
        <label for="provinzia">{{$text7}}</label>
        <livewire:textfield type="text" name="provinzia"/>
        <small class="text_error">{{ $errors->first('provinzia') }}</small>
      </div>
  
      <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('nazione') ? ' has-error' : '' }}">
        <label for="nazionalita">{{$text8}}</label>
        <livewire:textfield type="text" name="nazione"/>
        <small class="text_error">{{ $errors->first('nazione') }}</small>
      </div>
    </div> 

  

