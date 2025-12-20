<?php $__env->startSection('title','.:Changes Password Form:.'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card shadow-sm mx-auto mt-5" style="max-width: 400px;">
        <div class="card-header">
            <h5>Ubah Password</h5>
        </div>
        <div class="card-body">
            <form action="/updatepass" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
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
                    <?php $__errorArgs = ['passwordLama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                     <small class="text-danger"><?php echo e($message); ?></small>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                    <?php $__errorArgs = ['passwordBaru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                     <small class="text-danger"><?php echo e($message); ?></small>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pwblanjut\lunara\resources\views/changespass.blade.php ENDPATH**/ ?>