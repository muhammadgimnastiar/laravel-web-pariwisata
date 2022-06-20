@extends('layouts.master')

@section('content')
<form action="form.php" method="POST">
    <fieldset>
    
    <h3>FORM< /h3>
    <p>
        <label>Nama:</label>
        <br>
        <input type="text" name="nama" placeholder="Nama lengkap..." />
    </p>
    <p>
        <label>NIM:</label>
        <br>
        <input type="text" name="nim" placeholder="Nim..." />
    </p>
    <p>
        <label>E-mail:</label>
        <br>
        <input type="email" name="email" placeholder="email..." />
    </p>
    <p>
        <label>Tanggal Lahir:</label>
        <br>
        <input type="date" name="tanggal" />
    </p>
    <p>
        <label>Jenis kelamin:</label>
        <br>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
    </p>
    <p>
        <label>Hobi:</label>
        <br>
        <select name="hobi">
            
            <option value="Gamer">Islam</option>
            <option value="Turu">Kristen</option>
            <option value="Ghibah">Hindu</option>
            <option value="Baca Buku">Budha</option>
        </select>
    </p>
    <p>
        <label>Deskripsi:</label>
        <br>
        <textarea name="deskripsi"></textarea>
        
    </p>
    <p>
        <input type="submit" name="submit" value="Daftar" />
    </p>
    </fieldset>
</form>
@endsection