@extends('layout.main')
@section('content')


<h3>Edit Data Penerbit</h3>
<form action="{{ route('penerbit.update', $penerbit->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
<tr>
        <td>ID Penerbit</td><td><input type="text" name="id_penerbit" value="{{ $penerbit->id_penerbit }}"></td>
    </tr>

    <tr>
        <td>Nama Penerbit</td><td><input type="text" name="nama_penerbi" value="{{ $penerbit->nama_penerbi }}"></td>
    </tr>

    <tr>
        <td>Kota</td><td><input type="text" name="kota" value="{{ $penerbit->kota }}"></td>
    </tr>

    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection