<div class="sw_about fixed">
    <div class="sw_title">
      
    </div>
    @if ($powerPlan)
    <div class="sw_content container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <table class="powerplan text-center table-responsive">
            <colgroup span="24" class="columns"></colgroup>
            <tr>
              <th>12AM</th>
              <th>1AM</th>
              <th>2AM</th>
              <th>3AM</th>
              <th>4AM</th>
              <th>5AM</th>
              <th>6AM</th>
              <th>7AM</th>
              <th>8AM</th>
              <th>9AM</th>
              <th>10AM</th>
              <th>11AM</th>
            </tr>
            <tr>
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
          </table>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <table id="second-table" class="powerplan text-center table-responsive">
            <colgroup span="24" class="columns"></colgroup>
            <tr>
              <th>12NN</th>
              <th>1PM</th>
              <th>2PM</th>
              <th>3PM</th>
              <th>4PM</th>
              <th>5PM</th>
              <th>6PM</th>
              <th>7PM</th>
              <th>8PM</th>
              <th>9PM</th>
              <th>10PM</th>
              <th>11PM</th>
            </tr>
            <tr>
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
          </table>
        </div>
      </div>
    </div>
    @else
        @if ($location=='unknown')
            <p><em>Select your location to view power plan.</em></p>
        @else
            <p> Power plan will be available shortly.</p>
        @endif
    @endif 
</div>