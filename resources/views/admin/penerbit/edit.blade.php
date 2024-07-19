@extends('layout.main')
@section('content')
<h3>Edit Data</h3>
<form action="{{ route('penerbit.update', $penerbit->penerbitID) }}" method="post">
    @csrf
    @method('put')
    <table>
        <tr>
            <td>Nama penerbit</td><td><input type="text" name="Namapenerbit" value="{{ $penerbit->Namapenerbit }}"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan">
                <a class="btn btn-sm btn-danger" href="{{ url()->previous() }}" >Back</a>
            </td>
        </tr>
    </table>
</form>
@endsection