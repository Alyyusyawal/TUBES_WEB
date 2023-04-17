

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <div class="pt-3 d-flex justify-content-end align-items-center">
        <h1 class="h2 mr-auto">Biodata <?php echo e($signup->nama); ?></h1>
        <a href="<?php echo e(route('admins.edit',['admin' => $signup->id])); ?>" class="btn btn-primary">Edit</a>
        <form action="<?php echo e(route('admins.destroy',['admin' => $signup->id])); ?>" method="POST">
          <?php echo method_field('DELETE'); ?>
          <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-danger ml-3">Hapus</button>
        </form>
      </div>
      <hr>
      <?php if(session()->has('pesan')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo e(session()->get('pesan')); ?>

        </div>
      <?php endif; ?>
  
      <ul>
        <li>NIM: <?php echo e($signup->nim); ?> </li>
        <li>Nama: <?php echo e($signup->nama); ?> </li>
        <li>Email: <?php echo e($signup->email); ?> </li>
        <li>Role: <?php echo e($signup->role); ?> </li>
      </ul>
  
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Plus_Iso\CODE\WEB\TubesWeb\TUBES_WEB\resources\views/admin/show.blade.php ENDPATH**/ ?>