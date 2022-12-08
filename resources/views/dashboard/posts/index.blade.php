@extends('dashboard.layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
</div>

 @if(session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="table-responsive col-lg-12">
      <a href="/dashboard/posts/create" class="btn btn-primary">Tambah Data Baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Acara</th>
              <th scope="col">Tempat Kegiatan</th>
              <th scope="col">Tanggal & Jam Kegiatan</th>
              <th scope="col">Kategori</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>

              @foreach ($posts as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->tempat }}</td>
                <td>{{ $post->datetime }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <a href="#" class="badge bg-danger delete" data-slug="{{ $post->slug }}"><span data-feather="x-circle"></span></span></a>
                    <!-- <form action="/dashboard/posts/{{ $post->slug }}" >
                    @method('delete')
                    @csrf
                      <button class="badge bg-danger border-0 delete" ><span data-feather="x-circle"></span></button>
                    </form> -->
                
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        <!-- Button trigger modal -->



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