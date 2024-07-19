@extends('layout.main')
@section('content')


<h3>Tambah Data Penebrit</h3>
<form action="{{ route('penerbit.store') }}" method="POST">
    @csrf
<table>
<tr>
        <td>ID Penerbit</td><td><input type="text" name="id_penerbit"></td>
    </tr>

    <tr>
        <td>Nama Penerbit</td><td><input type="text" name="nama_penerbi"></td>
    </tr>

    <tr>
        <td>Kota</td><td><input type="text" name="kota"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection