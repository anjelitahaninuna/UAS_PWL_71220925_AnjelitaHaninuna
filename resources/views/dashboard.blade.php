@extends("layouts.main")
@section('title','Dashboard')

@section('content')
<div class="container mt-4">

    {{-- Pesan Welcome --}}
    <h4 class="mb-4">Selamat Datang, {{ Auth::user()->name }}</h4>

    {{-- Statistik --}}
    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h6>Total Parfum</h6>
                    <h3>{{ $totalParfum }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h6>Total User</h6>
                    <h3>{{ $totalUser }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-danger shadow">
                <div class="card-body">
                    <h6>Stok Habis</h6>
                    <h3>{{ $stokHabis }}</h3>
                </div>
            </div>
        </div>

    </div>

    {{-- Parfum Terbaru --}}
    <div class="card mt-4 shadow">
        <div class="card-header font-weight-bold">
            Parfum Terbaru
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="thead-light">
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Merek</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($parfumTerbaru as $p)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/gambar/'.$p->gambar) }}" width="50">
                        </td>
                        <td>{{ $p->namaParfum }}</td>
                        <td>{{ $p->merek }}</td>
                        <td>{{ $p->stok }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
