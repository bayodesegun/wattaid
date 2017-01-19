@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Dashboard</b></div>

                <div class="panel-body">
                    <?php echo $message ?>
                </div>

                <!-- Show location selector if location is not set -->
                @if ($location == 'unknown')
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">
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

    <!-- Now for the three panels: 'Power plan', 'Related posts', 'Your posts/commments'  -->
    <div class="row">
        <!-- Power Plan details here -->
        <div class="col-md-3 no-right-pad">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Power Plan</b></div>

                <div class="panel-body">
                    Location: {{ $location }}.
                </div>                
            </div>
        </div>

        <!-- Related Posts here -->
        <div class="col-md-6 no-left-pad no-right-pad">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Related Posts</b></div>

                <div class="panel-body">
                    Posts: 
                </div>                
            </div>
        </div>

        <!-- User's posts and comments here -->
        <div class="col-md-3 no-left-pad">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Your Posts & Comments</b></div>

                <div class="panel-body">
                    Posts: 
                </div>                
            </div>
        </div>
    </div>
</div>
<style>
    .no-left-pad {
        padding-left: 0;        
    }

    .no-right-pad {
        padding-right: 0;        
    }
    .panel {
        margin-bottom: 0;
    }
</style>
@endsection
