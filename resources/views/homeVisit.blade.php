@extends("layouts.mainVisit")
@section('title','.:HomeVisit:.')
@section('content')

  <!-- HERO + SEARCH -->
  <div class="container d-flex align-items-center justify-content-center text-center" style="min-height:60vh;">
    <div class="col-md-8">

      {{-- Hero Text --}}
      <h1 class="font-weight-bold mb-3">
        Temukan Aroma yang Mewakili Dirimu
      </h1>
      <p class="text-muted mb-4">
        Jelajahi dan temukan aroma sempurna untuk setiap momen dalam hidupmu.
      </p>

      {{-- Cari --}}
      <form action="/hasilCari">
        <div class="input-group input-group-lg">
          <input type="text"
            class="form-control"
            placeholder="Cari parfum favoritmu di sini..."
            name="cari">

          <div class="input-group-append">
            <button class="btn btn-dark px-4" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
  {{-- End Hero --}}

  {{-- Top 3 Parfum --}}
  <div class="container">
    <h2 class="font-weight-bold mb-4 text-center">Top 3 Parfum Terbaru</h2>

    <div class="row">
      @foreach ( $dataParfum as $pr )
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="{{ $pr->gambar ? asset('storage/gambar/'.$pr->gambar) : asset('storage/gambar/noimage.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $pr->namaParfum }}</h5>
              <p class="card-text">{{ $pr->deskripsi }}</p>
              <a href="/detail/{{ $pr->id }}" class="btn btn-dark">Lihat Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
@endsection
