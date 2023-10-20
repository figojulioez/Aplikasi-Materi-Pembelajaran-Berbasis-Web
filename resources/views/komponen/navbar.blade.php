<style type="text/css">
  a {
    font-size: 1rem;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          @auth
          <li class="nav-item">
            <a class="nav-link {{ ($halaman == 'dashboard')? 'active': '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              <b>Dashboard</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/logout">
              <span data-feather="home"></span>
              <b>Logout</b>
            </a>
          </li>
          @else 
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/login">
              <span data-feather="home"></span>
              <b>Masuk</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/registrasi">
              <span data-feather="home"></span>
              <b>Buat Akun</b>
            </a>
          </li>
          @endauth
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span style="font-size:1rem;color: red;"><b>Materi</b>  </span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link {{ ($halaman == 'MJDH')? 'active': '' }}" href="menyisipkan-javascript-di-dalam-html">
              <span data-feather="file-text"></span>
              <b>Menyisipkan JavaScript di Dalam HTML</b> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($halaman == 'variabel')? 'active': '' }}" href="/variabel-dan-tipe-data-javascript">
              <span data-feather="file-text"></span>
              <b>Variabel dan Tipe Data JavaScript</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($halaman == 'operator-javascript')? 'active': '' }}" href="/operator-javascript">
              <span data-feather="file-text"></span>
              <b>Operator JavaScript</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($halaman == 'javascript-kondisi')? 'active': '' }}" href="/javascript-kondisi">
              <span data-feather="file-text"></span>
              <b>Javascript Conditional</b>
            </a>
          </li>         
          <li class="nav-item">
            <a class="nav-link {{ ($halaman == 'loop-javascript')? 'active': '' }}" href="/javascript-loop">
              <span data-feather="file-text"></span>
              <b>Javascript Loop</b>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($halaman == 'fungsi-javascript')? 'active': '' }}" href="fungsi-javascript">
              <span data-feather="file-text"></span>
              <b>Fungsi JavaScript</b>
            </a>
          </li>
        </ul>
      </div>
    </nav>
