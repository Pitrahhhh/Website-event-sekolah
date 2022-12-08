@extends('layouts.main')

@section('container')
<div class="post"> 
  <h1 class="mb-3 text-center text-white"><u>Semua</u> <b>Acara</b></h1>


   <div id="search" class="row justify-content-center mb-3">
     <div class="col-md-6">
       <form action="/posts">
         @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
         @endif
         @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
         @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
          <button class="btn btn-primary" type="submit">Cari</button>
        </div>
      </form>
     </div>
   </div>



  @if ($posts->count())
  <div class="card mb-3 w-75 mx-auto">
    @if ($posts[0]->image)
              <div class="card" id="imgtitle">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" id="imgtitle" class="img-fluid">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
              @endif
    <div class="card-body text-center ">
      <h3 class="card-title "><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-muted">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-white">
        <strong> <i class="bi bi-pencil"></i> </strong> <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> </a>{{ $posts[0]->created_at->diffForHumans() }} </small></p>

      <p class="card-text text-muted">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary">Selengkapnya</a>
    </div>
  </div>
 

  
  <div class="container">
    <div class="row">
      @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 mb-3">
        <div class="card">
          <div class="position-absolute px-3 py-2 text-white" style="max-height: 40%; background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
          @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" style="max-height: 350px; overflow:hidden; " class="img-fluid">
              @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" style="max-height: 350px; overflow:hidden; " alt="{{ $post->category->name }}">
              @endif
          <div class="card-body">
            <h5 class="card-title text-muted">{{ $post->title }}</h5>
            <p>
              <small class="text-white ">
              <strong> <i class="bi bi-pencil"></i> </strong> <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
            <p class="card-text text-muted">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="btn ">Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
 
  @else
  <p class="text-center fs-4">Tidak Ada Postingan.</p>
  @endif

 <div class="d-flex justify-content-center">
  {{ $posts->links() }}
 </div>
</div>
 @endsection


