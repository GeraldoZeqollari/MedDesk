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
  <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
  
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
           
            <div class="color flex items-center text-poppins lg:text-4xl gap-6 sm:text-2xl" >
              <i class="fas fa-map-marker-alt"></i>
              
              <h2 class="font-poppins font-normal lg:text-4xl sm:text-lg" id="location_name">ParkinGO Malpensa</h2>
           
            </div>
           
            <div class="color hidden_date flex items-center gap-5">
              <i class="fas fa-clock"></i>
              <h2>March 23 2021</h2>
            </div>
            
              
            <select name="location" id="location" class="location" onchange="show()">
              <option disabled selected value>select a location</option>
              @foreach($locations as $location)
              <option value="{{$location->location}}"> {{$location->location}}</option>
              @endforeach
            </select>
            
          </div>
          <small class="text_error">{{ $errors->first('location') }}</small>
         </div>

        <div class="lg:flex lg:pb-0 lg:flex-col lg:gap-6 pt-4 sm:gap-2 sm:pb-10" >
          <livewire:title title_text="02. Prenota or ai tamponin Drive-in"/>
            <div class="page_left gap-3 pt-3 flex flex-row flex-wrap lg:gap-12 sm:gap-6 lg:pb-8 sm:pb-6">
             <livewire:button02 tampone_type="Tampone Rapido Antigenico" tampone_price="50$" div_id="" change="" select_id=""/>
             <livewire:button02 tampone_type="Tampone Moleculare PCR" tampone_price="90$"  div_id="div_color" change="changeColor()" select_id="color"/>
            </div>
        </div>

        <div class="lg:flex lg:flex-col lg:gap-6 pt-4 sm:gap-2 sm:mb-10">
          <livewire:title title_text="03. Scegli fra le date e orari disponibli"/>
          
          <div class=" page_left flex flex-col gap-1.5 {{ $errors->has('date') ? ' has-error' : '' }}">
            <p class="color text-poppins lg:text-2xl sm:text-lg pt-3">Date</p>

           <div class="flex w-full flex-wrap gap-5">
           
            @foreach ($dates as $date)
            <livewire:button03 date_time="{{$date->date->toDateString()}}" disabled="{{$date->availability}}" button_value="{{$date->id}}" button_id="{{$date->date}}"/>
            @endforeach
     
           </div>
           <small class="text_error">{{ $errors->first('date') }}</small>
          </div>
          
          <div class="page_left flex flex-col gap-1.5 {{ $errors->has('orari') ? ' has-error' : '' }}">
            <p class="color text-poppins lg:text-2xl sm:text-lg pt-3">Orari</p>
            <div class="flex flex-wrap gap-5">
              @foreach ($oraris as $orari)
              {{-- @if($orari->date_id == 1) --}}
              <livewire:button-orari date_time="{{$orari->orari->format('H:i')}}" disabled="{{$orari->availability}}" button_value="{{$orari->orari}}" button_id="{{$orari->orari}}"/>
              {{-- @endif --}}
              @endforeach
              
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
        <livewire:round-button button_text="VERIFICA" button_id="button_verifica"/>

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

          <livewire:round-button button_text="CONFERMA E PAGA" button_id="conferma"/>
        
        </div> 

    </div>
 
</div>

@livewire('footer') 
@livewireScripts
</body>
</html>