<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <style>
        .footer{
            position:absolute;
            bottom:0;
            width:100%;
            height:60px;   /* tinggi dari footer */
            background: blue;
            
        }
        .bordered{
          border : solid 1px;
        }
        .row-c{
            /* Center vertically and horizontally */
          position: absolute;
          top: 20%;
          left: 20%;
      
        }
        .col-c{
            /* Center vertically and horizontally */
          position: absolute;
          justify-items: auto
          top: 20%;
          left: 20%;
      
        }
    </style>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    LOGO
                </a>
                <?php if(auth()->guard()->check()): ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo e(url('admin')); ?>">Halaman Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('dosen')); ?>">Halaman Dosen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('mahasiswa')); ?>">Halaman Mahasiswa</a>
                        </li>
                    </ul>

                <?php endif; ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="row bordered align-items-center" >
              <div class="col-3 bordered">
                <div class="row bordered ">                
                  <div class="card text-center">
                    <div class="card-header">
                      <h2>Kalender</h2>
                    </div>
                    <div class="card-body">
                      
                      <iframe src="https://calendar.google.com/calendar/embed?src=example%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>

                    </div>
                    
                  </div>
                  
                                  </div>
                <div class="row bordered">
                <ul>
                  <h2>helpdesk</h2>
                    <li>List item 1</li>
                    <li>List item 2</li>
                    <li>List item 3</li>
                    <li>List item 3</li>
                  </ul></div>
              </div>
              <div class="col-6 bordered">
                <div class="row bordered " rowspan="2" style="justify-content:center;height=100%"><?php echo $__env->yieldContent('content'); ?></div>
              </div>
              <div class="col-3 bordered">
                <div class="row bordered" rowspan="2">
                  <div class="card text-center">
                    <div class="card-header">
                      <h2>Panduan</h2>
                    </div>
                    <div class="card-body">
                      <ul>
                        <li>List item 1</li>
                        <li>List item 2</li>
                        <li>List item 3</li></div>
                    </div>
                    
                      
                  </div>
                  
              </div>
            </div>  
            
          </main>
          
    </div>
    <div class="footer">
        <div class="text-center p-3" style="background-color: rgba(255, 255, 255, 0.2);">
        © 2023 Copyright:
        <a class="text-dark">Kelompok 8</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH E:\Plus_Iso\CODE\WEB\PKM KC Web\resources\views/layouts/app.blade.php ENDPATH**/ ?>