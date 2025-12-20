@extends("layouts.main")
@section('title','.:Changes Password Form:.')
@section('content')
    <div class="card shadow-sm mx-auto mt-5" style="max-width: 400px;">
        <div class="card-header">
            <h5>Ubah Password</h5>
        </div>
        <div class="card-body">
            <form action="/updatepass" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="passwordLama">Password Lama</label>
                     <div class="input-group">
                        <input type="password" id="passwordLama" name="passwordLama" class="form-control" required>
                        <div class="input-group-append">
                            <span class="input-group-text bg-white toggle-password" data-target="passwordLama" style="cursor:pointer">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    @error('passwordLama')
                     <small class="text-danger">{{ $message }}</small>
                     @enderror
                </div>

                <div class="form-group">
                    <label for="passwordBaru">Password Baru</label>
                    <div class="input-group">
                        <input type="password" id="passwordBaru" name="passwordBaru" class="form-control" required>
                        <div class="input-group-append">
                            <span class="input-group-text bg-white toggle-password" data-target="passwordBaru" style="cursor:pointer">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    @error('passwordBaru')
                     <small class="text-danger">{{ $message }}</small>
                     @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary">Batal</button>
                </div>
            </form>
        </div>
    </div>

<script>
document.querySelectorAll('.toggle-password').forEach(function (el) {
    el.addEventListener('click', function () {
        const input = document.getElementById(this.dataset.target);
        const icon = this.querySelector('i');

        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
});
</script>
@endsection

