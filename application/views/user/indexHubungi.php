<!-- Page Heading -->
<div class="container-fluid" id="isi">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="mb-0 text-gray-800">Hubungi Kami</h3>
  </div>

  <hr class="divider">
  <!-- <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div> -->
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 p-2">
      <div class="card shadow">
        <div class="card-body" style="height:190px;">
          <h5 class="card-title text-center"><i class="fa-solid fa-envelope fa-2x text-gray-500"></i></h5>
          <p class="card-text text-center alert alert-primary" role="alert">dispar@kotakupang.co.id</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 p-2">
      <div class="card shadow">
        <div class="card-body" style="height:190px;">
          <h5 class="card-title text-center"><i class="fa-solid fa-location-dot fa-2x text-gray-500"></i></h5>
          <p class="card-text text-center alert alert-danger" role="alert">Jl. Frans Seda No.72, Oesapa, Kelapa Lima, Kota Kupang, Nusa Tenggara Timur, 85227, Indonesia</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 p-2">
      <div class="card shadow">
        <div class="card-body" style="height:190px;">
          <h5 class="card-title text-center"><i class="fa-solid fa-phone fa-2x text-gray-500"></i></h5>
          <p class="card-text text-center alert alert-warning" role="alert">(0380) 821540</p>
        </div>
      </div>
    </div>
  </div>

  <?php if ($this->session->userdata('username')) {
    $key = 'Admin';
  } else {
    $key = 'User';
  } ?>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="mb-0 text-gray-800">Lokasi Dinas Pariwisata Kota Kupang</h3>
  </div>

  <!-- Divider -->
  <hr class="divider">

  <!-- Content Row -->
  <div class="row mb-3">
    <div class="col-lg-12">
      <div id="map" style="height: 690px;"></div>
    </div>
  </div>
</div>
<script>
  var map = L.map('map').setView([-10.15401, 123.61013], 13);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  L.marker([-10.15401, 123.61013]).addTo(map)
    .bindPopup('Dinas Pariwisata Kota Kupang')
    .openPopup();
</script>
</div>