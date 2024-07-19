@extends('layout.main')
@section('content')


<h3>Tambah Data Anggota</h3>
<form action="{{ route('anggota.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Id Anggota</td><td><input type="text" name="id_anggota"></td>
    </tr>
    <tr>
        <td>Nama Anggota</td><td><input type="text" name="nama_anggota"></td>
    </tr>
    <tr>
        <td>Alamat</td><td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection