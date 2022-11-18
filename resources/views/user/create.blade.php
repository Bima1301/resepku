@include('user.layout.head')
@include('user.layout.navbar')

<section>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5 mb-5">
            <div class="col-lg-8">
                <h5 class="mb-4" style="color: #547794">Tulis Resepmu ...</h5>
                <form action="/reseps" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                            name="judul" required autofocus value="{{ old('judul') }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                            id="deskripsi" name="deskripsi" required value="{{ old('deskripsi') }}">
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #547794">Bahan - Bahan</label>
                        @error('bahan')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="bahan" type="hidden" name="bahan" value="{{ old('bahan') }}">
                        <trix-editor input="bahan"></trix-editor>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #547794">Langkah - Langkah</label>
                        @error('langkah')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="langkah" type="hidden" name="langkah" value="{{ old('langkah') }}">
                        <trix-editor input="langkah"></trix-editor>
                    </div>
                    <div class="mb-3">
                        <label for="masakan" class="form-label">Upload Foto Masakan</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                            name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn w-100 text-white mt-4" style="background-color: #547794">Terbitkan
                        Resep</button>

                </form>
            </div>
        </div>
    </div>
</section>

@include('user.layout.footer')
@include('user.layout.foot')
