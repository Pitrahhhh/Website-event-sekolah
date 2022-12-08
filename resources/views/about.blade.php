@extends('layouts.main')

@section('container')
<div class="row" >
    <div class="col-md-2 mx-auto">
        <h1 class="mb-3  text-center text-white" ><u>Kontak</u></h1>
    </div>
</div>


<!-- ======= Contact Section ======= -->
    <section class="contact " data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      
      <div class="container mt-3">

        <div class="row">

          <div class="col-lg-12 text-center">

            <div class="row">
              <div class="col-sm-md-12">
                <div class="info-box text-white">
              <i class="bi bi-geo-alt-fill w3-xxlarge"></i>
                  <h2 >Lokasi Kami</h2>
                  <a href="https://g.page/atlantis-plus?share" target="_blank" class="text-white" style="text-decoration: none;">
                  <p >Jl. Bukit Sikumbang No.102 RT.04 RW.09 Rangkapan Jaya Baru Depok 16434</p>
                  </a>
                </div>
              </div>
              <div class="col-md-6 mt-2">
                <div class="info-box text-white">
                <i class="bi bi-envelope w3-xxlarge"></i>
                  <h2>Email Kami</h2>
                  <a href="mailto:smk.marketing@atlantisplus.sch.id" style="text-decoration: none;" class="text-white">
                  <p>smk.marketing@atlantisplus.sch.id</p></a>
                </div>
              </div>
              <div class="col-md-6 mt-2">
                <div class="info-box text-white">
               <i class="bi bi-telephone w3-xxlarge"></i>
                  <h2 >Hubungi Kami</h2>
                  <a href="tel:(021) 2277 9687" style="text-decoration: none;" class="text-white">
                  <p >(021) 2277 9687</p></a>
                </div>
              </div>
            </div>

          </div>

        

        </div>

      </div>
    </section><!-- End Contact Section -->

    <section class="map mt-3 mb-2 w-100">
      <div class="container-fluid p-0">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.975874121872!2d106.7739478143119!3d-6.397110464346945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e966f00b8b2b%3A0x468862342db39278!2sSMP%20%26%20SMK%20ATLANTIS%20PLUS!5e0!3m2!1sid!2sid!4v1669098336241!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
    
<script>
  feather.replace()
</script>
@endsection
