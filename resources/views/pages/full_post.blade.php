@extends('layout')
@section('full_post')

  <div class="container full_post">
    <h3 style="font-weight:bold">{{$single_post->post_title}}</h3>
    <p class="post_date">{{($single_post->post_subtitle)}}</p>
    <p style="line-height: 1.5rem">
    
    <!-- {!! html_entity_decode($single_post->post_details, ENT_QUOTES, 'UTF-8') !!} -->
    <?php 
      echo wordwrap($single_post->post_details, 40)
    ?>
    </p>
  </div>
@endsection