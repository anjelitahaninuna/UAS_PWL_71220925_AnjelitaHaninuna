<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- navigasi bar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
        <a class="navbar-brand text-white font-weight-bold" href="#">LUNARA COLLECTION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- login/register -->
        <div class="navbar-nav ml-auto">
            <a href="#" class="btn btn-outline-light btn-sm mx-2">Login</a>
            <a href="#" class="btn btn-outline-light btn-sm mx-2">Register</a>
        </div>
  </nav>
  <!-- navigasi bar  -->

    <!-- bodynya -->
    <div class="cointainer pt-4">
        <div class="row">
            <div class="col-md-12 bg-white py-4">
                <div class="row">
                    <?php $__currentLoopData = $datacari; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <?php if($dc->gambar): ?>
                        <img src="<?php echo e(asset('storage/gambar/'.$dc->gambar)); ?>" alt="<?php echo e($dc->namaParfum); ?>"  class="card-img-top">
                        <?php else: ?>
                        <img src="/storage/gambar/noimage.jpg" alt="no image" width="200" height="150">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($dc->namaParfum); ?> </h5>
                            <h5 class="card-title"><?php echo e($dc->jenisAroma); ?> </h5>
                            <h5 class="card-title">Rp <?php echo e(number_format($dc->harga,0,',','.')); ?></h5>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\pwblanjut\lunara\resources\views//hasilCari.blade.php ENDPATH**/ ?>