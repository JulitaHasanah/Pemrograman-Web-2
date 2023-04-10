

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('breadcrumbs'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="content mt-3">
    <div class="animated fadeIn">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>
    
    <a href="./tambahmenu" class="btn btn-success">Tambah Data </a> <br><br>
    <table class="table">

        <thead>
            <tr>

                
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Gambar</th>
                <th scope="col">Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
            ?>
    
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($no); ?></th>
                <td><?php echo e($item->nama); ?></td>
                <td>
                    <img src="<?php echo e(asset('gambarmenu/'.$item->gambar)); ?>" style="width: 55px" alt="">
                </td>
                <td><?php echo e($item->kategori); ?></td>
                <td><?php echo e($item->deskripsi); ?></td>
                <td>
                    <a href="./tampilkandata/<?php echo e($item->id); ?>" class="btn btn-info">Edit</a>
                    <a href="./delete/<?php echo e($item->id); ?>" class="btn btn-danger">Delete</a>
                    
                </td>
            </tr>
    
            <?php
                $no++;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
</div><!-- .content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restoran\resources\views//menu/menu.blade.php ENDPATH**/ ?>