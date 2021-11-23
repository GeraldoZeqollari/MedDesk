<head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

        <div class="btn_row">
                {{-- <div class="btn_wrapper"> --}}
                  <input type="radio" id="bt1"  name="fattura" value="{{$value}}"/>
               
                   <div class="radio_text flex pl-32 items-center icon_position">
                        <i class="{{$icon}}  pr-5"></i>
                        <p class="font-medium button_text_color">{{$button_text}}</p>
                   </div> 
                  
                {{-- </div> --}}
        </div>
</body>