@extends('layout.main')
@section('content')

<h1>Master Buku</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>ID Buku</td>
                <td>Pengarang</td>
                <td>Penerbit</td>
                <td>Tahun Terbit</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($buku as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->id_buku }}</td>
                    <td>{{ $rows->pengarang }}</td>
                    <td>{{ $rows->penerbit }}</td>
                    <td>{{ $rows->tahun_terbit }} </td>
                    <td>
                        <a href="{{ route('buku.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('buku.destroy', $rows->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Del</button>
                        </form>  </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection