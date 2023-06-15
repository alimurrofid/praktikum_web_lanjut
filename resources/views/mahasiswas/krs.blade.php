@extends('mahasiswas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2 text-center">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        {{-- container content --}}
        <div class="container">
            <h2 class="text-center mt-5">KARTU HASIL STUDI (KHS)</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>{{ $mahasiswa->nama }}</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>:</td>
                            <td>{{ $mahasiswa->nim }}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>:</td>
                            <td>{{ $mahasiswa->kelas->nama_kelas }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <table class="table table-bordered border-dark">
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                        @foreach ($mahasiswa->matakuliah as $mhs)
                        <tr>
                            <td>{{ $mhs->nama_matkul }}</td>
                            <td>{{ $mhs->sks }}</td>
                            <td>{{ $mhs->semester }}</td>
                            <td>{{ $mhs->pivot->nilai }}</td>
                        </tr>
                        @endforeach 
                    </table>
                    {{-- <a href="{{route('mahasiswa.cetak_pdf')}}" class="btn btn-danger d-flex justify-content-center">Cetak PDF</a> --}}
                    <a href="{{route('mahasiswa.cetak_pdf', $mahasiswa->nim)}}" class="btn btn-danger d-flex justify-content-center">Cetak PDF</a>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-success mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection