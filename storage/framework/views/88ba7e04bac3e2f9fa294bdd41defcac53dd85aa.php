<?php $__env->startSection('title','.:Hasil Cari:.'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 bg-white py-4">
                <div class="row">
                    <?php $__currentLoopData = $datacari; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <div class="card p-3" style="width: 18rem;">
                            <div class="text-center">
                                <img src="<?php echo e($dc->gambar ? asset('storage/gambar/'.$dc->gambar) : asset('storage/gambar/noimage.jpg')); ?>" class="img-fluid mb-3"  style="max-height:160px; object-fit:cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold mb-0"><?php echo e(ucfirst($dc->namaParfum)); ?></h5>
                                <small class="text-muted mb-2 d-block"><?php echo e(ucfirst($dc->merek)); ?></small>

                                <p class="card-text mb-0"><strong>Aroma:</strong> <?php echo e(ucfirst($dc->jenisAroma)); ?></p>
                                <p class="card-text mb-1"><strong>Harga:</strong> Rp <?php echo e(number_format($dc->harga,0,',','.')); ?></p>

                                <div class="mt-3 d-flex">
                                    <a href="/detail/<?php echo e($dc->id); ?>" class="btn btn-dark">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.mainVisit", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pwblanjut\lunara\resources\views/hasilCari.blade.php ENDPATH**/ ?>