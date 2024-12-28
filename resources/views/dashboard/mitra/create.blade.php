@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Make new mitra</h1>
    </div>

    <div class="col-lg-8 mb-5">
        <form method="POST" action="/dashboard/mitra" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="mitra" class="form-label">Nama Mitra</label>
              <input type="mitra" class="form-control @error("mitra") is-invalid @enderror" id="mitra" name="mitra" required autofocus value="{{ old("mitra") }}">
              @error('mitra')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemilik Mitra</label>
                <input type="nama" class="form-control @error("nama") is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old("nama") }}">
                @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control @error("alamat") is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old("alamat") }}">
                @error('alamat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="slug" class="form-control @error("title") is-invalid @enderror" id="slug" name="slug" required value="{{ old("slug") }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image (optional)</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error("image") is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                @error('deskripsi')
                     <p class="link-danger">{{ $message }}</p>
                @enderror
                <input id="deskripsi" type="hidden" name="deskripsi" required value="{{ old("deskripsi") }}">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#mitra');
        const slug = document.querySelector("#slug");

        title.addEventListener('change', function(){
            fetch("/dashboard/mitra/checkSlug?title=" + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener("trix-file-accept", function(e){
            e.preventDefault();
        });

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection