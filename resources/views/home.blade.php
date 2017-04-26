@extends('member')
@section('title', 'Dashboard |')

@section('content')
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
<section class="wrapper">
  <section>
    @include('shared.power_plan')
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <nav id="breadcrumbs">
              <ul>
                <li>You are here:</li>
                <li><a href="/">Home</a></li>
                <li>Forum</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  </section>
</section>

<section class="content blog">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <div class="post-box">
          @if ($location !='unknown')
            <hr>
            @if ($user)
            <div class="sw_title">
              <h4>New Post</h4>
              <div class="gDot"></div>
            </div>
            <form id ="post-form" class="form-horizontal col-md-12" role="form" method="post" action="{{ url('/post/store') }}">
              {{ csrf_field() }} 
              
              <input type="hidden" name="user" value="{{$user}}">
              <input type="hidden" name="location" value="{{$location}}">
              <input type="hidden" name="type" value="p">
              <div class="form-group">
                <label for="title" class="hidden">Post Title</label>
                <input id="post-title" type="text" class="form-control" name="title" placeholder="Post Title" required>
              </div>
              <div class="form-group">
                  <label for="message" class="hidden">Message</label>                                              
                  <textarea onmouseleave="equalizeContentDivs()" rows="7" id="new-post" class="form-control" name="message" placeholder="Message" required></textarea>                                              
              </div>
              <div class="form-group">                          
                 <button type="submit" class="btn btn-default pull-right">Post It!</button>                         
              </div>                       
            </form>
            @else
              <em><p>You're not logged in. Please <a href="/login">login</a> to post.</p></em>
            @endif
            <hr class="hr-compact">
          <div class="post-listing">              
              {{ $posts->links() }}
            @if ($posts->total() < 1)
              <p class="text-info"> No posts for this location yet. Be the first to say something! </p>
            @endif
          </div>
          
          @else
            <p>Please select your location to view power plan and related posts.</p>
          @endif
        </div>
        
        <div class="blog_medium">
          @if ($posts)
            @if ($posts->total() > 0) 
              @foreach ($posts as $post)
                <article class="post">
                  <div class="post_date">
                    <span class="day">{{ date ('j', strtotime($post->created_at))}}</span>
                    <span class="month"> {{ date ('M', strtotime($post->created_at))}} </span>
                  </div>
                  <div class="post_content">
                    <div class="post_meta">
                      <h2>
                        <a href="/post/view?id={{$post->id}}">{{ $post->post_title }}</a>
                      </h2>
                      <div class="metaInfo">
                        <span><i class="fa fa-user"></i> By <a href="#">@if ($post->user==$user) <b>YOU</b>  @else <b>{{$post->user}} @endif</b></a> </span>
                        <span><i class="fa fa-comments"></i> <a href="post/view?id={{$post->id}}">...comments</a></span>
                      </div>
                    </div>
                    <p><?php echo $cont = substr(strip_tags($post->content),0,100); if (strlen($cont) < strlen($post->content)) echo "..." ?></p>
                    <form id="post-details-form" method="post" action="{{ url("post/view") }}">
                      {{ csrf_field() }} 
                      <input type="hidden" name="id" value="{{$post->id}}">
                      <button type="submit" class="btn btn-small btn-default"><b>Read More</b></button>
                    </form>
                  </div>
                </article>
              @endforeach
            @endif
          @endif
        </div>
      </div>      
      
      <!--Sidebar Widget-->
      <div class="col-md-4 col-lg-4 col-sm-4">
        <div class="sidebar_widget">
          @include('user_posts')
        </div>
        <div class="text-left fixed-comment">
          @include('location')
        </div>
      </div>
    </div><!--/.row-->
  </div> <!--/.container-->
</section>
@endsection