<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:ital,wght@0,400;0,600;1,800&display=swap">
  <title>Pariwisata</title>
  
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="icon" href="{{asset('images/logo.png')}}">
  @yield('style')
  

</head>

<script src="{{asset('/js/script.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<script>
  
</script>

<body>
    <header>
      <a href="#" class="logo"><img src="{{asset('images/logo.png')}}" alt="" srcset=""></a>
      <input type="checkbox" name="menu-bar" id="menu-bar">
      <label for="menu-bar">Menu</label>
      <navbar class="navbar">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="/profile">Profile</a></li>
          <li><a href="#">Kategori +</a>
            <ul >
              <li><a href="#">Wisata Alam</a></li>
              <li><a href="#">Wisata Kuliner</a></li>
              <li><a href="#">Wisata Bahari</a></li>
              <li><a href="#">Semua Wisata</a></li>
              <li></li>
            
            </ul>
            
          </li>
          <li><a href="/calculator">Calculator App</a></li>
          <li><a href="/watch-list">Watch list</a></li>
          <li><a href="/form">Form</a></li>
          <li><a href="/admin">Admin</a></li>


  
  
        </ul>
      </navbar>
    </header>
  
    <div class="video-intro">
      <video src="{{asset('video/wonder.webm')}}" loop muted autoplay contenttype="webm; codecs=vp9">
      </video>
    </div>
  
    <main class="main-home">
      <!-- Konten -->
      <section class="artikel">
  
        @yield('content')
  
      </section>
  
      <aside class="sidebar">
        <div class="title-side">
          Berita Populer Abad ini
        </div>
  
        <div class="card-side">
          <div class="card-side-content">
            <br>
            <a href="#">
            <h2>Tips travelling ga bikin kantong kering</h2>
          </a>
          </div>
        </div>
        
        <div class="card-side">
          <div class="card-side-content">
            <br>
            <a href="#">
            <h2>7 Spot Wisata di Kalimantan Selatan</h2>
          </a>
          </div>
        </div>
  
        <div class="card-side">
          <div class="card-side-content">
            <br>
            <a href="#">
            <h2>Kuliner wajib saat berkunjung ke Kalimantas Selatan</h2>
          </a>
          </div>
        </div>
        <form class="d-flex side-search">
          <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn bg-light" type="submit">Search</button>
        </form>
  
      </aside>
      
    </main>
  
    <footer>
      
      <div class="copyright">
          <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Services</a></li>
              <li class="list-inline-item"><a href="#">About</a></li>
              <li class="list-inline-item"><a href="#">Linkedin</a></li>
          </ul>
        <span>&copy 2022 GimPariwisata</span>
      </div>
    </footer>
  
  
  
    @yield('script')
  </body>
  
  </html>