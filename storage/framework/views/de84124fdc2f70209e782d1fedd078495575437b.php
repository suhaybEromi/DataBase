
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
    <form action="cashier" method="POST" class="text-center">
        <?php echo csrf_field(); ?>
        <div class="row m-5 justify-content-center">

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-white">Name Cashier</label>
                <input name="name" type="text" placeholder="Name Cashier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-white">Email Cashier</label>
                <input name="email" type="email" placeholder="Email Cashier" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-white">Password Cashier</label>
                <input name="password" type="password" placeholder="Password Cashier"
                    class="form-control radius-20 border-0" required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-white">Rule Cashier</label>
                <select name="rule" class="form-control radius-20 border-0" required>
                    <option value="0">Cashier</option>
                    <option value="1">Admin</option>
                </select>
            </div>

        </div>
        <button class="btn btn-light radius-20 mt-3 w-50">Submit</button>
    </form>

    <hr>

    <div class="row justify-content-center">
        <?php $__currentLoopData = $cashiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card text-center radius-20 m-2" style="width: 18rem;">
            <i class="ion-person text-dark" style="font-size: 100px"></i>
            <div class="card-body">
                <small class="card-title">Name : <?php echo e($cashier->name); ?></small><br>
                <small class="card-title">Email : <?php echo e($cashier->email); ?></small><br>
                <small class="card-title">Rule : <?php echo e($cashier->rule == 1 ? "Admin" : "Cashier"); ?></small><br>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/cashier.blade.php ENDPATH**/ ?>