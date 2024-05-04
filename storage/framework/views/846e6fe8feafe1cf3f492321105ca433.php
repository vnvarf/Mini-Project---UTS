<?php $__env->startSection('content'); ?>

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('Product.create')); ?>" class="btn" style="background-color: #c9f2ff">Input Product</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <style>
                .bg-light-blue {
                    background-color: #efefef;
                }
            </style>
            <table class="table table-bordered table-hover table-striped mb-0 bg-light-blue">
                <thead>
                    <tr>
                        <th>Kode Product</th>
                        <th>Nama Product</th>
                        <th>Harga Product</th>
                        <th>Deskripsi Product</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->kode_product); ?></td>
                            <td><?php echo e($product->nama_product); ?></td>
                            <td><?php echo e($product->harga_product); ?></td>
                            <td><?php echo e($product->deskripsi_product); ?></td>
                            <td><?php echo e($product->satuan_name); ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?php echo e(route('Product.show', ['Product' => $product->id])); ?>"
                                        class="btn btn-outline-dark btn-sm me-2"><i
                                            class="bi-person-lines-fill"></i></a>


                                    <a href="<?php echo e(route('Product.edit', ['Product' => $product->id])); ?>"
                                        class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                    <div>
                                        <form
                                            action="<?php echo e(route('Product.destroy', ['Product' => $product->id])); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                    class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/UTS-MasterBarangVanva/resources/views/Product/index.blade.php ENDPATH**/ ?>