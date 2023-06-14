@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Article') }}</div>

                    <div class="card-body">
                       
                        <a href="/articles/create" class="btn btn-primary">Create New Article</a>
                        <a href="/home" class="btn btn-secondary"> back home </a>
                        
                        {{-- menampilkan data dari tabel articles --}}
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($articles as $article)
                                    <div class="col-md-4">
                                            {{-- menampilkan gambar --}}
                                            <img src="{{asset('storage/'.$article->featured_image)}}" class="img-fluid">
                                        </div>
                                        <div class="col-md-8">
                                            {{-- menampilkan judul --}}
                                            <h5>{{$article->title}}</h5>
                                            {{-- menampilkan konten --}}
                                            <p>{{$article->content}}</p>
                                            {{-- menampilkan tombol edit --}}
                                            <a href="/articles/{{$article->id}}/edit" class="btn btn-warning">Edit</a>
                                            {{-- menampilkan tombol cetak PDF --}}
                                            <a href="/article/cetak_pdf" class="btn btn-danger">Cetak PDF</a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
