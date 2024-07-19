@extends('layout.main')
@section('content')

<h3>Data penerbit</h3>
<div class="card">
<div class="card-header">
<button type="button" class="btn btn-sm btn-success" onclick="window.location='{{ url('penerbit/add') }}'">
        <i class="fas fa-plus-circle"></i> Add
</button>
</div>
<div class="card-body">
  @if (session('msg')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> {{ session('msg') }}
      <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <form method="GET">
    <div class="row mb-3">
    <label for="search" class="col-sm-2 col-form-label">Cari Data</label>
    <div class="col-sm-10">
    <input type="text" class="form-control form-control-sm"  placeholder="Pencarian" name="search" autofocus value="{{ $search }}">
    </div>
    </div>
  </form>
  <table class="table table-sm table-stripped table-bordered">
    <thead>
        <tr>
            
            <th>id_penerbit</th>
            <th>nama_penerbit</th>
            <th>kota</th>
            <th>Genre</th>
            <th>Aksi</th>            
        </tr>
    </thead>

    <tbody>
      <!-- agar nomor berjalan pada pagination -->
      @php
        $nomor = 1 + (($penerbit->currentPage() - 1) * $penerbit->perPage()); 
      @endphp
        @foreach($penerbit as $row)
        <tr>
            <!-- <td>{{ $loop->iteration }}</td> -->
            <td>{{ $row->id_penerbit }}</td>
            <td>{{ $row->nama_penerbit }}</td>
            <td>{{ $row->kota }}</td>
            <td>{{ ($row->gender=='M') ? 'Male' : 'Female' }}</td>
            <td>
              <button onclick="window.location='{{ url('penerbit/'.$row->id_penerbit) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                <i class="fas fa-edit"></i>
              </button>

              <form onsubmit="return deleteData('{{ $row->nama_penerbit }}')" style="display: inline" method="POST"  action="{{ url('penerbit/'.$row->id_penerbit) }}">
                @csrf
                @method('DELETE')
                <button  type="submit"  title="Hapus Data" class="btn btn-danger btn-sm">
                <i class="fas fa-trash-alt"></i>
                </button>
               
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <!-- {{ $penerbit->links() }} -->
  {!! $penerbit->appends(Request::except('page'))->render() !!}

</div>
</div>

<script>
  function deleteData(name){
    pesan = confirm('Yakin data dengan nama ${name} ini dihapus?');
    if(pesan) return true;
    else return false;
  }
</script>
@endsection