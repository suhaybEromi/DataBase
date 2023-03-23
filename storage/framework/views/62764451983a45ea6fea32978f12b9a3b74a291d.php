
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layout.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="d-flex justify-content-center mt-4">
    <?php echo e($stocks->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\market\resources\views/debtlist.blade.php ENDPATH**/ ?>