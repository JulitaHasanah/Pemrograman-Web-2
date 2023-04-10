

<?php $__env->startSection('container'); ?>
<h3 class="text-center">Tambah Data Mahasiswa</h3>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-5 border rounded mt-2">
                <form action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="POST">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                            <label for="nim_input" class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nimInput" id="nim_input" value="<?php echo e($mahasiswa->nim); ?>">
                     </div>
                    <div class="mb-3">
                            <label for="nama_input" class="form-label">Nama</label>
                           <input type="text" class="form-control" id="nama_input" name="namaInput" value="<?php echo e($mahasiswa->nama); ?>">
                    </div>
                    <div class="mb-3">
                            <label for="prodi_input" class="form-label">Prodi</label>
                            <input type="text" class="form-control" id="prodi_input" name="prodiInput" value="<?php echo e($mahasiswa->prodi); ?>">
                    </div>
                                   
                    <div class="row mx-2">
                            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                    </div>
               </form>
               
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum4\resources\views/editMahasiswa.blade.php ENDPATH**/ ?>