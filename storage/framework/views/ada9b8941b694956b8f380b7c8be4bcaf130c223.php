
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

    <form action="buy/0/0" method="POST" class="text-center">
        <?php echo csrf_field(); ?>
        <div class="row m-5 justify-content-center">

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Barcode stocks</label>
                <input name="id" type="text" placeholder="Code Barcode" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Name stocks</label>
                <input name="name" type="text" placeholder="Name stocks" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Supplier</label>
                <select name="supplier_id" class="form-control radius-20 border-0" required>
                    <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->company_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Count Stocks</label>
                <input name="count" type="number" placeholder="Count Stocks" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Price Stocks</label>
                <input name="price" type="number" placeholder="Price Stocks" class="form-control radius-20 border-0"
                    required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Expire Stocks</label>
                <input name="expire_date" type="date" class="form-control radius-20 border-0" required>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">is debt</label>
                <select name="is_debt" class="form-control radius-20 border-0" required>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="col text-center col-lg-4 col-12 mt-3">
                <label class="text-light">Type</label>
                <select name="type" class="form-control radius-20 border-0" required>
                    <option value="0">Barcode</option>
                    <option value="1">Qrcode</option>
                </select>
            </div>

        </div>
        <button class="btn btn-light radius-20 mt-3 w-25">Submit</button>
    </form>
    <hr>

    <?php echo $__env->make('layout.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="d-flex justify-content-center mt-4">
        <?php echo e($stocks->links()); ?>

    </div>

</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/stocks.blade.php ENDPATH**/ ?>