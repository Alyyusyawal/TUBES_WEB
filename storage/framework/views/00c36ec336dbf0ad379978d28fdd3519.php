<?php $__env->startSection('content'); ?>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    
                    <div class="card-body">
                        <h1>Ini adalah Halaman Admin</h1>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Notifications!</strong> Ada 10 User Mahasiswa yang belum melakukan verifikasi.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Notifications!</strong> Ada 10 Guest yang belum melakukan daftar ulang.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Notifications!</strong> Ada 5 Dosen yang sudah upload materi di e-learning.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/adindaleviona/Desktop/Praktikum Blade/resources/views/admin.blade.php ENDPATH**/ ?>