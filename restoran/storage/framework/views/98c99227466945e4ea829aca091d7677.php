

<?php $__env->startSection('breadcrumbs'); ?>
<h3 class="text-center">Tambah Data Menu</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="<?php echo e(route('menu.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
            
                    <div class="mb-3">
                        <label for="nama_input" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="namaInput" id="nama_input">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Apload Gambar</label>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="kategori_input" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori_input" name="kategoriInput">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_input" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi_input" name="deskripsiInput">
                    </div>
                    
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restoran\resources\views/tambahMenu.blade.php ENDPATH**/ ?>