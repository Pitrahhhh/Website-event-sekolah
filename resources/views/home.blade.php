@extends('layouts.main')

@section('hero')
  
<section id="hero-no-slider" class="d-flex justify-content-center  align-items-center ">
  
  <div class="row" id="hero">
    <div class="col-sm-6" >

      <div class="position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="ms-4 text-start ">
            <h2 class="">Selamat Datang di Website <em>ATLFest</em></h2>
            <p class="mx-auto">Website ini berfungsi sebagai tempat pemberitahuan jika ada suatu event atau acara di sekolah Atlantis Plus.</p>
            
          </div>
        </div>
      </div>
    </div>

    
    <div class="col-sm-6">
      <div class="d-flex justify-content-end" >
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
              <a href="/posts/hari-batik">  <img src="img/herobg7.jpeg" class=" w-75"  alt="..."></a>
              </div>
              <div class="carousel-item">
                <a href="/posts/classmeet"><img src="img/herobg2.jpeg" class=" w-75" alt="..."></a>
              </div>
              <div class="carousel-item">
                <a href="/posts/hari-guru"><img src="img/herobg3.jpeg" class=" w-75" alt="..."></a>
              </div>
              <div class="carousel-item">
               <a href="/posts/open-recruitment-osis"> <img src="img/herobg10.jpeg" class=" w-75" alt="..."></a>
              </div>
              <div class="carousel-item">
                <a href="/posts/goes-to-fruit-tea-festival"><img src="img/herobg9.jpeg" class=" w-75" alt="..."></a>
              </div>
              <div class="carousel-item">
                <a href="/posts/maulid-nabi"><img src="img/herobg6.jpeg" class=" w-75" alt="..."></a>
              </div>
            </div>
          </div>
      </div>
      </div>
  </div>
  </section>

  
  <!-- End Hero No Slider Sectio -->
@endsection
