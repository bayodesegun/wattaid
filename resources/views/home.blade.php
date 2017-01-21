@extends('layouts.app')
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({ 
    selector:'textarea',
    menubar: false,
    plugins: [
    'advlist autolink lists link image charmap print preview anchor'    
  ],
    toolbar: 'undo redo | bold italic | bullist numlist',
  });  
</script>
@section('content')
<div class="container">
    @if (session('status'))
    <div onmouseenter="$(this).fadeOut(5000)" class="alert alert-success alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>{{ session('status') }}</strong>
    </div>
    @endif
    @if (count($errors) > 0)
    <div onmouseenter="$(this).fadeOut(5000)" class="alert alert-danger alert-dismissable">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        Please check the following errors:
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
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
            <div class="panel panel-default max-height">
                <div class="panel-heading"><b>Power Plan</b></div>

                <div class="panel-body">
                    <b>Location:</b> {{ $location }}. @if ($location != 'unknown') <a href="#">Change</a> @endif                  
                </div>                
            </div>
        </div>

        <!-- Related Posts here -->
        <div class="col-md-6 no-left-pad no-right-pad">
            <div class="panel panel-default max-height">
                <div class="panel-heading"><b>Related Posts</b></div>

                <div class="panel-body">
                  <p><a class="btn btn-default <?= $user ? 'active' : 'disabled'; ?>" href="#" onclick="$('#post-form').show()">New Post</a></p>                             
                    <form id ="post-form" style="display: none;" class="form-horizontal col-md-12" role="form" method="POST" action="{{ url('/home') }}">
                        {{ csrf_field() }} 
                        
                        <input type="hidden" name="user" value="{{$user}}">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" name="title" required>                            
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>                                              
                            <textarea id="message" class="form-control" name="message"></textarea>                                              
                        </div>
                        <div class="form-group">
                          <a class="btn btn-danger" href="#" onclick="$('#post-form').hide()">Cancel Post</a>
                           <button type="submit" class="btn btn-success pull-right">Post It!</button>                         
                        </div> 

                    </form> 

                </div>                
            </div>
        </div>

        <!-- User's posts and comments here -->
        <div class="col-md-3 no-left-pad">
            <div class="panel panel-default max-height">
                <div class="panel-heading"><b>Your Posts & Comments</b></div>

                <div class="panel-body">
                    
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

    .max-height {
        height: 750px;   
    }
</style>
@endsection
