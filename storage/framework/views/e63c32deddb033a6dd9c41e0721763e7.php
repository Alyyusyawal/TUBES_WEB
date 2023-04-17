

<?php $__env->startSection('content'); ?>
    
    

    

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="<?php echo e(route('umums.store')); ?>" method="POST">
          
            <?php echo csrf_field(); ?>
            <h1 style="text-align: center">PRESENSI</h1>
            <div class="mb-3">
              <label for="nim">NIM</label>
              <input type="text"
              class="form-control <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              id="nim" name="nim" value="<?php echo e(old('nim')); ?>">
              <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            <div class="mb-3">
              <label for="nama">Nama Lengkap</label>
              <input type="text"
              class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
              id="nama" name="nama" value="<?php echo e(old('nama')); ?>">
              <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <label>Status Presensi</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kehadiran"
                      id="hadir" value="H"
                      <?php echo e(old('kehadiran')=='H' ? 'checked': ''); ?> >
                      <label class="form-check-label" for="hadir">Hadir</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kehadiran"
                      id="absen" value="A"
                      <?php echo e(old('kehadiran')=='A' ? 'checked': ''); ?> >
                      <label class="form-check-label" for="absen">Absen</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kehadiran"
                      id="sakit" value="S"
                      <?php echo e(old('kehadiran')=='S' ? 'checked': ''); ?> >
                      <label class="form-check-label" for="sakit">Sakit</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="kehadiran"
                      id="izin" value="I"
                      <?php echo e(old('kehadiran')=='I' ? 'checked': ''); ?> >
                      <label class="form-check-label" for="izin">Izin</label>
                    </div>
                    <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>
            <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
    
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Plus_Iso\CODE\WEB\TubesWeb\TUBES_WEB\resources\views/presensi.blade.php ENDPATH**/ ?>