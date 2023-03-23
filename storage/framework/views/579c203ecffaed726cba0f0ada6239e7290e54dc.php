<div class="row justify-content-center m-2">
    <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card m-2 radius-20 text-center" style="width: 18rem;">

        <div class="mt-5" style="min-height:50px">
            <?php if($stock->type == 0): ?>
            <?php echo DNS1D::getBarcodeSVG("$stock->id", 'C128',1,53); ?>

            <?php else: ?>
            <?php echo DNS2D::getBarcodeSVG("$stock->id", 'QRCODE'); ?>

            <?php endif; ?>
        </div>
        <div class="card-body text-left">
            <?php if($stock->is_debt == 1): ?>
            <span class="btn btn-warning btn-sm m-2 radius-20" style="position: absolute;top:0;left:0">Debt !</span>
            <?php endif; ?>
            <span class="btn btn-warning btn-sm m-2 radius-10" style="position: absolute;top:0;left:0">Debt !</span>
            <small class="card-title">Barcode : <?php echo e($stock->id); ?></small><br>
            <small class="card-title">Name : <?php echo e($stock->name); ?></small><br>
            <small class="card-title">Supplier : <?php echo e($stock->one_supplier->company_name); ?></small><br>
            <small class="card-title">Count : <?php echo e($stock->count); ?></small><br>
            <small class="card-title">Price : <?php echo e(number_format($stock->price , 0 , '.' , '.')); ?> IQD</small><br>
            <small class="card-title">Expire : <?php echo e($stock->expire_date); ?></small><br>
            <small class="card-title">Create At : <?php echo e($stock->created_at); ?></small><br>

            <span class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#edit<?php echo e($stock->id); ?>">Edit</span>
            <span class="btn btn-danger btn-sm mt-3" data-toggle="modal"
                data-target="#delete<?php echo e($stock->id); ?>">Delete</span>

            <!-- Modal Delete -->
            <div class="modal fade" id="delete<?php echo e($stock->id); ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <span>Do You Want TO Delete <?php echo e($stock->name); ?></span>

                            <form action="buy/1/<?php echo e($stock->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger text-center w-50 mt-3 radius-10">Yes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit -->
            <div class="modal fade" id="edit<?php echo e($stock->id); ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">

                            <form action="buy/2/<?php echo e($stock->id); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row m-5 justify-content-center">

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Barcode Stock</label>
                                        <input name="id" type="text" placeholder="Barcode Stock"
                                            class="form-control radius-10" value="<?php echo e($stock->id); ?>" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Name Stock</label>
                                        <input name="name" type="text" placeholder="Name Supplier"
                                            class="form-control radius-10" value="<?php echo e($stock->name); ?>" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Supplier</label>
                                        <select name="supplier_id" class="form-control radius-20" required>
                                            <option value="<?php echo e($stock->supplier_id); ?>">
                                                <?php echo e($stock->one_supplier->company_name); ?></option>
                                            <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->company_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Count Stock</label>
                                        <input name="count" type="text" placeholder="Count"
                                            class="form-control radius-10" value="<?php echo e($stock->count); ?>" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Price Stocks</label>
                                        <input name="price" type="text" placeholder="Price Stocks"
                                            value="<?php echo e($stock->price); ?>" class="form-control radius-10" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Expire</label>
                                        <input name="expire_date" type="date" class="form-control radius-10" required>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">is debt</label>
                                        <select name="is_debt" class="form-control radius-20" required>
                                            <option value="0">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>

                                    <div class="col text-center col-12 mt-3">
                                        <label class="text-dark">Type</label>
                                        <select name="type" class="form-control radius-20" required>
                                            <option value="0">Barcode</option>
                                            <option value="1">Qrcode</option>
                                        </select>
                                    </div>


                                </div>
                                <button class="btn btn-dark radius-20 mt-3 w-25">Edit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH C:\xampp\htdocs\market\resources\views/layout/card.blade.php ENDPATH**/ ?>