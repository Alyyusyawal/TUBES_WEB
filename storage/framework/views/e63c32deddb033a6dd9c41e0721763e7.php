

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
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
              <label class="form-check-label" for="flexRadioDefault3">
                Sick
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
              <label class="form-check-label" for="flexRadioDefault4">
                Excused
              </label>
            </div>
            <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
    
    <script src="assets/js/geo-min.js" type="text/javascript" charset="utf-8"></script>
    <script>
      const submitBtn = document.querySelector('#submit-btn');
    
      submitBtn.addEventListener('click', handleSubmit);
    
      function handleSubmit(event) {
        event.preventDefault();
        success_callback(geo_position_js.getCurrentPosition());
      }
    
      function success_callback(p) {
        const latitude = p.coords.latitude;
        const longitude = p.coords.longitude;
    
        fetch('your-server-side-script.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            latitude,
            longitude
          })
        })
        .then(response => {
          console.log('Location data sent successfully');
        })
        .catch(error => {
          console.error('Error sending location data:', error);
        });
      }
    </script>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Plus_Iso\CODE\WEB\TubesWeb\TUBES_WEB\resources\views/presensi.blade.php ENDPATH**/ ?>