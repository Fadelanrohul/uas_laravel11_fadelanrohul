@extends('layout.main')
@section('content')


<h3>Edit Data Kurikulum</h3>
<form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>Id Anggota</td><td><input type="text" name="id_anggota" value="{{ $anggota->id_anggota }}"></td>
    </tr>
    <tr>
        <td>Nama Anggota</td><td><input type="text" name="nama_anggota" value="{{ $anggota->nama_anggota }}"></td>
    </tr>
    <tr>
        <td>Alamat</td><td><input type="text" name="alamat" value="{{ $anggota->alamatt }}"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection