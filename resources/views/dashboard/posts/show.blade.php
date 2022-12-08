@extends('dashboard.layouts.main')


@section('container')
 <div class="container">
     <div class="row mb-5">
         <div class="col-md-10">
            <h1 class="mb-3">{{ $post->title }}</h1>
  
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
           <a href="#" class="btn btn-danger delete" data-slug="{{ $post->slug }}"><span data-feather="x-circle"></span></span> Hapus</a>

              @if ($post->image)
              <div style="max-height: 400px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
              @endif
              
         
           <div>
              <h3>Tempat :  <strong>{{ $post->tempat }}</strong> </h3>
              <h3>Tanggal & Jam : <strong>{{ $post->datetime }}</strong> </h3> 
          </div>
            <article class="my-3 fs-5">
               <h5> {!! $post->body !!}</h5>
            </article>

         </div>
     </div>
 </div>

 <!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
  $('.delete').click( function(){
   var postslug = $(this).attr('data-slug');
   Swal.fire({
        title: 'Apa anda yakin 🤨?',
        text: "Kamu akan menghapus data acara ini "+postslug+" ",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            window.location = "/delete/"+postslug+"",
            'Terhapus!',
            'Data ini telah terhapus.',
            'success'
          )} else {
             Swal.fire('Data tidak jadi dihapus')
          }
      })
  });

</script>

<!-- <script>
  window.addEventListener('show-delete-confirmation', event => [
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Livewire.emit('deleteConfirm')
      }
    })
  ]);
</script> -->


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection