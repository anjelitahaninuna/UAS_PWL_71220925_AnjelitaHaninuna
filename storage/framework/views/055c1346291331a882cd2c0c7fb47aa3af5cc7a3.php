<?php $__env->startSection('title', 'Users'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <a href="/users/addform" class="btn btn-primary"><i class="bi bi-plus-square"></i> Users</a>
        </div>
        <div class="card-body">
            <!-- POP UP -->
            <?php if(session('alert')): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo e(session('alert')); ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <table id="example" class="display" style="width: 100%">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $usr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($idx + 1); ?></td>
                        <td><?php echo e($p->name); ?></td>
                        <td><?php echo e($p->email); ?></td>
                        <td>
                            <?php if($p->foto): ?>
                                <img src="<?php echo e(asset('/storage/foto/' . $p->foto)); ?>" alt="<?php echo e($p->foto); ?>" width=80 height=80>
                            <?php else: ?>
                                <img src="/storage/poster/noimage.jpg" alt="no image" width=80 height=80>
                            <?php endif; ?>
                        </td>
                        <td>
                            <!-- delete button-->
                            <a href="/users/delete/<?php echo e($p->id); ?>" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pwblanjut\lunara\resources\views/users.blade.php ENDPATH**/ ?>