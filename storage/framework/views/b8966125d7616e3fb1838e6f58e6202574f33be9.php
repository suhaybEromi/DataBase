<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market</title>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body class="bg-info">

    <?php if(auth()->guard()->check()): ?>
    <div class="d-flex" id="wrapper">
        <div class="bg-white text-center" id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="<?php echo e(asset('assets/img/pharmacy.png')); ?>" width="50" alt=""><span
                    class="ml-3">Pharma</span></div>
            <div class="list-group list-group-flush">
                <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(Str::lower(str_replace(' ' , '' ,$item->name))); ?>" class="btn btn-success btn-lg m-2">
                    <i style="position: absolute;left:0" class="<?php echo e($item->icon); ?> ml-3"></i><?php echo e($item->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <form action="logout" method="POST">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger btn-lg rounded-0 mt-4 mb-3 mr-0 w-100 shadow-none">
                        <i class="ion-log-out ml-3" style="position: absolute;left:0"></i>
                        Logout
                    </button>
                </form>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <button class="btn btn-primary radius-20" id="menu-toggle">Toggle Menu</button>
            </nav>
            <div class="container-fluid">
                <?php endif; ?>
                <?php echo $__env->yieldContent('content'); ?>
                <?php if(auth()->guard()->check()): ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\market\resources\views/layout/nav.blade.php ENDPATH**/ ?>