

<?php $__env->startSection('breadcrumbs'); ?>
<h3 class="text-center">Edit Data Menu</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="./../updatedata/<?php echo e($data->id); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
            
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value = "<?php echo e($data->nama); ?>" > 
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Apload Gambar</label>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" class="form-control" aria-label="Pilih Kategori">
                            <option selected value => <?php echo e($data->kategori); ?> </option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>       
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value = "<?php echo e($data->deskripsi); ?>">
                    </div>
                    
                    <div class="row mx-2">
                        <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mainAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restoran\resources\views//menu/editMenu.blade.php ENDPATH**/ ?>