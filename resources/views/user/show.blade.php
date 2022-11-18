@include('user.layout.head')
@include('user.layout.navbar')
<section class="show mt-5">
    <div class="container">
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-lg-8 d-flex flex-column">
                @if ($resep->image)
                <img class="img-fluid w-100" src="{{ asset('storage/' . $resep->image) }}" alt=""
                    style="max-height: 400px; overflow: hidden;">
                    
                @else
                <img class="img-fluid w-100" src="https://source.unsplash.com/1200x600?food" alt=""
                    style="max-height: 400px; overflow: hidden;">
                    
                @endif
                <h1 class="ms-0 mt-4 mb-4">{{ $resep->judul }}</h1>
                <p>{{ $resep->deskripsi }}</p>

                <h4>Bahan - Bahan</h4>
                <p>
                    {!! $resep->bahan !!}
                </p>

                <h4>Langkah - langkah</h4>
                <p>
                    {!! $resep->langkah !!}
                </p>
            </div>
        </div>
    </div>
</section>

@include('user.layout.footer')
@include('user.layout.foot')
