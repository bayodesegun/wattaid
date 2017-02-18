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
                <input id="post-title" type="text" class="form-control" name="title" placeholder="Post Title" required>
              </div>
              <div class="form-group">
                  <label for="message" class="hidden">Message</label>                                              
                  <textarea onmouseleave="equalizeContentDivs()" rows="7" id="new-post" class="form-control" name="message" placeholder="Message" required></textarea>                                              
              </div>
              <div class="form-group">                          
                 <button type="submit" class="btn btn-default pull-right">Post It!</button>                         
              </div> 
            <hr class="hr-compact">                         
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
      <div class="col-md-4 col-lg-4 col-sm-4">
        <div class="sidebar_widget">
          <div class="sw_about">
            <div class="sw_title">
              @if ($location !='unknown')
                <h4><b><?php echo date('l'); ?> Power Plan For {{$location }}</b></h4>
              @else
                <h4><b>Power Plan For Today</b></h4>
              @endif
              <div class="gDot"></div>
            </div>
            <ul class="tabs">  
                <li class="active"><a href="#tab1">0000</a></li>
                <li><a href="#tab2">0800</a></li>
                <li><a href="#tab3">1200</a></li>
                <li class="last"><a href="#tab4">1800</a></li>
            </ul><!-- /# end tab links -->

            <div class="tab_container"> 
                <div id="tab1" class="tab_content"> 
                    <ul class="list_style circle">
                        <li>12:00 - 01:00 AM: @if ($hr0) @foreach ($hr0 as $hour) <b>@if($hour->hour0 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>01:00 - 02:00 AM: @if ($hr1) @foreach ($hr1 as $hour) <b>@if($hour->hour1 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>02:00 - 03:00 AM: @if ($hr2) @foreach ($hr2 as $hour) <b>@if($hour->hour2 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>03:00 - 04:00 AM: @if ($hr3) @foreach ($hr3 as $hour) <b>@if($hour->hour3 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>04:00 - 05:00 AM: @if ($hr4) @foreach ($hr4 as $hour) <b>@if($hour->hour4 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>05:00 - 06:00 AM: @if ($hr5) @foreach ($hr5 as $hour) <b>@if($hour->hour5 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                    </ul>
                </div>
                
                <div id="tab2" class="tab_content">  
                    <ul class="list_style circle">
                        <li>06:00 - 07:00 AM: @if ($hr6) @foreach ($hr6 as $hour) <b>@if($hour->hour6 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>07:00 - 08:00 AM: @if ($hr7) @foreach ($hr7 as $hour) <b>@if($hour->hour7 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>08:00 - 09:00 AM: @if ($hr8) @foreach ($hr8 as $hour) <b>@if($hour->hour8 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>)9:00 - 10:00 AM: @if ($hr9) @foreach ($hr9 as $hour) <b>@if($hour->hour9 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>10:00 - 11:00 AM: @if ($hr10) @foreach ($hr10 as $hour) <b>@if($hour->hour10 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>11:00 - 12:00 NN: @if ($hr11) @foreach ($hr11 as $hour) <b>@if($hour->hour11 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                    </ul>
                </div>
                
                <div id="tab3" class="tab_content">  
                    <ul class="list_style circle">
                        <li>12:00 - 01:00 PM: @if ($hr12) @foreach ($hr12 as $hour) <b>@if($hour->hour12 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>01:00 - 02:00 PM: @if ($hr13) @foreach ($hr13 as $hour) <b>@if($hour->hour13 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>02:00 - 03:00 PM: @if ($hr14) @foreach ($hr14 as $hour) <b>@if($hour->hour14 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>03:00 - 04:00 PM: @if ($hr15) @foreach ($hr15 as $hour) <b>@if($hour->hour15 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>04:00 - 05:00 PM: @if ($hr16) @foreach ($hr16 as $hour) <b>@if($hour->hour16 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>05:00 - 06:00 PM: @if ($hr17) @foreach ($hr17 as $hour) <b>@if($hour->hour17 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                    </ul>
                </div>

                <div id="tab4" class="tab_content">  
                    <ul class="list_style circle">
                        <li>06:00 - 07:00 PM: @if ($hr18) @foreach ($hr18 as $hour) <b>@if($hour->hour18 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>07:00 - 08:00 PM: @if ($hr19) @foreach ($hr19 as $hour) <b>@if($hour->hour19 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>08:00 - 09:00 PM: @if ($hr20) @foreach ($hr20 as $hour) <b>@if($hour->hour20 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>09:00 - 10:00 PM: @if ($hr21) @foreach ($hr21 as $hour) <b>@if($hour->hour21  == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>10:00 - 11:00 PM: @if ($hr22) @foreach ($hr22 as $hour) <b>@if($hour->hour22 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                        <li>11:00 - 12:00 AM: @if ($hr23) @foreach ($hr23 as $hour) <b>@if($hour->hour23 == 'ON') <img src="img/on_bulb.jpg"> @else <img src="img/off_bulb.jpg"> @endif</b> @endforeach @endif</li>
                    </ul>
                </div>
            </div>

          </div>
          @include('user_posts')
        </div>
        <div class="text-left">
          @include('location')
        </div>
      </div>
    </div><!--/.row-->
  </div> <!--/.container-->
</section>
@endsection