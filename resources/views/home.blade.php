@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php echo $message ?>
                </div>

                <!-- Show location selector if location is not set -->
                @if ($location == 'unknown')
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET" action="{{ url('/home') }}">
                        {{ csrf_field() }}
                        <p>Please select your location to continue.</p>
                        <div class="form-group">
                            <label for="location" class="col-md-3 control-label">Location</label>

                            <div class="col-md-6">
                                <select id="location" type="text" class="form-control" name="location" required autofocus>
                                  <option value="oluyole-ext">Oluyole Extension</option>
                                  <option value="gbagi-ibadan">Gbagi Market Ibadan</option>
                                  <option value="oba-ile-est-akure">Oba-Ile Estate Akure</option>
                                  <option value="texaco-akure">Texaco Akure</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">
                                    Set!
                                </button>
                            </div>
                        </div> 
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
