@extends('layout')
@section('blog')
  <div class="container">

    <div class="section_title d-flex justify-content-center categories">
        <h4>All Posts</h4>
    </div>
    <?php $all_posts = DB::table('tbl_posts')->get(); ?>
    @foreach($all_posts as $v_posts)
    <div class="posts_intro">
        <img class="blog_img" src="{{('frontend/images/cover.jpg')}}" alt="">
      <div>
        <a href="{{url('/full-post')}}"><h4>{{($v_posts->post_title)}}</h4></a>
        <h5>{{($v_posts->post_intro)}}</h5>
      </div>
    </div><br><br>
    @endforeach
  </div>
@endsection