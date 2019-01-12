<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title> <?php echo $__env->yieldContent('title'); ?> </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link href="<?php echo e(asset('back/css/material-dashboard.css?v=2.1.0')); ?>" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo e(asset('back/css/demo.css')); ?>" rel="stylesheet" />

    <?php echo $__env->yieldPushContent('css'); ?>

</head>
<body>
    <div id="app">
        <div class="wrapper ">

            <?php if(Request::is('admin*')): ?>

                <?php echo $__env->make('layouts.partial.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php endif; ?>

            <div class="main-panel">

                <?php if(Request::is('admin*')): ?>

                    <?php echo $__env->make('layouts.partial.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php endif; ?>

                    <?php echo $__env->yieldContent('content'); ?>

                <?php if(Request::is('admin*')): ?>

                    <?php echo $__env->make('layouts.partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php endif; ?>
                <script>
                    const x = new Date().getFullYear();
                    let date = document.getElementById('date');
                    date.innerHTML = '&copy; ' + x + date.innerHTML;
                </script>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('back/js/core/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('back/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('back/js/core/bootstrap-material-design.min.js')); ?>"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="<?php echo e(asset('back/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Chartist JS -->
    <script src="<?php echo e(asset('back/js/plugins/chartist.min.js')); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo e(asset('back/js/plugins/bootstrap-notify.js')); ?>"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(asset('back/js/material-dashboard.js?v=2.1.0')); ?>"></script>

    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('back/demo/demo.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
