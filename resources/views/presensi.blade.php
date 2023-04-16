@extends('layouts.app')

@section('content')
    
    {{-- <div class="container">
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
    <script src="assets/js/geo-min.js" type="text/javascript" charset="utf-8"></script>
    <script>
        if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            div_isi=document.getElementById(“div_isi”);
            div_isi.innerHTML =”Tidak ada fungsi geolocation”;
        }

        function success_callback(p) {
            // Get latitude and longitude from geolocation data
            const latitude = p.coords.latitude;
            const longitude = p.coords.longitude;

            // Send HTTP request to server-side script to save location data
            fetch('/api/save-location', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    latitude: latitude,
                    longitude: longitude
                })
            })
            .then(response => {
                // Handle response from server-side script
            })
            .catch(error => {
                // Handle error sending request
            });
        }

        
        function error_callback(p)
        {
            div_isi=document.getElementById(“div_isi”);
            div_isi.innerHTML ='error='+p.message;
        }        
    </script> --}}

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form action="">
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
    
    
@endsection