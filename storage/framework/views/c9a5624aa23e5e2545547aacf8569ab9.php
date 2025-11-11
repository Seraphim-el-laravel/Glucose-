<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/gejala/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>Tambah</a>

                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Kode Gejala</th>
                        <th>Name</th>
                        <th>Nialai CF</th>
                        <th>Action</th>
                    </tr>

                    <?php $__currentLoopData = $gejala; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->kode_gejala); ?></td>
                        <td><?php echo e($item->nama_gejala); ?></td>
                        <td><?php echo e($item->nilai_cf); ?></td>
                        <td>
                            <div class="d-flex">
                            <a href="/admin/gejala/<?php echo e($item->id); ?>/edit" class="btn btn-info mr-2"><i class="fas fa-edit"></i> Edit</a>
                         <form action="/admin/gejala/<?php echo e($item->id); ?>" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type= "submit" class = "btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                         </form>
                         </div>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\A. 1Tugas Kulyah\Semester 3\Kecerdasan Buatan\Projek\diabetes\resources\views/admin/gejala/index.blade.php ENDPATH**/ ?>