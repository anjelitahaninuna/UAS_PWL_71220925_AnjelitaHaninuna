@extends("layouts.main")
@section('title','.:Parfums Edit Form:.')
@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">

            <div class="card ">
                <div class="card-header">
                    <h3>Edit Parfum</h3>
                </div>

                <div class="card-body">
                    <form action="/parfums/update/{{$p->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="namaParfum">Nama Parfum</label>
                            <input type="text" name="namaParfum" id="namaParfum" class="form-control" value="{{ $p->namaParfum }}">
                        </div>

                        <div class="form-group">
                            <label for="merek">Merek</label>
                            <input type="text" name="merek" id="merek" class="form-control" value="{{ $p->merek }}">
                        </div>

                        <div class="form-group">
                            <label for="jenisAroma">Jenis Aroma</label>
                            <input type="text" name="jenisAroma" id="jenisAroma" class="form-control" value="{{ $p->jenisAroma }}">
                        </div>

                        <div class="form-group">
                            <label for="volume_ml">Volume (ml)</label>
                            <input type="number" min="10" max="2500" name="volume_ml" id="volume_ml" class="form-control" value="{{ $p->volume_ml }}">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga (Rp)</label>
                            <input type="number" name="harga" id="harga" class="form-control" value="{{ $p->harga }}">
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" value="{{ $p->stok }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control">{{ $p->deskripsi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar Parfum</label>
                            <input type="file" name="gambar" id="gambar" accept="image/*" class="form-control-file">
                        </div>

                        <div class="form-group">
                            @if($p->gambar)
                                <img src="{{ asset('storage/gambar/'.$p->gambar) }}" alt="{{ $p->namaParfum }}" width="200" height="150">
                            @else
                                <img src="{{ asset('/gambar/noimage.jpg') }}" alt="no image" width="200" height="150">
                            @endif
                            <br><small><i>*foto sebelumnya</i></small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/parfums" class="btn btn-secondary">Batal</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
