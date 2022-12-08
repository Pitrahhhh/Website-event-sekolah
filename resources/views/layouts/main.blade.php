<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="img/atl-logo-.png" rel="icon">
    <link href="img/atl-logo-.png" rel="apple-touch-icon">

    {{-- trix editor --}}
     <link rel="stylesheet" type="text/css" href="/css/trix.css">
     <script type="text/javascript" src="/js/trix.js"></script>

    <title>{{ $title }}</title>
  </head>
  <body>
    @include('partials.nav')
    
    <div class="hero">
      @yield('hero')
    </div> 

    <div class="container ">
        @yield('container')
    </div>


  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"></script>
      <script type="text/javascript">
        $(window).on('scroll', function(){
          if($(window).scrollTop()){
            $('nav').addClass('black');
          }
          else
          {
            $('nav').removeClass('black');
          }
        })
      </script>
  </body>
 </html>