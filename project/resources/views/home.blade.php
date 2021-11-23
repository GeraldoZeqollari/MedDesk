<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
  />
  @livewireStyles
</head>
<body>
    @livewire('navbar') 
<div class="page_container">

      <div class="page_left">
        <button class=" back_btn rounded-full w-7 h-7 bg-transparent"><i class="fas fa-arrow-left"></i></button>
      </div>
  
    <div class="text-poppins lg:p-12  lg:flex lg:flex-col  lg:justify-evenly gap-4  sm:p-10">

        <div class="inner_contanier page_left lg:flex lg:flex-col lg:gap-6 sm:mb-12 ">
          <div class="first_para flex gap-1.5">
          <h1 class="color lg:text-4xl text-Poppins font-bold  sm:text-2xl">PRENOTA </h1> <h1 class="color lg:text-4xl font-bold  sm:text-2xl" >SERVIZION STORE</h1></div>
          <p class="paragraph_prenota  color text-poppins pt-3 lg:text-2xl  lg:max-w-prose lg:text-justify sm:text-center sm:text-sm sm:max-w-xs sm:pt-3">
            All'interno delle strutture e dei mezzi ParkinGO e necessario
            indossare la mascherina e risspetare la distanza di sicurezza
            interpersonale.
          </p>
          
        </div>

     <form method="POST">
      @csrf

         <div class="lg:flex lg:flex-col sm:gap-2 sm:mb-12  " >
          <div class="pb-4">
          <livewire:title title_text="01. Prenota or ai tamponin Drive-in"/>
          </div>
         
          <div class="parking_paragraph flex gap-6 justify-between title04 rounded-md {{ $errors->has('location') ? ' has-error' : '' }}">
            {{-- @foreach($locations as $location) --}}
            <div class="color flex items-center text-poppins lg:text-4xl gap-6 sm:text-2xl ">
              <i class="fas fa-map-marker-alt"></i>
              <h2 class="font-poppins font-normal lg:text-4xl sm:text-lg">ParkinGO</h2>
              {{-- {{$location->location}} --}}
            </div>
            {{-- @endforeach --}}
            <div class="color hidden_date flex items-center gap-5">
              <i class="fas fa-clock"></i>
              <h2>March 23 2021</h2>
            </div>
            
              
            <select name="location" id="" class="location">
              <option disabled selected value>select a location</option>
              <option value="milano">Milano</option>
              <option value="rome">Rome</option>
            </select>
            
          </div>
          <small class="text_error">{{ $errors->first('location') }}</small>
         </div>

        <div class="lg:flex lg:pb-0 lg:flex-col lg:gap-6 pt-4 sm:gap-2 sm:pb-10" >
          <livewire:title title_text="02. Prenota or ai tamponin Drive-in"/>
            <div class="page_left gap-3 pt-3 flex flex-row flex-wrap lg:gap-12 sm:gap-6 lg:pb-8 sm:pb-6">
             <livewire:button02 tampone_type="Tampone Rapido Antigenico" tampone_price="50$"/>
             <livewire:button02 tampone_type="Tampone Moleculare PCR" tampone_price="90$"/>
            </div>
        </div>

        <div class="lg:flex lg:flex-col lg:gap-6 pt-4 sm:gap-2 sm:mb-10">
          <livewire:title title_text="03. Scegli fra le date e orari disponibli"/>
          
          <div class=" page_left flex flex-col gap-1.5 {{ $errors->has('date') ? ' has-error' : '' }}">
            <p class="color text-poppins lg:text-2xl sm:text-lg pt-3">Date</p>

           <div class="flex w-full flex-wrap gap-5">
           
            @for ($i = 0; $i < 10; $i++)
            <livewire:button03 date_time="{{\Carbon\Carbon::now()->addDays($i)->toDateString()}}" button_value="{{\Carbon\Carbon::now()->addDays($i)->toDateString()}}" button_id="{{'btn'.$i}}"/>
            @endfor
     
           </div>
           <small class="text_error">{{ $errors->first('date') }}</small>
          </div>
          
          <div class="page_left flex flex-col gap-1.5 {{ $errors->has('orari') ? ' has-error' : '' }}">
            <p class="color text-poppins lg:text-2xl sm:text-lg pt-3">Orari</p>
            <div class="flex flex-wrap gap-5">
              @for ($i = 0; $i < 12; $i++)
              <livewire:button-orari  date_time="{{\Carbon\Carbon::today()->addHours($i)->format('g:i',strtotime('7:00'))}}" button_value="{{\Carbon\Carbon::today()->addHours($i)->format('g:i')}}" button_id="{{'orari_btn'.$i}}"/>
              @endfor
            
            </div>
            <small class="text_error">{{ $errors->first('orari') }}</small>
          </div>
                            
        </div> 

        <div class="lg:flex lg:flex-col pt-4 lg:gap-6 sm:gap-2">
          <div class="pb-2">
          <livewire:title title_text="04. Dati anagrafici"/>
          </div>
          <livewire:title04 textfield="Name"  textfield1="Cogname" textfield2="Email" textfield3="Cellulare"
           textfield4="Nazionalita"  textfield5="Code di fiscale" textfield6="Data di nascita"
            textfield7="Sesso" textfield8="Comune residenca" textfield9="Cap"  textfield0="Indirizzo"/>

        </div>

        <div class="lg:flex lg:flex-col lg:gap-6 sm:gap-2 sm:mb-8">
          <div class="pb-4">
          <livewire:title title_text="05. Tipo di ricuveta"/>
          </div>
       
          <livewire:title05 textfield="Name"  textfield1="Cogname"  textfield2="Codice fiscale" textfield3="Email invio fattura"
          textfield4="Indirizzo"  textfield5="Citta" textfield6="Cap"
           textfield7="Provinzia" textfield8="Nazione"/>
           
          
        </div>
        <livewire:round-button button_text="VERIFICA"/>
     </form>

        <div class= "lg:flex lg:flex-col lg:gap-6 sm:gap-4 sm:mb-10 mb-10">
          <livewire:title title_text="06. Metoda di pagamento "/>
          <livewire:pagamento/>
       
          <livewire:checkbox checkbox_text="Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e i Termini e Condizioni *(leggi)" checkbox_name="termi_info"/>
          
          <livewire:checkbox checkbox_text=" Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e do il consenso al loro tratamentto da parte di
          Medispa S.r.l quale unico Responsabile Esterno del tratamentto
          dei dati sanitari .*(leggi)" checkbox_name="dati_personali"/>
          <livewire:checkbox checkbox_text=" Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e do il consenso al loro tratamentto da parte di
          Medispa S.r.l quale unico Responsabile Esterno del tratamentto
          dei dati sanitari .*(leggi)" checkbox_name="dati"/>

          <livewire:round-button button_text="CONFERMA E PAGA"/>
        
        </div> 

    </div>
 
</div>

@livewire('footer') 
@livewireScripts
</body>
</html>