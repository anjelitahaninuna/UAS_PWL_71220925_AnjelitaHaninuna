<!doctype html>
<html lang="en">
<head>
  <title>Lunara Collection</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-light">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
    <a class="navbar-brand font-weight-bold" href="#">LUNARA COLLECTION</a>

    <div class="navbar-nav ml-auto">
      <a href="#" class="btn btn-outline-light btn-sm mx-2">Login</a>
      <a href="#" class="btn btn-outline-light btn-sm mx-2">Register</a>
    </div>
  </nav>
  <!-- END NAVBAR -->

  <!-- HERO + SEARCH -->
  <div class="container d-flex align-items-center justify-content-center text-center" style="min-height:60vh;">
    <div class="col-md-8">

      
      <h1 class="font-weight-bold mb-3">
        Temukan Aroma yang Mewakili Dirimu
      </h1>
      <p class="text-muted mb-4">
        Jelajahi dan temukan aroma sempurna untuk setiap momen dalam hidupmu.
      </p>

      
      <form action="/hasilCari">
        <div class="input-group input-group-lg">
          <input type="text"
            class="form-control"
            placeholder="Cari parfum favoritmu di sini..."
            name="cari">

          <div class="input-group-append">
            <button class="btn btn-dark px-4" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </div>
      </form>

    </div>
  </div>
  

  
  <div class="container">
    <h2 class="font-weight-bold mb-4 text-center">Top 3 Parfum Terbaru</h2>

    <div class="row">
      <?php $__currentLoopData = $dataParfum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="<?php echo e($pr->gambar ? asset('storage/gambar/'.$pr->gambar) : asset('storage/gambar/noimage.jpg')); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo e($pr->namaParfum); ?></h5>
              <p class="card-text"><?php echo e($pr->deskripsi); ?></p>
              <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

  <!-- JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</body>
</html>
<?php /**PATH C:\pwblanjut\lunara\resources\views//homeVisit.blade.php ENDPATH**/ ?>