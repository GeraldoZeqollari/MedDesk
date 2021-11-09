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
    <button class="back_btn rounded-full w-7 h-7 bg-transparent"><i class="fas fa-arrow-left"></i></button>
    
    <div class="text-poppins lg:p-12  lg:flex lg:flex-col  lg:justify-evenly gap-4">
        <div class="lg:flex lg:flex-col gap-6">
          <div class="flex gap-1.5">
          <h1 class="color lg:text-4xl text-Poppins font-bold sm:self-center sm:text-2xl">PRENOTA </h1> <h1 class="color lg:text-4xl font-bold sm:self-center sm:text-2xl" >SERVIZION STORE</h1></div>
          <p class="color  text-poppins lg:text-2xl leading-9 max-w-prose lg:text-justify sm:text-center sm:text-sm">
            All'interno delle strutture e dei mezzi ParkinGO e necessario
            indossare la mascherina e risspetare la distanza di sicurezza
            interpersonale.
          </p>
        </div>
  
        <div class="lg:flex lg:flex-col lg:gap-6 sm:gap-2">
          <livewire:title title="01. Prenota or ai tamponin Drive-in"/>
          <div class="parking_paragraph flex items-center justify-between">
            <div class="color flex items-center text-poppins lg:text-4xl gap-6 sm:text-2xl">
              <i class="fas fa-map-marker-alt"></i>
              <h2 class="font-poppins font-normal lg:text-4xl sm:text-lg">ParkinGO Malpensa</h2>
            </div>
            
            <div class="color hidden">
              <i class="fas fa-clock"></i>
              <h2>March 23 2021</h2>
            </div>
            <p class="color font-poppins font-normal	text-lg leading-6 text-center">Modifica negozia</p>
          </div>
        </div>

        <div class="lg:flex lg:flex-col lg:gap-6 sm:gap-2">
          <livewire:title title="02. Prenota or ai tamponin Drive-in"/>
            <div class="flex flex-row flex-wrap lg:gap-12 sm:gap-6">
             <livewire:button02 title="Tampone Rapido Antigenico" price="50$"/>
             <livewire:button02 title="Tampone Moleculare PCR" price="90$"/>
            </div>
        </div>

        <div class="lg:flex lg:flex-col lg:gap-6 sm:gap-2">
          <livewire:title title="03. Scegli fra le date e orari disponibli"/>
          <div class="flex flex-col gap-1.5">
            <p class="paragraph_date text-poppins lg:text-2xl sm:text-lg">Date</p>
          <div class="flex flex-wrap gap-5">
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
            <livewire:button03 button_title="lunedi27"/>
           </div>
          </div>
          
          <div class="flex flex-col gap-1.5">
            <p class="paragraph_date text-poppins lg:text-2xl sm:text-lg">Orari</p>
            <div class="flex flex-wrap gap-5">
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
              <livewire:button03 button_title="10:00"/>
            </div>

            </div>
                            
        </div>

        <div class="lg:flex lg:flex-col lg:gap-6 sm:gap-2">
          <livewire:title title="04. Dati anagrafici"/>
          <livewire:title04 textfield="Name"  textfield1="Cogname" textfield2="Email" textfield3="Cellulare"
           textfield4="Nazionalita"  textfield5="Code di fiscale" textfield6="Data di nascita"
            textfield7="Sesso" textfield8="Comune residenca" textfield9="Cap"  textfield0="Indirizzo"/>

          <livewire:checkbox check="Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e i Termini e Condizioni *(leggi)"/>
          <livewire:checkbox1 check1=" Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e do il consenso al loro tratamentto da parte di
          Medispa S.r.l quale unico Responsabile Esterno del tratamentto
          dei dati sanitari .*(leggi)"/>
           
          <livewire:round-button button_round="AVANTI"/>
        </div>

        <div class="lg:flex lg:flex-col lg:gap-6 sm:gap-2">
          <livewire:title title="05. Tipo di ricuveta"/>
          <p class="paragraph_fattura text-poppins lg:text-2xl sm:text-sm">A chi dovra essere intestata la fattura</p>
          <livewire:squarebutton />
          <livewire:title05 textfield="Name"  textfield1="Cogname"  textfield2="Codice fiscale" textfield3="Email invio fattura"
          textfield4="Indirizzo"  textfield5="Citta" textfield6="Cap"
           textfield7="Provinzia" textfield8="Nazione"/>
           <livewire:round-button button_round="VERIFICA"/>
        </div>
        
        <div class="lg:flex lg:flex-col lg:gap-6 sm:gap-4">
          <livewire:title title="06. Metoda di pagamento "/>
          <livewire:pagamento/>

          <livewire:checkbox check="Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e i Termini e Condizioni *(leggi)"  />
          
          <livewire:checkbox1 check1=" Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e do il consenso al loro tratamentto da parte di
          Medispa S.r.l quale unico Responsabile Esterno del tratamentto
          dei dati sanitari .*(leggi)" />
          <livewire:checkbox1 check1=" Ho preso visione dell'informativa sul tratamentto dei miei dati
          personali e do il consenso al loro tratamentto da parte di
          Medispa S.r.l quale unico Responsabile Esterno del tratamentto
          dei dati sanitari .*(leggi)" />
          <livewire:round-button button_round="CONFERMA E PAGA"/>
        
        </div>

    </div>
  
</div>

    @livewire('footer') 
    @livewireScripts
</body>
</html>