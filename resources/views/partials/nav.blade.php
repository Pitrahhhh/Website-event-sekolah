        <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-5-strong ">
          <div class="container">

            <div class="logo">
              <a href="/"><img src="../img/atl-buathome.png" width="200" height="100" alt="atl-logo" class="img-fluid"></a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav ms-auto  ">
                <li class="nav-item ">
                  <a class="nav-link {{ Request::is('/') ? 'active' : ''}} ms-3 " href="/">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('posts') ? 'active' : ''}} ms-3" href="/posts">Acara</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('categories') ? 'active' : ''}} ms-3" href="/categories">Kategori</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link {{ Request::is('about') ? 'active' : ''}} ms-3" href="/about">Kontak</a>
                </li>
              </ul>
                


                <ul class="navbar-nav ms-3">
                @auth
                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Selamat Datang, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li class=""><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse mx-1"></i> Panel Kontrol</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right mx-1"></i>Keluar</button>
                        </form>
                      </li>
                    </ul>
                  </li>
                @else
                      <li class="nav-item">
                            <a href="/login" class="nav-link "><i class="bi bi-box-arrow-in-right mx-1"></i>Masuk</a>
                      </li>
                @endauth
                </ul>  
                
            </div>
          </div>
        </nav>


  