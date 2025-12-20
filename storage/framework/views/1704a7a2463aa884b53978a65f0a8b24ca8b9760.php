<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"  crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" crossorigin="anonymous">
    <!-- datatables.com bagian css yang dicopy -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>WELCOME</title>

  </head>
  <body>
  <!-- navigasi bar  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
    <a class="navbar-brand text-white font-weight-bold" href="#">LUNARA COLLECTION</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- home dan parfums  -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link <?php echo e(($key =='dashboard')? 'active  text-white fw-bold' : ''); ?> h5" href="/dashboard" role ="tab">Dashboard</a>
        <a class="nav-item nav-link <?php echo e(($key =='parfums')? 'active text-white fw-bold' : ''); ?> h5" href="/parfums" role="tab">Parfums</a>
        <a class="nav-item nav-link <?php echo e(($key =='users')? 'active text-white fw-bold' : ''); ?> h5" href="/users" role="tab">Users</a>
      </div>

    <!-- pencarian dan keranjang -->
      <div class="navbar-nav ml-auto d-flex align-items-center">
        
        
      </div>

      <!-- profil user -->
      <?php if(auth()->guard()->check()): ?>
      <!-- kalau sudah login -->
      <div class="dropdown float-right">
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="bi bi-person-fill"></i>
          <?php echo e(Auth::user()->name); ?>

        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">
            <div class="media">
              <img src="<?php echo e(Auth::user()->foto ? asset('storage/foto/' . Auth::user()->foto):
              asset('/storage/foto/noimage.jpg')); ?>"class="align-self-center mr-3" width="50" height="50" alt="...">
              <div class="media-body">
                <h5 class="mt-0"><?php echo e(Auth::user()->name); ?></h5>
                <small></small><p><i class="bi bi-clock"></i> <?php echo e(now()->timezone('Asia/Jakarta')->format('H:i')); ?> WIB</p>
              </div>
            </div>
          </a>
          <a class="dropdown-item" href="/changespass"><i class="bi bi-sliders2"></i> Settings</a>
          <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-left"></i> Logout</a>
        </div>
      </div>
      <?php endif; ?>
  </nav>
  <!-- navigasi bar  -->

  <div class="container-fluid mt-4">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

    <!-- <h1>LUNARA COLLECTION</h1> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- untuk membuat tabel databases kita -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <script>
      new DataTable('#example');
    </script>
  </body>
</html>
<?php /**PATH C:\pwblanjut\lunara\resources\views/layouts/main.blade.php ENDPATH**/ ?>