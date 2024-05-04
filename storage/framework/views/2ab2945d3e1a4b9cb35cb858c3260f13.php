<?php $__env->startSection('content'); ?>


    <div class="container-sm my-5 ">
        <div class="row justify-content-center">
            <div style="background-color: rgb(255, 184, 195);" class="p-5 rounded-3 col-xl-4 border">
                <div class="mb-3 text-center ">
                    <i class="bi bi-flower1 fs-1"></i>
                    <h4>Detail Product</h4>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-md-12 mb-3">
                        <label for="kode_product" class="form-label">Kode Product</label>
                        <h5><?php echo e($product->kode_product); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama_product" class="form-label">Nama Product</label>
                        <h5><?php echo e($product->nama_product); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga_product" class="form-label">Harga Product</label>
                        <h5><?php echo e($product->harga_product); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi-product" class="form-label">Deskripsi Product</label>
                        <h5><?php echo e($product->deskripsi_product); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">satuan</label>
                        <h5><?php echo e($product->satuan->nama_satuan); ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(route('Product.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/UTS-MasterBarangVanva/resources/views/Product/show.blade.php ENDPATH**/ ?>