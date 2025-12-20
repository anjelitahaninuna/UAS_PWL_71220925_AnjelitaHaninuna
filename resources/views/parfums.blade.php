@extends("layouts.main")
@section("title","Manajemen Parfum")

@section('content')
<div class="container mt-4">

    {{-- Judul Halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Manajemen Data Parfum</h3>
        <a href="/parfums/tambahParfum" class="btn btn-dark"><i class="bi bi-plus-square-fill"></i> Tambah Parfum</a>
    </div>

    {{-- Alert --}}
    @if (session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('alert') }}
            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
        </div>
    @endif

    {{-- Table --}}
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table id= "example" class="table table-bordered table-hover align-middle text-center" style="100%">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Parfum</th>
                            <th>Merek</th>
                            <th>Aroma</th>
                            <th>Volume</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parfums as $index => $p)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ ucfirst($p->namaParfum) }}</td>
                            <td>{{ ucfirst($p->merek) }}</td>
                            <td>{{ ucfirst($p->jenisAroma) }}</td>
                            <td>{{ $p->volume_ml }}</td>
                            <td>Rp {{ number_format($p->harga,0,',','.') }}</td>
                            <td>{{ $p->stok }}</td>
                            <td>
                                <img src="{{ $p->gambar
                                    ? asset('storage/gambar/'.$p->gambar)
                                    : asset('storage/gambar/noimage.jpg') }}"
                                    width="70" class="rounded">
                            </td>
                            <td>
                                <a href="/parfums/editParfum/{{ $p->id }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="/parfums/delete/{{ $p->id }}"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                                   class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
