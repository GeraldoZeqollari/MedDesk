<head>
  <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
</head>
<div class="flex gap-3.5 flex-col items-start">
    <div class="time_card flex flex-col gap-12 rounded-md  w-80 h-36" id="{{$div_id}}" onclick="{{$change}}">

       <p class="text-white">
        {{$tampone_type}} <i class="fas fa-info-circle text-white"></i>
        <input name="tampon_type" value="{{$tampone_type}}" hidden/>
       </p>

      <div class="flex justify-between">
        <h1 class="text-white">{{$tampone_price}}</h1>
        <input name="tampon_price" value="{{$tampone_price}}" hidden/>
            <div class="gap-1.5 flex items-center ">
               <p class="text-white">Qta</p>
               <select name="tampon_quantity" id="{{$select_id}}" class="w-14 select_color">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
               </select>
            </div>
      </div>

    </div>
</div>




