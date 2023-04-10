

<?php $__env->startSection('breadcrumbs'); ?>
<h3 class="text-center">Edit Data Menu</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="<?php echo e(route('menu.update', $menu->id)); ?>" method="POST">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                            <label for="nim_input" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="namaInput" id="nama_input" value="<?php echo e($menu->nama); ?>">
                     </div>
                     <div class="mb-3">
                        <label for="gambar" class="form-label">Apload Gambar</label>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                            <label for="nama_input" class="form-label">Kategori</label>
                           <input type="text" class="form-control" id="kategori_input" name="kategoriInput" value="<?php echo e($menu->kategori); ?>">
                    </div>
                    <div class="mb-3">
                            <label for="prodi_input" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi_input" name="deskripsiInput" value="<?php echo e($menu->deskripsi); ?>">
                    </div>
                                   
                    <div class="row mx-2">
                            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
               </form>
               
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restoran\resources\views/editMenu.blade.php ENDPATH**/ ?>