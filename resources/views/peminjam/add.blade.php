@extends('layout.main')
@section('content')


<h3>Tambah Data Peminjam</h3>
<form action="{{ route('peminjam.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Id Peminjaman</td><td><input type="text" name="id_peminjaman"></td>
    </tr>
    <tr>
        <td>Tanggal Pinjam</td><td><input type="date" name="tgl_pinjam"></td>
    </tr>
    <tr>
        <td>Tanggal Kembali</td><td><input type="date" name="tgl_kembali"></td>
    </tr>
    <tr>
        <td>Id Buku</td><td><input type="text" name="id_buku"></td>
    </tr>
    <tr>
        <td>Id Anggota</td><td><input type="text" name="id_anggota"></td>
    </tr>

    <tr>
        <td>Status</td><td><input type="text" name="status"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection