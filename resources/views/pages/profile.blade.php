@extends('layouts.master')

@section('content')
<div class="title">
    <h1>Profile</h1>
</div>

<div class="top">
    <div class="img">
        <a href="https://github.com/muhammadgimnastiar"><img src="{{asset('images/profile.png')}}" alt="hero" border="0"></a>
    </div>
    <div class="info">
        <p>
            <strong>Nama: </strong>Muhammad Gimnastiar <br>
            <strong>Panggilan: </strong>Gimnas<br>
            <strong>Lahir: </strong>Tabalong, 3 Juni 2002 <br>
            <strong>Profesi: </strong>Mahasiswa <br>
        </p>
    </div>

</div>
<div class="bottom">
    <div class="left">
        <h1>About</h1>
        <p>
            Hi! Saya Muhammad Gimnastiar. Mahasiswa Jurusan Informatika di Universitas Muhammdiyah Malang.
        </p>
        <h1>Education</h1>
        <strong>Informatics Engineer</strong>
        <p>University Of Muhammadyah Malang</p>
        <strong>MIPA</strong>
        <p>SMAN 1 Tanjung</p>

    </div>

</div>
@endsection