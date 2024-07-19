@extends('layout.main')
@section('content')

<h1>Master Anggota</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('anggota.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Id Anggota</td>
                <td>Nama Anggota</td>
                <td>Alamat</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($anggota as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->id_anggota }}</td>
                    <td>{{ $rows->nama_anggota }}</td>
                    <td>{{ $rows->alamat }} </td>
                    <td>
                        <a href="{{ route('anggota.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('anggota.destroy', $rows->id) }}" method="POST">
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