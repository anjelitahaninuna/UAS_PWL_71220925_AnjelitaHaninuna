<?php $__env->startSection('title','.:Parfums Edit Form:.'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <!-- col-md-6 -->
            <div class="card ">
                <div class="card-header">
                    <h3>Edit Parfum</h3>
                </div>

                <div class="card-body">
                    <form action="/parfums/update/<?php echo e($p->id); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group">
                            <label for="namaParfum">Nama Parfum</label>
                            <input type="text" name="namaParfum" id="namaParfum" class="form-control" value="<?php echo e($p->namaParfum); ?>">
                        </div>

                        <div class="form-group">
                            <label for="merek">Merek</label>
                            <input type="text" name="merek" id="merek" class="form-control" value="<?php echo e($p->merek); ?>">
                        </div>

                        <div class="form-group">
                            <label for="jenisAroma">Jenis Aroma</label>
                            <input type="text" name="jenisAroma" id="jenisAroma" class="form-control" value="<?php echo e($p->jenisAroma); ?>">
                        </div>

                        <div class="form-group">
                            <label for="volume_ml">Volume (ml)</label>
                            <input type="number" min="10" max="2500" name="volume_ml" id="volume_ml" class="form-control" value="<?php echo e($p->volume_ml); ?>">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga (Rp)</label>
                            <input type="number" name="harga" id="harga" class="form-control" value="<?php echo e($p->harga); ?>">
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" value="<?php echo e($p->stok); ?>">
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" class="form-control"><?php echo e($p->deskripsi); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar Parfum</label>
                            <input type="file" name="gambar" id="gambar" accept="image/*" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <?php if($p->gambar): ?>
                                <img src="<?php echo e(asset('storage/gambar/'.$p->gambar)); ?>" alt="<?php echo e($p->namaParfum); ?>" width="200" height="150">
                            <?php else: ?>
                                <img src="<?php echo e(asset('/gambar/noimage.jpg')); ?>" alt="no image" width="200" height="150">
                            <?php endif; ?>
                            <br><small><i>*foto sebelumnya</i></small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/parfums" class="btn btn-secondary">Batal</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pwblanjut\lunara\resources\views/editParfum.blade.php ENDPATH**/ ?>