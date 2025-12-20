<?php $__env->startSection("title","Detail Produk"); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-10 col-lg-8 shadow p-4 rounded" style="background:white">
            <div class="row">

                <!-- Bagian Gambar -->
                <div class="col-md-5 text-center d-flex align-items-center">
                    <img src="<?php echo e($parfm->gambar ? asset('storage/gambar/'.$parfm->gambar) : asset('storage/gambar/noimage.jpg')); ?>"
                        class="img-fluid" style="max-height:420px; object-fit:cover;">
                </div>

                <!-- Bagian Detail -->
                <div class="col-md-7">
                    <h3 class="fw-bold mb-1"><?php echo e(ucfirst($parfm->namaParfum)); ?></h3>
                    <small class="text-muted d-block mb-3"><?php echo e(ucfirst($parfm->merek)); ?></small>

                    <p class="mb-1"><?php echo e(ucfirst($parfm->jenisAroma)); ?></p>
                    <p class="mb-1"><?php echo e($parfm->volume_ml); ?> ml</p>

                    <h4 class="text-dark fw-semibold mt-2 mb-1">Rp <?php echo e(number_format($parfm->harga,0,',','.')); ?></h4>
                    <p class="text-success">Tersedia <?php echo e($parfm->stok); ?></p>

                    <p class="mt-3"><?php echo e(ucfirst($parfm->deskripsi)); ?></p>

                    <a href="/register" class="btn btn-dark px-4 py-2 mt-3">
                        <i class="bi bi-cart-plus"></i> Tambahkan Ke Keranjang
                    </a>

                    

                </div>

            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainVisit", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pwblanjut\lunara\resources\views/detailProduk.blade.php ENDPATH**/ ?>