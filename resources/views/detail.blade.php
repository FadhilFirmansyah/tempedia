@extends('layout.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1>{{ $content->mitra }}</h1>
                @if ($content->image)
                    <div style="max-height:400px; overflow:hidden;">
                        <img src="{{ asset("storage/" . $content->image) }}" class="img-fluid mt-3" alt="{{ $content->mitra }}">
                    </div>
                @else
                    <img src="https://picsum.photos/1200/400" class="card-img-top img-fluid" alt="{{ $content->mitra }}">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $content->deskripsi !!}
                </article>
                
                <a href="/mitra" class="d-block mt-3">Back to Mitra</a>
            </div>
        </div>
    </div>

@endsection