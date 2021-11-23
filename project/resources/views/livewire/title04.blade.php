

    <div class="title04 page_left gap-3 lg:grid lg:grid-cols-2 lg:gap-16 sm:flex sm:flex-col sm:gap-6">

        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm {{ $errors->has('first_name') ? ' has-error' : '' }}">
         <label for="first_name">{{$text}}</label>
         <livewire:textfield type="text" name="first_name"/>
         <small class="text_error">{{ $errors->first('first_name') }}</small>
        </div>

        <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm pt-1 {{ $errors->has('last_name') ? ' has-error' : '' }}">
          <label for="last_name">{{$text1}}</label>
          <livewire:textfield type="text" name="last_name"/>
          <small class="text_error">{{ $errors->first('last_name') }}</small>
        </div>
    
        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm {{ $errors->has('email') ? ' has-error' : '' }}">
         <label for="email">{{$text2}}</label>
         <livewire:textfield type="email" name="email"/>
        
    
           <p class="email_paragraph ">
            La conferma verra invita a questa email.<p class="email_paragraph"> Si richiede di
           utillizare la mail propria personale non mail aziendali.</p>
           </p>
           <small class="text_error">{{ $errors->first('email') }}</small>
        </div>

        <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm {{ $errors->has('cellphone') ? ' has-error' : '' }}">
         <label for="cellphone">{{$text3}}</label>
          <livewire:textfield type="number" name="cellphone"/>
          <small class="text_error">{{ $errors->first('cellphone') }}</small>
        </div>
    
        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm {{ $errors->has('nationality') ? ' has-error' : '' }}">
           <label for="nationality">{{$text4}}</label>
           <livewire:textfield type="text" name="nationality"/>
           <small class="text_error">{{ $errors->first('nationality') }}</small>
        </div>

        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm {{ $errors->has('fiscal_code') ? ' has-error' : '' }}">
            <label for="fiscal_code">{{$text5}}</label>
            <livewire:textfield type="number" name="fiscal_code"/>
            <small class="text_error">{{ $errors->first('fiscal_code') }}</small>
        </div>

        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm {{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
           <label for="date_of_birth">{{$text6}}</label>
           <livewire:textfield type="date" name="date_of_birth"/>
           <small class="text_error">{{ $errors->first('date_of_birth') }}</small>
        </div>
      
        <div class="gap-1 {{ $errors->has('gender') ? ' has-error' : '' }}">
          <p class="color  pb-4 font-medium  lg:text-2xl text-poppins sm:text-sm ">{{$text7}}</p>
           <input type="radio"  name="gender" value="M" id="gender" class="checkbox-round">
           <label for="genderm" class="color  lg:text-xl text-poppins sm:text-sm"> M</label>
           <input type="radio"   name="gender" value="F" id="gender" class="checkbox-round">
           <label for="genderf" class="color lg:text-xl text-poppins sm:text-sm "> F</label>
           <small class="text_error">{{ $errors->first('gender') }}</small>
        </div>
    
        <div class="color gap-1 font-medium lg:text-2xl   flex flex-col sm:text-sm {{ $errors->has('municipality') ? ' has-error' : '' }}">

            <label for="municipality">{{$text8}}</label>
            <livewire:textfield type="text" name="municipality"/>
            <small class="text_error">{{ $errors->first('municipality') }}</small>
        </div>

        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm {{ $errors->has('zip_code') ? ' has-error' : '' }}">
            <label for="zip_code">{{$text9}}</label>
           <livewire:textfield type="number" name="zip_code"/>
           <small class="text_error">{{ $errors->first('zip_code') }}</small>
        </div>
  
        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm {{ $errors->has('address') ? ' has-error' : '' }}">
           <label for="address">{{$text0}}</label>
            <livewire:textfield type="text" name="address"/>
            <small class="text_error">{{ $errors->first('address') }}</small>
        </div>
      
    </div>

        <div class="{{ $errors->has('terms_conditions') ? ' has-error' : '' }}">
            <livewire:checkbox checkbox_text="Ho preso visione dell'informativa sul tratamentto dei miei dati
             personali e i Termini e Condizioni *(leggi)" checkbox_name="terms_conditions"/>
          <small class="text_error">{{ $errors->first('terms_conditions') }}</small>
        </div>

        <div class="{{ $errors->has('personal_data') ? ' has-error' : '' }}">
             <livewire:checkbox checkbox_text=" Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e do il consenso al loro tratamentto da parte di
          Medispa S.r.l quale unico Responsabile Esterno del tratamentto
          dei dati sanitari .*(leggi)" checkbox_name="personal_data"/>
          <small class="text_error">{{ $errors->first('personal_data') }}</small>
        </div>
        
      <livewire:round-button button_text="AVANTI"/>


