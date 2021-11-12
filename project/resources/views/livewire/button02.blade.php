<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>
<body>
  
<div class="flex gap-3.5 flex-col items-start">
    <div class="time_card flex flex-col gap-12 rounded-md  w-80 h-36  cursor-pointer
    hover:bg-gray-300 hover:text-white focus:text-gray-400 focus:bg-gray-300 focus:outline-none">
      <p class="text-white">
        {{$paragraph}} <i class="fas fa-info-circle text-white"></i>
      </p>
      <div class="flex justify-between">
        <h1 class="text-white">{{$price1}}</h1>
            <div class="gap-1.5 flex items-center ">
             <p class="text-white">Qta</p>
             <select name="" id="" class="w-14 hover:bg-gray-300">
                 <option value="0">0</option>
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
             </select>
            </div>
     </div>
    </div>
</div>

</body>
</html>
