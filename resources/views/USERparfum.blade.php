@extends("layouts.main")
@section("title","parfums")
@section('content')

<div class="container mt-4">
    <!-- Banner Sale -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="banner text-center p-5 mb-5"
        style="background-image:url('{{ asset('storage/banner/purplebanner.jpg') }}');
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
            border-radius:10px;">
            <h2 class="font-weight-bold text-white">SALE UP TO 60% OFF</h2>
            {{-- <button class="btn btn-light mt-3">SHOP NOW</button> --}}
        </div>
</div>

{{-- tampilan banner awal --}}
  {{-- <div class="bg-light text-center p-5 mb-5">
    <h2 class="font-weight-bold">SALE UP TO 60% OFF</h2>
    <button class="btn btn-dark mt-3">SHOP NOW</button>
  </div> --}}

<!-- tambah data -->
<div class="d-flex flex-row-reverse bd-highlight">
    <a href="/parfums/tambahParfum" class="btn btn-primary">
        <i class="bi bi-plus-square-fill"></i> Parfum</a>
    </div>
    <!-- pop up -->
    @if (session('alert'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session ('alert') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

 <br>
  <!-- Daftar Produk -->
  <div class="row">
    @foreach ($parfums as $p)
    <div class="col-md-3 col-sm-6 mb-4">
      <div class="card p-3" style="width: 18rem;">
        <div class="text-center">
            <img src="{{ $p->gambar ? asset('storage/gambar/'.$p->gambar) : asset('storage/gambar/noimage.jpg') }}" class="img-fluid mb-3"  style="max-height:160px; object-fit:cover;">
        </div>
        <div class="card-body">
          <h5 class="fw-bold mb-0">{{ ucfirst($p->namaParfum)}}</h5>
          <small class="text-muted mb-2 d-block">{{ ucfirst($p->merek)}}</small>

          <p class="card-text mb-0"><strong>Aroma:</strong> {{ ucfirst($p->jenisAroma)}}</p>
          <p class="card-text mb-1"><strong>Harga:</strong> Rp {{ number_format($p->harga,0,',','.') }}</p>

          <div class="mt-3 d-flex">
            <a href="/detail/{{ $p->id}}" class="btn btn-primary">Detail</a>
            <a href="/parfums/editParfum/{{$p->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
            <a href="/parfums/delete/{{$p->id}}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
          </div>

        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
