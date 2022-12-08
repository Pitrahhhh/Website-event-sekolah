    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}} text-white"  href="/dashboard/posts">
              <span data-feather="camera"></span>
             Postingan Saya
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : ''}} text-white"  href="/">
              <i class="bi bi-box-arrow-left"></i>
              Kembali
            </a>
          </li>
        </ul>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
           <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : ''}}"  href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Categories
                  </a>
              </li>
        </ul>
        @endcan

      </div>
    </nav>