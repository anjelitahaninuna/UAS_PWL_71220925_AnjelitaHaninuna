<?php $__env->startSection("title","Manajemen Parfum"); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">

    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Manajemen Data Parfum</h3>
        <a href="/parfums/tambahParfum" class="btn btn-dark"><i class="bi bi-plus-square-fill"></i> Tambah Parfum</a>
    </div>

    
    <?php if(session('alert')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo e(session('alert')); ?>

            <button type="button" class="close" data-dismiss="alert">
                <span>&times;</span>
            </button>
        </div>
    <?php endif; ?>

    
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table id= "example" class="table table-bordered table-hover align-middle text-center" style="100%">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Parfum</th>
                            <th>Merek</th>
                            <th>Aroma</th>
                            <th>Volume</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $parfums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($index + 1); ?></td>
                            <td><?php echo e(ucfirst($p->namaParfum)); ?></td>
                            <td><?php echo e(ucfirst($p->merek)); ?></td>
                            <td><?php echo e(ucfirst($p->jenisAroma)); ?></td>
                            <td><?php echo e($p->volume_ml); ?></td>
                            <td>Rp <?php echo e(number_format($p->harga,0,',','.')); ?></td>
                            <td><?php echo e($p->stok); ?></td>
                            <td>
                                <img src="<?php echo e($p->gambar
                                    ? asset('storage/gambar/'.$p->gambar)
                                    : asset('storage/gambar/noimage.jpg')); ?>"
                                    width="70" class="rounded">
                            </td>
                            <td>
                                <a href="/detail/<?php echo e($p->id); ?>" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i> </a>
                                <a href="/parfums/editParfum/<?php echo e($p->id); ?>" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="/parfums/delete/<?php echo e($p->id); ?>"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                                   class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pwblanjut\lunara\resources\views/parfums.blade.php ENDPATH**/ ?>