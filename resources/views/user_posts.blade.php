<?php
  $user_posts = array();
  if ($posts)
  {
    if ($posts->total() > 0)
    {
      foreach ($posts as $post)
      {
        if ($post->user == $user)
        {
          $user_posts[] = $post;
        }
      }
    } 
  }
?>
@if (count($user_posts) > 0) 
  <div class="sw_categories">
    <div class="sw_title">
      <h4>Your Posts</h4>
      <div class="gDot"></div>
    </div>
    <ul class="arrows_list">
      @foreach ($user_posts as $user_post)
        <li><a href="post/view?id={{$user_post->id}}"><i class="fa fa-angle-right"></i>{{$user_post->post_title}}</a></li>
      @endforeach
    </ul>
  </div>
@endif