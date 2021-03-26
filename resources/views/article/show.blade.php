@extends('layouts.app')
@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('assets/startbootstrap/img/bg1.png') }}');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{$posts->title}}</h1>
            <span class="meta">create
              {{date('d M Y',strtotime($posts->created_at))}}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
      <img src="{{ asset('storage/'.$posts->image)}}" style="width:50%; margin-left:20%;">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{!!$posts->body!!}</p>
        </div>
      </div>
    </div>
  </article>

  <hr>
 
  <div class="container">
  <h1>POPULER</h1>
@foreach($article as $post)
    <div class="row">
      <div class="col-lg-8 col-md-10">
        <div class="post-preview">
          <a href="{{route('post.detail',$post->id)}}">
          <img class="poto" src="{{ asset('storage/'.$post->image)}}" style="width:250px; float:left; padding-right:20px;">
            <h4 style="margin-top:40px;">
            {{$post->title}}
            </h4>
          </a>
          <p class="post-meta">
            create   {{date('d M Y',strtotime($post->created_at))}}</p>
          </div>
      </div>

      
</div>
@endforeach  
    </div>

  @endsection