
<div class="radio_issue flex flex-wrap">
    <input type="radio" id="{{$button_id}}"  @if($disabled == "1") disabled class="radio_disabled" @endif name="orari" value="{{$button_value}}"/> 
    <label for="{{$button_id}}" class="label_exp">{{$date_time}}</label>
</div>
