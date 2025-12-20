@extends("layouts.mainVisit")
@section('title','.:Hasil Cari:.')
@section('content')

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 bg-white py-4">
                <div class="row">
                    @foreach($datacari as $dc)
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card p-3" style="width: 18rem;">
                            <div class="text-center">
                                <img src="{{ $dc->gambar ? asset('storage/gambar/'.$dc->gambar) : asset('storage/gambar/noimage.jpg') }}" class="img-fluid mb-3"  style="max-height:160px; object-fit:cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold mb-0">{{ ucfirst($dc->namaParfum)}}</h5>
                                <small class="text-muted mb-2 d-block">{{ ucfirst($dc->merek)}}</small>

                                <p class="card-text mb-0"><strong>Aroma:</strong> {{ ucfirst($dc->jenisAroma)}}</p>
                                <p class="card-text mb-1"><strong>Harga:</strong> Rp {{ number_format($dc->harga,0,',','.') }}</p>

                                <div class="mt-3 d-flex">
                                    <a href="/detail/{{ $dc->id}}" class="btn btn-dark">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
