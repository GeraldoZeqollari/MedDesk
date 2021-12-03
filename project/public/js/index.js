function custom_template(obj){
    var data = $(obj.element).data();
    var text = $(obj.element).text();
    if(data && data['img_src']){
        img_src = data['img_src'];
        template = $("<div style=\"display:flex;gap:20px;align-items:center; justify-content:flex-start;\"><img src=\"" + img_src + "\" style=\"width:25%; bottom:3px;height:40px;\"/><p class=\"hidden-mine\" style=\"font-weight: 700;font-size:14px;\">" + text + "</p></div>");
        return template;
    }
}
var options = {
'templateSelection': custom_template,
'templateResult': custom_template,
}
$('#id_select2_example').select2(options);
$('.select2-container--default .select2-selection--single').css({'height': '40px'});


function show() {
    var select = document.getElementById('location');
    var option = select.options[select.selectedIndex];
    
    document.getElementById('location_name').textContent  = option.value;
    
}


function changeColor(){
  
    document.getElementById("div_color").style.backgroundColor='#0FB7B6';   
    document.getElementById("color").style.backgroundColor='#0FB7B6';      
  }

 
  
