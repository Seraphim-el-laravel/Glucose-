<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">


                <?php if(isset($penyakit)): ?>
                <form action="/admin/penyakit/<?php echo e($penyakit->id); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>
                <?php else: ?>            
                <form action="/admin/penyakit" method="POST">
                <?php endif; ?>
                    <?php echo csrf_field(); ?>



                   <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="name"  placeholder="Nama Kategori"
                        value="<?php echo e(isset($penyakit) ? $penyakit->name : old('name')); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                    

                   
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                       <textarea name="desc" class = "form-control"id="" cols="30" rows="10">
                        <?php echo e(isset($penyakit) ? $penyakit->desc : old('desc')); ?>

                       </textarea>
                        <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="form-group">
                        <label for="">Penanganan</label>
                       <textarea name="penanganan" class = "form-control"id="" cols="30" rows="10">
                        <?php echo e(isset($penyakit) ? $penyakit->penanganan : old('penanganan')); ?>

                       </textarea>
                        <?php $__errorArgs = ['penanganan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    

                    <a href="/admin/penyakit" class="btn btn-info"><i class="fas fa-arrow-left"></i>Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\A. 1Tugas Kulyah\Semester 3\Kecerdasan Buatan\Projek\diabetes\resources\views/admin/penyakit/create.blade.php ENDPATH**/ ?>