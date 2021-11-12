
   
    <form>
    <div class="title04 page_left gap-3 lg:grid lg:grid-cols-2 lg:gap-16 sm:flex sm:flex-col sm:gap-6">
        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm ">
         <label for="fname">{{$text}}</label>
         <livewire:textfield type="text" name="fname"/>
        </div>

        <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm pt-1">
          <label for="cname">{{$text1}}</label>
          <livewire:textfield type="text" name="cname"/>
        </div>
    
    
        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm ">
         <label for="email">{{$text2}}</label>
         <livewire:textfield type="email" name="email"/>
    
           <p class="email_paragraph ">
            La conferma verra invita a questa email.<p class="email_paragraph"> Si richiede di
           utillizare la mail propria personale non mail aziendali.</p>
           </p>
        </div>

        <div class="color gap-1 font-medium lg:text-2xl flex flex-col sm:text-sm ">
         <label for="cellulare">{{$text3}}</label>
          <livewire:textfield type="number" name="cellulare"/>
        </div>
    
   
    
          <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm ">
           <label for="nazionalita">{{$text4}}</label>
           <livewire:textfield type="text" name="nazionalita"/>
          </div>

          <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm ">
            <label for="code">{{$text5}}</label>
            <livewire:textfield type="number" name="code"/>
          </div>
      
   
      

         <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm ">
           <label for="data">{{$text6}}</label>
           <livewire:textfield type="date" name="data"/>
         </div>
      
        <div class="gap-1">
          <p class="color  pb-4 font-medium  lg:text-2xl text-poppins sm:text-sm ">{{$text7}}</p>
           <input type="checkbox" id="genderm" name="genderm" value="M"  class="checkbox-round "/>
          <label for="genderm" class="color  lg:text-xl text-poppins sm:text-sm"> M</label>
           <input type="checkbox"   id="genderf" name="genderf" value="F" class="checkbox-round"/>
          <label for="genderf" class="color lg:text-xl text-poppins sm:text-sm "> F</label>
        </div>
    
   
          <div class="color gap-1 font-medium lg:text-2xl   flex flex-col sm:text-sm ">

            <label for="comune">{{$text8}}</label>
            <livewire:textfield type="text" name="comune"/>
         </div>

        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm ">
            <label for="code">{{$text9}}</label>
           <livewire:textfield type="number" name="cap"/>
        </div>
  
        <div class="color gap-1 font-medium lg:text-2xl  flex flex-col sm:text-sm">
           <label for="code">{{$text0}}</label>
            <livewire:textfield type="text" name="indirizzo"/>
        </div>

    </div>
  </form>
