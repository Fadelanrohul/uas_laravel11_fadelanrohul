@extends('layout.main')
@section('content')

<h1>Master Penerbit</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('penerbit.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Id Pnerbit</td>
                <td>Nama Penerbit</td>
                <td>Kota</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($penerbit as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->id_penerbit }}</td>
                    <td>{{ $rows->nama_penerbi }}</td>
                    <td>{{ $rows->kota }}</td>
                    <td>
                        <a href="{{ route('penerbit.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('penerbit.destroy', $rows->id) }}" method="POST">
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