@php $page_title="Dashbord" @endphp
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
                <div class="panel-body">
                <!-- show welcome message -->
                    <?php echo $message ?>
               
                <!-- Show location selector if location is not set or needs to be reset -->                                
                <form id="location-form" class="form-inline pull-right @if ($location !='unknown') hidden @endif" role="form" method="POST" action="{{ url('/dashboard') }}">
                    {{ csrf_field() }}                         
                    <div class="form-group">
                        <label for="location" class="hidden control-label">Location</label>                    
                        <select id="location" type="text" class="form-control ui search dropdown" name="location" required autofocus>
                          <option value="">Select location (type to search)</option>
                          <option value="oluyole-ext">Oluyole Extension</option>
                          <option value="gbagi-ibadan">Gbagi Market Ibadan</option>
                          <option value="oba-ile-est-akure">Oba-Ile Estate Akure</option>
                          <option value="texaco-akure">Texaco Akure</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Set!</button>
                    </div> 
                </form>
                @if ($location != 'unknown')
                  <div id="location-info-div" class="pull-right">
                    <b>Location:</b> {{ $location }}. <a href="#" onclick="changeLocation()">Change</a>                  
                  </div>   
                @endif
                </div>                
            </div>
        </div>
    </div>

    <!-- Now for the three panels: 'Power plan', 'Related posts', 'Your posts/commments'  -->
    <div class="row">
        <!-- Power Plan details here -->
        <div class="col-md-3 no-right-pad">
            <div id="left-content" class="panel panel-default">
                <div class="panel-heading text-center"><b>Power Plan</b></div>

                             
            </div>
        </div>

        <!-- Related Posts here -->
        <div class="col-md-6 no-left-pad no-right-pad">
            <div id="middle-content" class="panel panel-default">
                <div class="panel-heading">
                  <b>Related Posts</b>
                  @if ($posts) <p class="alert-info pull-right"> Total posts: <b>{{ $posts->total() }} </b></p> @endif                  
                </div>

                <div class="panel-body">                              
                    @if ($location !='unknown')
                      @if ($user)
                      <p class="text-center alert-warning">Submit new post</p>
                      <form id ="post-form" class="form-horizontal col-md-12" role="form" method="post" action="{{ url('/post/store') }}">
                        {{ csrf_field() }} 
                        
                        <input type="hidden" name="user" value="{{$user}}">
                        <input type="hidden" name="location" value="{{$location}}">
                        <input type="hidden" name="type" value="p">
                        <div class="form-group">
                            <label for="title" class="hidden">Post Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Post Title (required)" required>                            
                        </div>
                        <div class="form-group">
                            <label for="message" class="hidden">Message</label>                                              
                            <textarea onmouseleave="equalizeContentDivs()" rows="7" id="message" class="form-control" name="message" placeholder="Message - say something (required)" required></textarea>                                              
                        </div>
                        <div class="form-group">                          
                           <button type="submit" class="btn btn-warning pull-right">Post It!</button>                         
                        </div> 
                      <hr class="hr-compact">                         
                      </form>
                      @else
                        <p class="alert-info">Please <a href="/login">Login</a> or <a href="/register">Register</a> to post.</p>
                      @endif
                      <hr class="hr-compact">
                    <div class="post-listing">
                      @if ($posts->total() > 0)
                        @foreach ($posts as $post)
                        <form id="post-details-form" method="post" action="{{ url("post/view") }}">
                          {{ csrf_field() }} 
                          <input type="hidden" name="id" value="{{$post->id}}">
                          <button id="post-details-link" type="submit" class="btn btn-link"><b>{{$post->post_title}}</b></button>
                        </form>
                        <div class="post-credit-in-caps">
                          @if ($post->user==$user) <b>YOU</b>  @else <b>{{$post->user}} @endif</b> | {{ date('M j, Y h:i:s', strtotime($post->created_at)) }}
                        </div>
                        <div class="content">
                          <?php echo $cont = substr(strip_tags($post->content),0,100); if (strlen($cont) < strlen($post->content)) echo "..." ?>
                        </div>
                        <hr class="hr-compact">
                        @endforeach
                        
                        {{ $posts->links() }}
                      @else
                        <p class="text-info"> No posts for this location yet. Be the first to say something! </p>
                      @endif
                    </div>
                    
                    @else
                      <p>Please select your Location to view related posts.</p>
                    @endif                    

                </div>                
            </div>
        </div>

        <!-- User's posts and comments here -->
        <div class="col-md-3 no-left-pad">
            <div id="right-content" class="panel panel-default">
                <div class="panel-heading text-center"><b>Your Posts</b></div>

                <div class="panel-body">
                    
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
