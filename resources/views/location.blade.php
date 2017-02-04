<form id="location-form" class="form-inline @if ($location) @if ($location !='unknown') hidden @endif @endif" role="form" method="POST" action="{{ url('/dashboard') }}">
                    {{ csrf_field() }}                         
    <div class="form-group">
        <label for="location" class="hidden control-label">Location</label>                    
        <select id="location" type="text" class="form-control ui search dropdown selectpicker" name="location" data-live-search="true" title="Select location" data-style="btn-primary" required autofocus>
          <option value="oluyole-ext" data-tokens= "oluyole extension">Oluyole Extension</option>
          <option value="gbagi-ibadan" data-tokens= "gbagi ibadan">Gbagi Market Ibadan</option>
          <option value="oba-ile-est-akure" data-tokens= "oba ile estate akure">Oba-Ile Estate Akure</option>
          <option value="texaco-akure" data-tokens= "texaco akure">Texaco Akure</option>
        </select>
        <button type="submit" class="btn btn-default navbar-btn">
          <i class="fa fa-location-arrow" aria-hidden="true"></i>
        </button>
    </div>
</form>
@if ($location != 'unknown')
  <div id="location-info-div" class="pull-right">
    <em>You're seeing posts based on your current location, {{ $location }}. <a href="#" onclick="changeLocation()">Click here</a> if you're somewhere else.</em>
  </div>   
@endif