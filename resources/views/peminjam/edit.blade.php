@extends('layout.main')
@section('content')


<h3>Edit Data Peminjaman</h3>
<form action="{{ route('peminjam.update', $peminjam->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>Id Peminjaman</td><td><input type="text" name="id_peminjaman" value="{{ $peminjam->id_peminjaman }}"></td>
    </tr>
    <tr>
        <td>Tanggal Pinjam</td><td><input type="date" name="tgl_pinjam" value="{{ $peminjam->tgl_pinjam }}"></td>
    </tr>
    <tr>
        <td>Tanggal Kembali</td><td><input type="date" name="tgl_kembali" value="{{ $peminjam->tgl_kembali }}"></td>
    </tr>
    <tr>
        <td>Id Buku</td><td><input type="text" name="id_buku" value="{{ $peminjam->id_buku }}"></td>
    </tr>
    <tr>
        <td>Id Anggota</td><td><input type="text" name="id_anggota" value="{{ $peminjam->id_anggota }}"></td>
    </tr>
    <tr>
        <td>Status</td><td><input type="text" name="status" value="{{ $peminjam->status }}"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection