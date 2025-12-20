<?php $__env->startSection('title','Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">

    
    <h4 class="mb-4">Selamat Datang, <?php echo e(Auth::user()->name); ?></h4>

    
    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h6>Total Parfum</h6>
                    <h3><?php echo e($totalParfum); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h6>Total User</h6>
                    <h3><?php echo e($totalUser); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-danger shadow">
                <div class="card-body">
                    <h6>Stok Habis</h6>
                    <h3><?php echo e($stokHabis); ?></h3>
                </div>
            </div>
        </div>

    </div>

    
    <div class="card mt-4 shadow">
        <div class="card-header font-weight-bold">
            Parfum Terbaru
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead class="thead-light">
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Merek</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $parfumTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <img src="<?php echo e(asset('storage/gambar/'.$p->gambar)); ?>" width="50">
                        </td>
                        <td><?php echo e($p->namaParfum); ?></td>
                        <td><?php echo e($p->merek); ?></td>
                        <td><?php echo e($p->stok); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pwblanjut\lunara\resources\views/dashboard.blade.php ENDPATH**/ ?>