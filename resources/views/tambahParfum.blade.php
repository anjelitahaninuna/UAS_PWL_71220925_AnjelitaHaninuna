@extends("layouts.main")
@section('title','.:Parfums Add Form:.')
@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                <div class="card-header">
                    <h3> Tambah Parfum</h3>
                </div>

                <div class="card-body">
                    <form action="/parfums/save" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="namaParfum">Nama Parfum</label>
                            <input type="text" name="namaParfum" id="namaParfum" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="merek">Merek</label>
                            <input type="text" name="merek" id="merek" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="jenisAroma">Jenis Aroma</label>
                            <input type="text" name="jenisAroma" id="jenisAroma" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="volume_ml">Volume (ml)</label>
                            <input type="number" min="50" max="2500" name="volume_ml" id="volume_ml" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga (Rp)</label>
                            <input type="number" name="harga" id="harga" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Parfum</label>
                            <input type="file" name="gambar" id="gambar" accept="image/*" class="form-control-file" required>
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