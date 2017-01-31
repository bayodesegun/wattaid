<!-- Show location selector if location is not set or needs to be reset -->                               
@if ($location != 'unknown')
  <li id="location-info"><a><b>Location:</b> {{ $location }}. <a href="#" onclick="changeLocation()">Change</a></a></li>
@else
  <li><a>
    <form id="location-form" class="navbar-form navbar-left form-inline @if ($location !='unknown') hidden @endif" role="form" method="POST" action="{{ url('/dashboard') }}">
        {{ csrf_field() }}                         
        <div class="form-group">
            <label for="location" class="hidden control-label">Location</label>                    
            <select id="location" type="text" class="form-control ui search dropdown selectpicker" name="location" data-live-search="true" title="Select location" data-style="btn-primary" required autofocus>
              <option value="oluyole-ext" data-tokens= "oluyole extension">Oluyole Extension</option>
              <option value="gbagi-ibadan" data-tokens= "gbagi ibadan">Gbagi Market Ibadan</option>
              <option value="oba-ile-est-akure" data-tokens= "oba ile estate akure">Oba-Ile Estate Akure</option>
              <option value="texaco-akure" data-tokens= "texaco akure">Texaco Akure</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default navbar-btn">
          <i class="fa fa-location-arrow" aria-hidden="true"></i>
        </button>
    </form>
  </a></li>          
@endif