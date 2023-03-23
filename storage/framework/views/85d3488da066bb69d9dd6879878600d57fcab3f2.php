
<?php $__env->startSection('content'); ?>

<div class="container">
    <br>
    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger"><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php if(session('result')): ?>
    <div class="alert alert-warning"><?php echo e(session('result')); ?></div>
    <?php endif; ?>

    <form action="supplier/0/0" method="POST" class="text-center">
        <?php echo csrf_field(); ?>
        <div class="row m-5 justify-content-center">

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Name Supplier</label>
                <input name="name" type="text" placeholder="Name Supplier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Email Supplier</label>
                <input name="email" type="text" placeholder="Email Supplier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Address Supplier</label>
                <input name="address" type="text" placeholder="Address Supplier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Phonenumber Supplier</label>
                <input name="phonenumber" type="number" placeholder="Phonenumber Supplier"
                    class="form-control radius-20 border-0" required>
            </div>

        </div>
        <button class="btn btn-light radius-20 mt-3 w-25">Submit</button>
    </form>

    <hr>

    <div class="row justify-content-center">
        <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card text-center radius-20 m-2" style="width: 18rem;">
            <i class="ion-android-bus text-dark" style="font-size: 100px"></i>
            <div class="card-body">
                <small class="card-title">Name : <?php echo e($sup->company_name); ?></small><br>
                <small class="card-title">Email : <?php echo e($sup->email); ?></small><br>
                <small class="card-title">Address : <?php echo e($sup->address); ?></small><br>
                <small class="card-title">Phonenumber : <?php echo e($sup->phonenumber); ?></small><br>
                <br>
                <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit<?php echo e($sup->id); ?>">Edit</span>
                <span class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?php echo e($sup->id); ?>">Delete</span>
            </div>


            <!-- Modal Delete -->
            <div class="modal fade" id="delete<?php echo e($sup->id); ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <span>Do You Want TO Delete <?php echo e($sup->company_name); ?></span>

                            <form action="supplier/1/<?php echo e($sup->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger w-25 mt-3 radius-10">Yes</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Edit -->
            <div class="modal fade" id="edit<?php echo e($sup->id); ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <form action="supplier/2/<?php echo e($sup->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row m-5 justify-content-center">

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Name Supplier</label>
                                        <input name="name" type="text" placeholder="Name Supplier"
                                            class="form-control radius-10" value="<?php echo e($sup->company_name); ?>" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Email Supplier</label>
                                        <input name="email" type="text" placeholder="Email Supplier"
                                            class="form-control radius-10" value="<?php echo e($sup->email); ?>" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Address Supplier</label>
                                        <input name="address" type="text" placeholder="Address Supplier"
                                            class="form-control radius-10" value="<?php echo e($sup->address); ?>" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Phonenumber Supplier</label>
                                        <input name="phonenumber" type="number" placeholder="Phonenumber Supplier"
                                            value="<?php echo e($sup->phonenumber); ?>" class="form-control radius-10" required>
                                    </div>

                                </div>
                                <button class="btn btn-dark radius-20 mt-3 w-75">Edit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>



        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <div class="d-flex justify-content-center mt-4">
        <?php echo e($supplier->links()); ?>

    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/supplier.blade.php ENDPATH**/ ?>