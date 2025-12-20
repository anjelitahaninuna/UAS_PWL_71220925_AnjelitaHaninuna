@extends("layouts.mainVisit")
@section("title","Detail Produk")
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-10 col-lg-8 shadow p-4 rounded" style="background:white">
            <div class="row">

                <!-- Bagian Gambar -->
                <div class="col-md-5 text-center d-flex align-items-center">
                    <img src="{{ $parfm->gambar ? asset('storage/gambar/'.$parfm->gambar) : asset('storage/gambar/noimage.jpg') }}"
                        class="img-fluid" style="max-height:420px; object-fit:cover;">
                </div>

                <!-- Bagian Detail -->
                <div class="col-md-7">
                    <h3 class="fw-bold mb-1">{{ucfirst($parfm->namaParfum) }}</h3>
                    <small class="text-muted d-block mb-3">{{ ucfirst($parfm->merek)}}</small>

                    <p class="mb-1">{{ ucfirst($parfm->jenisAroma)}}</p>
                    <p class="mb-1">{{ $parfm->volume_ml }} ml</p>

                    <h4 class="text-dark fw-semibold mt-2 mb-1">Rp {{ number_format($parfm->harga,0,',','.') }}</h4>
                    <p class="text-success">Tersedia {{$parfm->stok}}</p>

                    <p class="mt-3">{{ ucfirst($parfm->deskripsi)}}</p>

                    <a href="/register" class="btn btn-dark px-4 py-2 mt-3">
                        <i class="bi bi-cart-plus"></i> Tambahkan Ke Keranjang
                    </a>

                    {{-- <small>Last updated {{ $parfm->updated_at ? $parfm->updated_at->diffForHumans() : $parfm->created_at->diffForHumans() }}</small> --}}

                </div>

            </div>
        </div>

    </div>
</div>

@endsection
