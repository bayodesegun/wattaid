<form id="location-form" class="form-inline @if ($location) @if ($location !='unknown') hidden @endif @endif" role="form" method="POST" action="{{ url('/dashboard') }}">
                    {{ csrf_field() }}                         
    <div class="form-group">
        <label for="location" class="hidden control-label">Location</label>                    
        <select id="location" type="text" class="form-control ui search dropdown selectpicker" name="location" data-live-search="true" title="Select location" data-style="btn-primary" required autofocus>
          <option value="Alagbaka Area" data-tokens= "alagbaka akure">Alagbaka Area</option>
          <option value="Ijapo, Akure" data-tokens= "ijapo estate akure">Ijapo Area</option>
          <option value="Oba-Ile Area" data-tokens= "Oba-Ile Area">Oba-Ile Area</option>
          <option value="Ijoka Area" data-tokens= "ijoka akure">Ijoka Area</option>
          <option value="Express Area" data-tokens= "express akure">Express Area</option>
          <option value="Igbatoro Area" data-tokens= "igbatoro">Igbatoro Area</option>
          <option value="Oda Road" data-tokens= "oda road akure">Oda Road</option>
        </select>
        <button type="submit" class="btn btn-default navbar-btn">
          <i class="fa fa-location-arrow" aria-hidden="true"></i>
        </button>
    </div>
</form>
@if ($location != 'unknown')
  <br>
  <div id="location-info-div" class="pull-right">
    <em>You're seeing power plan and posts based on your current location, <b>{{ $location }}</b>. <a href="#" onclick="changeLocation()">Click here</a> if you're somewhere else.</em>
  </div>   
@endif