@extends('layout.main')
@section('content')


<h3>Edit Data Buku</h3>
<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>ID Buku</td><td><input type="text" name="id_buku" value="{{ $buku->id_buku }}"></td>
    </tr>

    <tr>
        <td>Pengarang</td><td><input type="text" name="pengarang" value="{{ $buku->pengarang }}"></td>
    </tr>

    <tr>
        <td>Penerbit</td><td><input type="text" name="penerbit" value="{{ $buku->penerbit }}"></td>
    </tr>

    <tr>
        <td>Tahun Terbit</td><td><input type="date" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection