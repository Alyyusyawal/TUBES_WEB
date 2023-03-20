

<?php $__env->startSection('content'); ?>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                    <h1 style="text-align: center">PRESENSI</h1>
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">NIM</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Present
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Absent
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Sick
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Excused
                        </label>
                      </div>
                    <a href="/"><button type="submit" class="btn btn-primary">Submit</button></a>
                  </form>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Plus_Iso\CODE\WEB\TubesWeb\TUBES_WEB\resources\views/presensi.blade.php ENDPATH**/ ?>