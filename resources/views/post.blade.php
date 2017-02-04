@extends('member')
@section('title', 'View Post |')
@section('content')
<div>
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

    <!--start wrapper-->
  <section class="wrapper">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <nav id="breadcrumbs">
              <ul>
                <li>You are here:</li>
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li>{{ $post->post_title }}</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
    
    
    <section class="content blog">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="blog_single">
              <article class="post">
                <div class="post_date">
                  <span class="day"> {{ date ('j', strtotime($post->created_at))}} </span>
                  <span class="month"> {{ date ('M', strtotime($post->created_at))}} </span>
                </div>
                <div class="post_content">
                  <div class="post_meta">
                    <h2>
                      <a href=""> {{ $post->post_title }} </a>
                    </h2>
                    <div class="metaInfo">
                      <span><i class="fa fa-calendar"></i> <a href="#"> {{ date ('M j, Y', strtotime($post->created_at))}} </a> </span>
                      <span><i class="fa fa-user"></i> By <a href="#">@if ($post->user==$user) <b>YOU</b>  @else <b>{{$post->user}} @endif</b></a> </span>
                      <span><i class="fa fa-tag"></i> <a href="#"> {{$post->location}} </a>,</span>
                      <span><i class="fa fa-comments"></i> <a href="#">@if ($comments) {{ $comments->total() }} @endif</a></span>
                    </div>
                  </div>
                  <?php echo strip_tags($post->content) ?>
                </div>
                
              </article>
            </div>
              
            <!--Comments-->
              <div class="news_comments">
                <div class="dividerLatest">
                  <h4>@if($comments)Comments ({{$comments->total()}})@endif</h4>
                  <div class="gDot"></div>
                </div>
                
                <div id="comment">
                  <ul id="comment-list">
                    @if ($comments->total() > 0)
                      @foreach ($comments as $comment)
                        <li class="comment">
                          <?php
                            $expr = '/(?<=\s|^)[a-z]/i';
                            preg_match_all($expr, $comment->user, $matches);
                            $initials = implode('', $matches[0]);
                          ?>
                          <span class="initials"><?php echo $initials ?></span>
                          <div class="comment-container">
                            <h4 class="comment-author"><a href="#">@if ($comment->user==$user) <b>YOU</b>  @else <b>{{$comment->user}} @endif</b></a></h4>
                            <div class="comment-meta"><a href="#" class="comment-date link-style1">{{ date('M j, Y', strtotime($post->created_at)) }}</a></div>
                            <div class="comment-body">
                              <p> {{$comment->content}} </p>
                            </div>
                          </div>
                        </li>
                      @endforeach
                      {{ $comments->links() }}
                    @else
                      <p class="text-info text-left"> No comments for this post yet. Be the first to comment on the post!</p>
                      <hr class="hr-compact">
                    @endif
                  </ul>
                </div>
                <!-- /#comments -->

                @if (!$user) 
                  <em><p>You're not logged in. Please <a href="/login">login</a> to post a comment</p></em> 
                  <hr class="hr-compact">
                @else
                  <div class="dividerLatest">
                    <h4>Leave a comment</h4>
                    <div class="gDot"></div>
                  </div>
                  
                  <form id ="comment-form" class="form-horizontal col-md-12" role="form" method="post" action="{{ url('/post/store') }}">
                    {{ csrf_field() }} 
                    
                    <input type="hidden" name="user" value="{{$user}}"> 
                    <input type="hidden" name="id" value="{{$post->id}}">                       
                    <input type="hidden" name="post_id" value="{{$post->post_id}}">
                    <input type="hidden" name="type" value="c">
                    <div class="form-group">
                        <label for="message" class="hidden">Message</label>                                              
                        <textarea rows="7" id="message" class="form-control" name="message" placeholder="Comment - join the discussion (required)" required></textarea>                                              
                    </div>
                    <div class="form-group">                          
                       <button type="submit" class="btn btn-large btn-default pull-right">Post It!</button>                         
                    </div>                         
                  </form>
                @endif  
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
          </div>
        </div><!--/.row-->
      </div> <!--/.container-->
    </section>
    
  </section>
  <!--end wrapper-->             
</div>
@endsection
