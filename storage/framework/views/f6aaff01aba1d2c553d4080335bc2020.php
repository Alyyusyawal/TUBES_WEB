<?php $__env->startSection('content'); ?>
    
    
    <div class="container mt-3">
        <div class="row">
          <div class="col-12">
    
            <div class="py-4 d-flex justify-content-end align-item-center">
              <h2 class="mr-auto">Tabel Admins</h2>
              <a href="<?php echo e(route('admins.create')); ?>" class="btn btn-primary">
                Tambah Admin</a>
            </div>
    
            <?php if(session()->has('pesan')): ?>
              <div class="alert alert-success">
                <?php echo e(session()->get('pesan')); ?>

              </div>
            <?php endif; ?>
    
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $signups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <th><?php echo e($loop->iteration); ?></th>
                  <td><?php echo e($admin->nim); ?></td>
                  <td><?php echo e($admin->nama); ?></td>
                  <td><?php echo e($admin->email); ?></td>
                  <td><?php echo e($admin->role); ?></td>
                  <td>
                    <a href="<?php echo e(route('admins.edit', $admin->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('admins.destroy', $admin->id)); ?>" method="POST" class="d-inline">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus admin ini?')">Hapus</button>
                    </form>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                  <td colspan="6" class="text-center">Tidak ada data...</td>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
      
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Plus_Iso\CODE\WEB\TubesWeb\TUBES_WEB\resources\views/admin.blade.php ENDPATH**/ ?>