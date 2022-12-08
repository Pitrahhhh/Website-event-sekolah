@extends('layouts.main')

@section('container')

     <div class="row justify-content-center ">
         <div class="col-md-9">
            <h1 class="mb-3 text-white">{{ $post->title }}</h1>

  
             <p class="text-white"> <strong> <i class="bi bi-pencil"></i> </strong> <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-white">{{ $post->author->name }}</a>  event yang <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></p>

              @if ($post->image)
                <div style="max-height: 50%; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
              @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
              @endif
                <div  class="text-white">
                  <h4 >Tempat : <strong> {{ $post->tempat }} </strong></h4>
                </div>
                <div class="text-white">       
                  <h4>Tanggal & Jam : <strong> {{ $post->datetime }} </strong></h4> 
                </div>
                
            <article class="my-3 fs-5 text-white">
                {!! $post->body !!}
            </article>
            
            <!-- <div> <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></div> -->
           

          <a href="/posts" class="mt-3"><button type="button" class="btn btn-success">Kembali</button></a>
             

         </div>
     </div>

     

@endsection
