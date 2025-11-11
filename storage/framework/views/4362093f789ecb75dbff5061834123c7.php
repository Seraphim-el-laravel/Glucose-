<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">


                <?php if(isset($gejala)): ?>
                <form action="/admin/gejala/<?php echo e($gejala->id); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>
                <?php else: ?>            
                <form action="/admin/gejala" method="POST">
                <?php endif; ?>
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="">Kode Gejala</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['kode_gejala'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kode_gejala"  placeholder="Kode Gejala" 
                        value="<?php echo e(isset($gejala) ? $gejala->kode_gejala : old('kode_gejala')); ?>">
                        <?php $__errorArgs = ['kode_gejala'];
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
                        <label for="">Nama Gejala</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nama_gejala'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="nama_gejala"  placeholder="Nama Gejala"
                        value="<?php echo e(isset($gejala) ? $gejala->nama_gejala : old('nama_gejala')); ?>">
                        <?php $__errorArgs = ['nama_gejala'];
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
                        <label for="">Nilai CF</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nilai_cf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nilai_cf"  placeholder="Nilai CF"
                        value="<?php echo e(isset($gejala) ? $gejala->nilai_cf : old('nilai_cf')); ?>">
                        <?php $__errorArgs = ['nilai_cf'];
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

                    

                    <a href="/admin/gejala" class="btn btn-info"><i class="fas fa-arrow-left"></i>Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\XAMPP DOC\htdocs\SistemPakar\resources\views/admin/gejala/create.blade.php ENDPATH**/ ?>