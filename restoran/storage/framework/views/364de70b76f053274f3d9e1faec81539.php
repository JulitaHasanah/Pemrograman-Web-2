
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?> PHP RESTAURANT</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="vie      
    port" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/css/cs-skin-elastic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/assets/scss/style.css')); ?>">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

  <script src="<?php echo e(asset('style/assets/js/vendor/jquery-2.1.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('style/assets/js/main.js')); ?>"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">PHP  RESTAURANT</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                      <a href="<?php echo e(url('menu')); ?>"> <i class="menu-icon fa fa-tasks"></i>Menu </a>
                  </li>
                  <li>
                      <a href="<?php echo e(url('karyawan')); ?>"> <i class="menu-icon fa fa-users"></i>Karyawan </a>
                  </li>
                  <li>
                    <a href="<?php echo e(url('home')); ?>"> <i class="menu-icon fa fa-sign-out"></i>Log Out </a>
                  </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <h3>Halaman Admin</h3>
                </div>
            </div>

        </header><!-- /header -->

        <?php echo $__env->yieldContent('breadcrumbs'); ?>
        <?php echo $__env->yieldContent('content'); ?>


    </div><!-- /#right-panel -->

</body>
</html>
<?php /**PATH C:\xampp\htdocs\restoran\resources\views////layouts/mainAdmin.blade.php ENDPATH**/ ?>