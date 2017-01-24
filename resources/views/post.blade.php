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
    <div id="navigation" class="row-md-12">
      <b> You are here:  </b> <a href="/home">Dashboard</a> <b>></b> View Post
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Post title and content -->
            <div class="panel panel-default">
                <div class="panel-body">
                  <p class="post-title text-info"> <b>{{ $post->post_title }}</b> </p>
                  <div class="post-credit-in-caps">
                    @if ($post->user==$user) <b>YOU</b>  @else <b>{{$post->user}} @endif</b> | {{ date('M j, Y h:i:s', strtotime($post->created_at)) }}
                  </div>
                  <div class="content">
                    <?php echo strip_tags($post->content) ?>
                  </div>
                </div>              
            </div>

            <!-- Now for associated comments on post -->
            <div class="panel panel-default">                

                <div class="panel-body">
                  <div class="alert-info text-center">
                    <p> @if ($comments) Showing <b>{{ $comments->total() }}</b> comment(s) @endif </p>
                  </div>
                  <div id="comments" class="text-right">
                    @if ($comments->total() > 0)
                      @foreach ($comments as $comment)
                        <div class="post-credit-in-caps">
                         @if ($comment->user==$user) <b>YOU</b>  @else <b>{{$comment->user}} @endif</b> | {{ date('M j, Y h:i:s', strtotime($post->created_at)) }}
                        </div>

                        <div class="content">
                          <p> {{$comment->content}} </p>
                        </div>
                        
                        <hr class="hr-compact">
                      @endforeach                        
                      {{ $comments->links() }}
                    
                    @else
                      <p class="text-info text-left"> No comments for this post yet. Be the first to comment on the post!</p>
                      <hr class="hr-compact">
                    @endif                          
                  </div>                   

                    
                    @if (!$user) 
                      <?php echo $message ?> 
                      <hr class="hr-compact">
                    @endif                             
                    @if ($user)
                    <div id="form-div">
                      <p class="text-center alert-warning">Comment on the post</p>
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
                           <button type="submit" class="btn btn-warning pull-right">Post It!</button>                         
                        </div>                         
                      </form>
                  
                  </div>
                  @endif
                </div>                
            </div>
        </div>
    </div>         
</div>
@endsection
