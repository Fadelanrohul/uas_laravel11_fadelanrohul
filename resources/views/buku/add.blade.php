@extends('layout.main')
@section('content')


<h3>Tambah Data Buku</h3>
<form action="{{ route('buku.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>ID Buku</td><td><input type="text" name="id_buku"></td>
    </tr>

    <tr>
        <td>Pengarang</td><td><input type="text" name="pengarang"></td>
    </tr>

    <tr>
        <td>Penerbit</td><td><input type="text" name="penerbit"></td>
    </tr>

    <tr>
        <td>Tahun Terbit</td><td><input type="date" name="tahun_terbit"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection