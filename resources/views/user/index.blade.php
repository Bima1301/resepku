@include('user.layout.head')
@include('user.layout.navbar')


<section style="height: 100vh;">
    <div class="container">
        <div class="row mt-3 mb-3">
            <p style="font-size: 18px">
                Resep Terbaru
            </p>
        </div>
        <div class="row">
            @if ($reseps->count())
            @foreach ($reseps as $resep)
            <div class="col-md-4 mb-4">
                <a href="/reseps/{{ $resep->id }}" class="text-decoration-none text-dark">
                    <div class="card" style="max-width: 25rem;">
                        @if ($resep->image)
                        <img src="{{ asset('storage/' . $resep->image) }}" class="card-img-top" alt="food">
                        @else
                        <img src="https://source.unsplash.com/1200x600?food" class="card-img-top" alt="food">
                        @endif
                        <div class="card-body">
                            <small style="color: #666666">{{ $likes->where('id_resep',$resep->id)->count() }} orang menyukai ini</small>
                            <h5 class="mt-2" style="color: #547794">{{ $resep->judul }}</h5>
                            <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <form action="/like/add" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id_resep" value="{{ $resep->id }}">
                                <button class="btn  w-100" style="background-color: #C2C9CD">Suka</button>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @else
            <h1>Tidak ada resep, harap tulis resep terlebih dahulu</h1>
            @endif
        </div>
    </div>
</section>


@include('user.layout.footer')
@include('user.layout.foot')
