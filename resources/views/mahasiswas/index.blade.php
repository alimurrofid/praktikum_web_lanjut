@extends('mahasiswas.layout') @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input
                    mahasiswa</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-5">
            <form action="{{ route('mahasiswa.index') }}" method="GET">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search..." value="{{request('search')}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-info" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
        </div>
    </div>
    </form>


    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Email</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No Handphone</th>
            <th>Tanggal Lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($paginate as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td><img width="100px" src="{{asset('storage/'.$mahasiswa->image)}}"></td>
                <td>{{ $mahasiswa->email }}</td>
                <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
                <td>{{ $mahasiswa->jurusan }}</td>
                <td>{{ $mahasiswa->no_handphone }}</td>
                <td>{{ $mahasiswa->tanggal_lahir }}</td>
                <td>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')"
                        action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST">
                        <a class="btn btn-sm btn-info" href="{{ route('mahasiswa.show', $mahasiswa->nim) }}">Show</a>
                        <a class="btn btn-sm btn-primary" href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        <a class="btn btn-sm btn-warning" href="{{ route('mahasiswa.nilai', $mahasiswa->nim) }}">Nilai</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $paginate->links() }}
@endsection
