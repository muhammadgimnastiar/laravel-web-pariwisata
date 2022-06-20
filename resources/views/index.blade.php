@extends('layouts.master')

@section('content')
<div class="title">
    Content Menarik
  </div>
  <div class="content">
    <!-- artikel 1 -->

    @foreach ($berita as $item)
    <div class="card">
      <div class="card-thumb">
        <img src='{{$item->picture}}' alt=''>
      </div>
      <div class="card-content">
        <div>
          <span class="card-date">Recent</span>
          <span class="card-date">| Gimnas</span>
          <h2 class="card-title">{{$item->judul}}</h2>
          <p>
            {{$item->content}}
          </p>
          <a href="#" class="card-btn" target="_blank">Read Full Article</a>
        </div>
      </div>
    </div>
    @endforeach
    {{-- <div class="card">
      <div class="card-thumb">
        <img src='{{asset('images/vacation.jpg')}}' alt=''>
      </div>
      <div class="card-content">
        <div>
          <span class="card-date">3 March 2022</span>
          <span class="card-date">| Gimnas</span>
          <h2 class="card-title">7 Spot Wisata di Kalimantan Selatan</h2>
          <p>
            Provinsi Kalimantan Selatan memiliki wisata hits yang tak bisa dilewatkan. Berikut beberapa tempat wisata di Kalsel yang perlu kamu kunjungi.
          </p>
          <a href="#" class="card-btn" target="_blank">Read Full Article</a>
        </div>
      </div>
    </div> --}}
    <!-- artikel 2 -->
    {{-- <div class="card">
      <div class="card-thumb">
        <img src='{{asset('images/bekantan.jpg')}}' alt=''>
      </div>
      <div class="card-content">
        <div>
          <span class="card-date">31 March 2019</span>
          <span class="card-date">| Gimnas</span>
          <h2 class="card-title">Bekantan, hewan endemik berhidung besar khas Kalimantan</h2>
          <p>
            Bekantan yang memiliki nama latin Nasalis Lavatus dan merupakan hewan langka yang memiliki Ciri khas
            hidung yang berukuran besar dan bulu berwarna cokelat kemerahan serta dapat mengeluarkan berbagai
            ekspresi.
          </p>

          <a href="#" class="card-btn" target="_blank">Read Full Article</a>
        </div>
      </div>
    </div>
    <!-- artikel 3 -->
    <div class="card">
      <div class="card-thumb">
        <img src='{{asset('images/preparation.jpg')}}' alt=''>
      </div>
      <div class="card-content">
        <div>
          <span class="card-date">31 March 2019</span>
          <span class="card-date">| Gimnas</span>
          <h2 class="card-title">Tips travelling ga bikin kantong kering</h2>
          <p>
            Seperti namanya, Pasar terapung, di pasar ini penjual dan pembeli melakukan transaksi sebagai mana
            transaksi yang terjadi di pasar di atas kapal atau perahu terapung.
          </p>
          <a href="https://news.google.com" class="card-btn" target="_blank">Read Full Article</a>
        </div>
      </div>
    </div>
    <!-- artikel 4 -->
    
    <div class="card">
      <div class="card-thumb">
        <img src='{{asset('images/terapung.jpg')}}' alt=''>
      </div>
      <div class="card-content">
        <div>
          <span class="card-date">10 March 2022</span>
          <span class="card-date">| Gimnas</span>
          <h2 class="card-title">Pasar Terapung, Destinasi unik di Tanah Kalimantan</h2>
          <p>
            Seperti namanya, Pasar terapung, di pasar ini penjual dan pembeli melakukan transaksi sebagai mana
            transaksi yang terjadi di pasar di atas kapal atau perahu terapung.
          </p>
          <a href="#" class="card-btn" target="_blank">Read Full Article</a>
        </div>
      </div>
    </div>
    <!-- artikel 5 -->
    <div class="card">
      <div class="card-thumb">
        <img src='{{asset('images/kunliner.jpg')}}' alt=''>
      </div>
      <div class="card-content">
        <div>
          <span class="card-date">1 March 2022</span>
          <span class="card-date">| Gimnas</span>
          <h2 class="card-title">Kuliner wajib saat berkunjung ke Kalimantas Selatan</h2>
          <p>
            Seperti namanya, Pasar terapung, di pasar ini penjual dan pembeli melakukan transaksi sebagai mana
            transaksi yang terjadi di pasar di atas kapal atau perahu terapung.
          </p>
          <a href="#" class="card-btn" target="_blank">Read Full Article</a>
        </div>
      </div>

    
    
    </div> --}}

    <!-- PAginatio -->
    <nav aria-label="..." class="pagination">
      <ul class="pagination">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>

        <li class="page-item disabled">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  @endsection