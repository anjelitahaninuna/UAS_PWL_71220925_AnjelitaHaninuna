<!doctype html>
<html lang="en">
<head>
  <title>Register LUNARA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap 4.3 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body style="height:100vh;
background-image: url('<?php echo e(asset('storage/banner/purplebanner.jpg')); ?>');
background-size: cover;
background-position: center;
background-repeat: no-repeat;">

<div class="container">
  <div class="d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card shadow-lg" style="width:380px; background:rgba(255,255,255,.9); border-radius:12px;">
      <div class="card-body">
        <h4 class="text-center mb-3 font-weight-bold">REGISTER</h4>

        <form action="/registersimpan" method="POST">
          <?php echo csrf_field(); ?>

          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
          </div>

          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>

          <div class="form-group">
            <div class="input-group">
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              <div class="input-group-append">
                <span class="input-group-text bg-white" onclick="togglePassword('password', 'icon1')" style="cursor:pointer">
                  <i class="fa fa-eye" id="icon1"></i>
                </span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <input type="password" name="password_confirmation" id="password2" class="form-control" placeholder="Konfirmasi Password" required>
              <div class="input-group-append">
                <span class="input-group-text bg-white" onclick="togglePassword('password2', 'icon2')" style="cursor:pointer">
                  <i class="fa fa-eye" id="icon2"></i>
                </span>
              </div>
            </div>
          </div>

          <button class="btn btn-dark btn-block">Daftar</button>

          <p class="text-center mt-3 mb-0">
            Sudah punya akun? <a href="/login">Login</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
function togglePassword(id, iconId) {
    const input = document.getElementById(id);
    const icon = document.getElementById(iconId);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.replace("fa-eye-slash", "fa-eye");
    }
}
</script>

</body>
</html>
<?php /**PATH C:\pwblanjut\lunara\resources\views/register.blade.php ENDPATH**/ ?>