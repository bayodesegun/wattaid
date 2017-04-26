<div class="sw_about fixed">
    <div class="sw_title">
      @if ($location !='unknown')
        <h4><b><?php echo date('l'); ?> Power Plan For {{$location }}</b></h4>
      @else
        <h4><b>Power Plan For Today</b></h4>
      @endif
      <div class="gDot"></div>
    </div>
    @if ($powerPlan)
    <div class="sw_content">
        <table id="powerplan" class="text-center table-responsive">
          <colgroup span="13" class="columns"></colgroup>
          <tr>
            <th></th>
            <th>12:00</th>
            <th>1:00</th>
            <th>2:00</th>
            <th>3:00</th>
            <th>4:00</th>
            <th>5:00</th>
            <th>6:00</th>
            <th>7:00</th>
            <th>8:00</th>
            <th>9:00</th>
            <th>10:00</th>
            <th>11:00</th>
          </tr>
          <tr>
            <td class="meridian rotate">AM</td>
            <td>@if($powerPlan->hour0)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour1)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour2)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour3)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour4)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour5)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour6)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour7)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour8)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour9)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour10)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour11)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
          </tr>
          <tr>
            <td class="meridian rotate">PM</td>
            <td>@if($powerPlan->hour12)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour13)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour14)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour15)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td> @if($powerPlan->hour16)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour17)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour18)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour19)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour20)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour21)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour22)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
            <td>@if($powerPlan->hour23)<img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</td>
          </tr>
          <tr>
            <th></th>
            <th>12:00</th>
            <th>1:00</th>
            <th>2:00</th>
            <th>3:00</th>
            <th>4:00</th>
            <th>5:00</th>
            <th>6:00</th>
            <th>7:00</th>
            <th>8:00</th>
            <th>9:00</th>
            <th>10:00</th>
            <th>11:00</th>
          </tr>
        </table>
    </div>
    @else
        @if ($location=='unknown')
            <p><em>Select your location to view power plan.</em></p>
        @else
            <p> Power plan will be available shortly.</p>
        @endif
    @endif 
</div>