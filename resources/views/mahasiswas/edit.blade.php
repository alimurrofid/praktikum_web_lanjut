@extends('mahasiswas.layout') @section('content') <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Edit Mahasiswa </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                            input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm"> @csrf
                        @method('PUT')
                        <div class="form-group"> <label for="nim">nim</label> <input type="text" name="nim"
                                class="form-control" id="nim" value="{{ $mahasiswa->nim }}" aria-describedby="nim">
                        </div>
                        <div class="form-group"> <label for="nama">nama</label> <input type="text" name="nama"
                                class="form-control" id="nama" value="{{ $mahasiswa->nama }}" aria-describedby="nama">
                        </div>
                        <div class="form-group"> <label for="email">email</label> <input type="text" name="email"
                                class="form-control" id="email" value="{{ $mahasiswa->email }}" aria-describedby="email">
                        </div>
                        <div class="form-group"> <label for="kelas">kelas</label> <input type="kelas" name="kelas"
                                class="form-control" id="kelas" value="{{ $mahasiswa->kelas }}"
                                aria-describedby="kelas"> </div>
                        <div class="form-group">
                            <label for="jurusan">jurusan</label>
                            <input type="jurusan" name="jurusan" class="form-control" id="jurusan" value="{{ $mahasiswa->jurusan }}" aria-describedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">no_handphone</label>
                            <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone" value="{{ $mahasiswa->no_handphone }}" aria-describedby="no_handphone">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">tanggal_lahir</label>
                            <input type="tanggal_lahir" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}" aria-describedby="tanggal_lahir">
                        </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
</div> @endsection
