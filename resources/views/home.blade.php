@php $page_title="Dashbord" @endphp
@extends('member')

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
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <nav id="breadcrumbs">
              <ul>
                <li>You are here:</li>
                <li><a href="/">Home</a></li>
                <li>Dashboard</li>
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
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="post-box">
          @if ($location !='unknown')
            @if ($user)
            <div class="sw_title">
              <h2>New Post</h4>
              <div class="gDot"></div>
            </div>
            <form id ="post-form" class="form-horizontal col-md-12" role="form" method="post" action="{{ url('/post/store') }}">
              {{ csrf_field() }} 
              
              <input type="hidden" name="user" value="{{$user}}">
              <input type="hidden" name="location" value="{{$location}}">
              <input type="hidden" name="type" value="p">
              <div class="form-group">
                  <label for="title" class="hidden">Post Title</label>
                  <input id="post-title" type="text" class="form-control" name="title" placeholder="Post Title (required)" required>                            
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
              {{ $posts->links() }}
            @if ($posts->total() < 1)
              <p class="text-info"> No posts for this location yet. Be the first to say something! </p>
            @endif
          </div>
          
          @else
            <p>Please select your Location to view related posts.</p>
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
                        <a href="">{{ $post->post_title }}</a>
                      </h2>
                      <div class="metaInfo">
                        <span><i class="fa fa-user"></i> By <a href="#">@if ($post->user==$user) <b>YOU</b>  @else <b>{{$post->user}} @endif</b></a> </span>
                        <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
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
        <div class="col-lg-12 col-md-12 col-sm-12">
          <ul class="pagination pull-left mrgt-0">
            <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>
        
      </div>      
      
      <!--Sidebar Widget-->
      <div class="col-xs-12 col-md-4 col-lg-4 col-sm-4">
        <div class="sidebar_widget">
          <div class="sw_about">
            <div class="sw_title">
              <h4>Power Plan For Today</h4>
              <div class="gDot"></div>
            </div>
            <p>Expect light between the hours of ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          
          <div class="sw_categories">
            <div class="sw_title">
              <h4>Your Posts</h4>
              <div class="gDot"></div>
            </div>
            <ul class="arrows_list">
              <li><a href="#"><i class="fa fa-angle-right"></i>Post 1 Title</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Post 2 Title</a></li>
            </ul>
          </div>
        </div>
        <div class="text-left">
          @include('location')
        </div>
      </div>
    </div><!--/.row-->
  </div> <!--/.container-->
</section>
@endsection