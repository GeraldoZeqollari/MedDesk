 <form>
   <div class="lg:grid lg:grid-cols-2 lg:gap-16 sm:flex sm:flex-col sm:gap-10  ">
    <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="fname">{{$text}}</label>
      <livewire:textfield type="text" name="fname"/>
    </div>
  
    <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="cname">{{$text1}}</label>
      <livewire:textfield type="text" name="cname"/>
    </div>
  
  
    <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="code">{{$text2}}</label>
      <livewire:textfield type="number" name="codice"/>
    </div>
    <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="email">{{$text3}}</label>
      <livewire:textfield type="email" name="email"/>
    </div>
  
    

  
      <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="code">{{$text4}}</label>
      <livewire:textfield type="text" name="indirizzo"/>
      </div>
      <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="citta">{{$text5}}</label>
      <livewire:textfield type="text" name="citta"/>
      </div>
  
  

    <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="cap">{{$text6}}</label>
      <livewire:textfield type="number" name="cap"/>
    </div>
  
    <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="provinzia">{{$text7}}</label>
      <livewire:textfield type="text" name="provinzia"/>
    </div>
  
    
  
  
    <div class="color font-medium lg:text-2xl flex flex-col sm:text-sm">
      <label for="nazionalita">{{$text8}}</label>
      <livewire:textfield type="text" name="nazione"/>
    </div>
  </div>

</form>
