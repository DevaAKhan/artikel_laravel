@extends('layouts.app')
@section('content')

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ asset('assets/startbootstrap/img/bg1.png') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Teliti Remaja</h1>
            <span class="subheading">Website Berita Membahas Tentang Pergaulan Bebas</span>
          </div>
        </div>
      </div>
    </div>
  </header>


<!-- Main Content -->

<div class="container">

@foreach($posts as $post)
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="{{route('post.detail',$post->id)}}">
          <img class="poto" src="{{ asset('storage/'.$post->image)}}" style="width:300px; float:left; padding-right:20px;">
            <h3 style="margin-top:40px;">
            {{$post->title}}
            </h3>
          </a>
          <p class="post-meta">
            create   {{date('d M Y',strtotime($post->created_at))}}</p>
        </div>
      </div>
    </div>
@endforeach 
    </div>
    <div style="margin-left:80%;">
    {{ $posts->links() }}
    </div>

     
  @endsection