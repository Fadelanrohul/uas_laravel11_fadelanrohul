@extends('layout.main')
@section('content')

<h1>Master Peminjam</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('peminjam.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Id Peminjam</td>
                <td>Tanggal Pinjam</td>
                <td>Tanggal Kembali</td>
                <td>Id Buku</td>
                <td>Id Anggota</td>
                <td>Status</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($peminjam as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->id_peminjaman }}</td>
                    <td>{{ $rows->tgl_pinjam }}</td>
                    <td>{{ $rows->tgl_kembali }}</td>
                    <td>{{ $rows->id_buku }}</td>
                    <td>{{ $rows->id_anggota }}</td>
                    <td>{{ $rows->status }} </td>
                    <td>
                        <a href="{{ route('peminjam.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('peminjam.destroy', $rows->id) }}" method="POST">
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