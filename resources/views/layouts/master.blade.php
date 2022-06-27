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
    @include('layouts.navbar')
  
    <div class="video-intro">
      <video src="{{asset('video/wonder.webm')}}" loop muted autoplay contenttype="webm; codecs=vp9">
      </video>
    </div>
  
    <main class="main-home">
      <!-- Konten -->
      <section class="artikel">
  
        @yield('content')
  
      </section>
  
      @include('layouts.sidebar')
      
    </main>
  
    @include('layouts.footer')
  
  
  
    @yield('script')
  </body>
  
  </html>