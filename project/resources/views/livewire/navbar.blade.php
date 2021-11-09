<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
</head>
</head>
<body>
    <div class="nav_bar w-full lg:flex lg:justify-between">
        <div class="nav_left" >
            <svg width="191" height="67" class=""  fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="191" height="67" class="lg:w-full" fill="url(#pattern0)"/>
              <defs>
              <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
              <use xlink:href="#image0_2:898" transform="translate(-0.00853244) scale(0.000425194 0.00121212)"/>
               </pattern>
               <image id="image0_2:898" width="2392" height="825" xlink:href="data:image/png;base64,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"/>
               </defs>
            </svg>
        </div>
        
        <div class="nav_right">
          <select name="" id="id_select2_example" class="font-normal rounded-md font-roboto text-lg lg:w-48 lg:h-11 sm:w-9 sm:h-6 ">
            
              <option data-img_src="https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg"></option>
              <option data-img_src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg"></option>
         

          </select>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
<script type="text/javascript">
    function custom_template(obj){
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if(data && data['img_src']){
                img_src = data['img_src'];
                template = $("<div><img src=\"" + img_src + "\" style=\"width:25%; bottom:3px;height:40px;\"/><p style=\"font-weight: 700;font-size:14px;\">" + text + "</p></div>");
                return template;
            }
        }
    var options = {
        'templateSelection': custom_template,
        'templateResult': custom_template,
    }
    $('#id_select2_example').select2(options);
    $('.select2-container--default .select2-selection--single').css({'height': '40px'});

</script>
</body>
</html>
