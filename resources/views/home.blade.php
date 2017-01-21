@extends('layouts.app')
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
            <div id="left-content" class="panel panel-default">
                <div class="panel-heading"><b>Power Plan</b></div>

                <div class="panel-body">
                    <b>Location:</b> {{ $location }}. @if ($location != 'unknown') <a href="#">Change</a> @endif                  
                </div>                
            </div>
        </div>

        <!-- Related Posts here -->
        <div class="col-md-6 no-left-pad no-right-pad">
            <div id="middle-content" class="panel panel-default">
                <div class="panel-heading">
                  <b>Related Posts</b>
                  <a class="btn btn-warning btn-xs pull-right <?= ($location != 'unknown') && $user ? 'active' : 'disabled'; ?>" href="#" onclick="$('#post-form').show()">New Post</a>
                </div>

                <div class="panel-body">                                              
                    <form id ="post-form" style="display: none;" class="form-horizontal col-md-12" role="form" method="post" action="{{ url('/post/store') }}">
                        {{ csrf_field() }} 
                        
                        <input type="hidden" name="user" value="{{$user}}">
                        <input type="hidden" name="location" value="{{$location}}">
                        <input type="hidden" name="type" value="p">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" name="title" required>                            
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>                                              
                            <textarea id="message" class="form-control" name="message"></textarea>                                              
                        </div>
                        <div class="form-group">
                          <a class="btn btn-danger" href="#" onclick="$('#post-form').hide()">Cancel</a>
                           <button type="submit" class="btn btn-success pull-right">Post It!</button>                         
                        </div> 

                    </form> 
                    @if ($location && $posts)
                    <div class="post-listing">
                      @foreach ($posts as $post)
                      <p class="post-title">
                        <a href="#" ><b>{{$post->post_title}}</b></a>
                      </p>
                      <div class="post-credit-in-caps">
                        <b>{{$post->user}}</b> | {{ date('M j, Y h:i:s', strtotime($post->created_at)) }}
                      </div>
                      <div class="content">
                        <?php echo $cont = substr(strip_tags($post->content),0,100); if (strlen($cont) < strlen($post->content)) echo "..." ?>
                      </div>
                      <hr class="hr-compact">
                      @endforeach
                    </div>
                    {{ $posts->links() }}
                    @endif
                </div>                
            </div>
        </div>

        <!-- User's posts and comments here -->
        <div class="col-md-3 no-left-pad">
            <div id="right-content" class="panel panel-default">
                <div class="panel-heading"><b>Your Posts & Comments</b></div>

                <div class="panel-body">
                    
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
