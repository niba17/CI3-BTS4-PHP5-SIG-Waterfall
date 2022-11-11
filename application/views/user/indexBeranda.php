<!-- Begin Page Content -->
<div class="container-fluid" id="isi">
    <?php if ($this->session->userdata('username')) {
		$key = 'Admin';
	} else {
		$key = 'User';
	} ?>
    <?php if ($this->session->flashdata('noticeLogout')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Logout!',
        timer: 1000
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('noticeHapus')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil dihapus!',
        timer: 1000
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('noticeLogin')) : ?>
    <script>
    let timerInterval
    Swal.fire({
        // title: 'Selamat Datang Admin!',

        html: 'Menyiapkan data.',
        timer: 1500,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
            Swal.fire({
                icon: 'success',
                title: 'Selamat Datang Admin!',
                timer: 1000
                // text: 'Something went wrong!',
                // footer: '<a href="">Why do I have this issue?</a>'
            })
        }
    })
    </script>
    <?php endif; ?>
    <?php if ($key == 'User') : ?>
    <style>
    .containerBox {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .text-box {
        margin-top: 50px;
        position: absolute;
        height: 100%;
        text-align: center;
        width: 100%;

    }

    .text-box:before {
        /* content: ''; */
        display: inline-block;
        height: 100%;
        vertical-align: top;

    }

    h4 {
        display: inline-block;
        font-size: 35px;
        /* font-weight: 250px; */
        /*or whatever you want*/
        /* color: #FFF; */
        -webkit-text-stroke: 1px black;
        /* font-family: arial; */
        color: #00eded;
        /* text-shadow: 0 0 5px aqua; */
    }

    img {
        display: block;
        max-width: 100%;
        height: auto;
        object-fit: fill;
        height: 450px;
        width: inherit;
    }
    </style>

    <div class="containerBox mb-3">
        <div class="text-box">
            <!-- <h4><b>Selamat datang di Website Objek Wisata Kota Kupang</b></h4> -->
        </div>
        <img class="img-responsive" src="<?= base_url('assets/img/index/beranda.jpg') ?>" />
    </div>
    <?php endif; ?>

    <?php if ($key == 'Admin') : ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Persebaran Objek Wisata Kota Kupang</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <div class="row mb-3">
        <div class="col-lg-12">
            <div id="map" style="height: 590px;"></div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Content Row -->
    <div class="row">

        <!-- Page Card -->
        <?php $index = 0;
		foreach ($semua['dataKategori'] as $s) : ?>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-3">
            <div class="card border-left-<?= $customColor; ?> shadow h-100">
                <a class="card-body" href="<?= base_url($key . '/indexDetailObwis' . $key . '3/' . $s->nama) ?>">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h7 font-weight-bold text-<?= $customColor; ?> text-uppercase mb-1">
                                <?= $s->nama ?>
                            </div>
                            <div class="h6 mb-0 font-weight-bold text-gray-800"><?= $jObwis[$index];
																					$index++; ?> Rekomendasi</div>
                        </div>
                        <div class="col-auto">
                            <?php if ($s->id == "1") {
									echo ("<i class='fa-solid fa-umbrella-beach fa-2x text-gray-500'></i>");
								} else if ($s->id == "2") {
									echo ("<i class='fa-solid fa-dungeon fa-2x text-gray-500'></i>");
								} else if ($s->id == "3") {
									echo ("<i class='fa-solid fa-tree fa-2x text-gray-500'></i>");
								} else if ($s->id == "4") {
									echo ("<i class='fa-solid fa-arrow-up-from-ground-water fa-2x text-gray-500'></i>");
								} else if ($s->id == "5") {
									echo ("<i class='fa-solid fa-hands-praying fa-2x text-gray-500'></i>");
								} else if ($s->id == "6") {
									echo ("<i class='fa-solid fa-monument fa-2x text-gray-500'></i>");
								} else if ($s->id == "7") {
									echo ("<i class='fa-solid fa-water-ladder fa-2x text-gray-500'></i>");
								} else if ($s->id == "8") {
									echo ("<i class='fa-solid fa-house-flood-water-circle-arrow-right fa-2x text-gray-500'></i>");
								} else if ($s->id == "9") {
									echo ("<i class='fa-solid fa-fan fa-2x text-gray-500'></i>");
								} else if ($s->id == "10") {
									echo ("<i class='fa-solid fa-landmark fa-2x text-gray-500'></i>");
								} else if ($s->id == "11") {
									echo ("<i class='fa-solid fa-utensils fa-2x text-gray-500'></i>");
								} else {
									echo ("<i class='fa-solid fa-mountain-sun fa-2x text-gray-500'></i>");
								}
								?>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-lg-12 mb-3">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-2 bg-<?= $customColor; ?> text-center">
                    <h3 class="m-0 font-weight-bold text-white">Kota Kupang Destination</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($kupangDest as $rowKD) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-2">
                            <div class="card shadow">
                                <img class="card-img-top" src="<?= base_url('assets/img/' . $rowKD->gambar) ?>"
                                    alt="Card image cap" style="height:200px;"
                                    onclick="popUpFoto('<?= $rowKD->gambar ?>','<?= $rowKD->nama ?>')">
                                <div class="card-body">
                                    <h5 class="card-title text-<?= $customColor; ?>"><b><?= $rowKD->nama; ?></b></h5>
                                    <!-- <hr class="divider"> -->
                                    <!-- <h6 class="card-text mb-2"><?= $rowKD->deskripsi; ?></h6> -->
                                    <!-- <a href="<?= base_url($key . '/indexDetailObwis' . $key . '/' . $rowKD->namaKategori . '/' . $sidebarTitle . '/' . $rowKD->id) ?>" class="btn btn-<?= $customColor; ?> btn-sm"><i class="fa-solid fa-magnifying-glass"></i> Detail</a> -->
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function popUpFoto(gambar, nama) {
    Swal.fire({
        imageUrl: base_url + 'assets/img/' + gambar,
        title: nama,
        imageHeight: 400,
        imageWidth: 700,
        imageAlt: nama
    })
}

//Dekralasi Map
var map = L.map('map', {
    zoomControl: true
});

function style(feature) {
    return {
        opacity: 0.6,
        color: 'blue',
        fillOpacity: 0.1,
        fillColor: 'blue',
        weight: 1
    }
}

var kotaKupang = new L.GeoJSON.AJAX([base_url + "/assets/geojson/kota-kupang.geojson"], {
    style
}).addTo(map)

//Deklarasi Lat & Lng Map
var latLng = [-10.211080, 123.600672];

//Deklarasi Icon Posisi User
// var myIcon = new L.icon({
//     iconUrl: '',
//     // base_url + 'assets/img/icons/baseMarker.png',
//     iconSize: [24, 25],
//     iconAnchor: [10, 20],
//     popupAnchor: [2, -16],
//     shadowSize: [68, 45],
//     shadowAnchor: [22, 94]
// });

//Set Posisi Toggle Zoom In/Out dan View Map
map.zoomControl.setPosition('topleft');

//Set Posisi View Awal Dan Zoom Map
map.setView(latLng, 12);

//Deklarasi Tipe Map
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

//Instaniasi Jquery
$(document).ready(function() {

    //Deklarasi Variabel "marker" Untuk Menampung Marker
    var marker = [];
    // var customColor = <?= $customColor ?>;

    //Deklarasi Event Tombol "Pilih Kategori"
    // $('#tPkategori').children('a').click(function(e) {

    //Deklarasi Variabel "IdKategori"
    // var idKategori = $(this).attr('value');

    //Deklarasi Event Untuk Mengambil Value Teks Berdasarkan Tombol Yang di Klik 
    $('#dropdownMenuLinkName').text($(this).text() + ' ');

    //Set Pesan Info Marker
    $('#pesan').html('<li><b>Marker Merah</b> : Posisi anda sekarang</li>' +
        '<li><b>Marker Biru</b> : Posisi Objek Wisata (' + $(this).text() + ')</li>' +
        '<li><b>Marker Hijau</b> : Posisi tujuan anda</li>');

    //Deklarasi Perulangan $.each Untuk Mengosongkan Array "marker"
    // $.each(marker, function(index) {
    //   map.removeLayer(marker[index]);
    // });

    //Deklarasi Variabel "index" Untuk Menampung Index Marker
    var index = 0;

    //Deklarasi Perulangan foreach Untuk Generate Marker
    <?php foreach ($semua['dataObwis'] as $rowO) : ?>
    // if (<?= $rowO->idkategori ?> == idKategori) {
    <?php foreach ($semua['dataKecamatan'] as $rowK) {
				if ($rowO->idkecamatan == $rowK->id) {
					$rowO->namaKecamatan = $rowK->nama;
				}
			} ?>
    <?php foreach ($semua['dataKelurahan'] as $rowKel) {
				if ($rowO->idkelurahan == $rowKel->id) {
					$rowO->namaKelurahan = $rowKel->nama;
				}
			} ?>
    <?php foreach ($semua['dataKategori'] as $rowKat) {
				if ($rowO->idkategori == $rowKat->id) {
					$rowO->namaKategori = $rowKat->nama;
					$rowO->marker = $rowKat->marker;
				}
			} ?>

    var myIcon = new L.icon({
        iconUrl: base_url + 'assets/marker/' + '<?= $rowO->marker ?>',
        iconSize: [24, 25],
        iconAnchor: [10, 20],
        popupAnchor: [2, -16],
        shadowSize: [68, 45],
        shadowAnchor: [22, 94]
    });

    marker[index] = new L.marker([<?= $rowO->lat ?>, <?= $rowO->lng ?>], {
        icon: myIcon
    }).bindPopup('<img src=' + base_url + '/assets/img/' + '<?= $rowO->gambar ?>' +
        " style='width:300px;'><br><br>" +
        '<?= 'Nama : ' . $rowO->nama . '<br>' ?><?= 'Kecamatan : ' . $rowO->namaKecamatan . '<br>' ?><?= 'Kelurahan : ' . $rowO->namaKelurahan . '<br><a class="btn btn-' . $customColor . ' btn-sm text-white mt-2" href="' . base_url($key . '/indexDetailObwis' . $key . '/' . $rowO->namaKategori . '/' . $sidebarTitle  . '/' . $rowO->id . '') . '">Detail</a>' ?>'
    ).addTo(map);
    index++;
    // }
    <?php endforeach; ?>
    // e.preventDefault();
    // });
});

// var marker;
// var control = L.Routing.control({
//   waypoints: [
//     latLng
//   ],
//   routeWhileDragging: true,
//   createMarker: function(i, waypoint, n) {
//     var urlIcon;
//     if (i == 0) {
//       urlIcon = base_url + 'assets/img/icons/startMarker.png';
//     } else if ((i + 1) == n) {
//       urlIcon = base_url + 'assets/img/icons/finishMarker.png';
//     } else {
//       urlIcon = base_url + 'assets/img/icons/footstepsMarker.png';
//     }
//     marker = L.marker(waypoint.latLng, {
//       draggable: true,
//       bounceOnAdd: false,
//       icon: L.icon({
//         iconUrl: urlIcon,
//         iconSize: [38, 40],
//         iconAnchor: [22, 40],
//         popupAnchor: [-3, -76],
//         shadowSize: [68, 45],
//         shadowAnchor: [22, 94]
//       })
//     });
//     return marker;
//   }
// })
// control.addTo(map);

// function rute(lat, lng) {
//   var latLng = L.latLng(lat, lng);
//   control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
// }

// $('#posisiOtomatis').click(function() {
//   geoLocation();

//   function geoLocation() {
//     if (navigator.geolocation) {
//       navigator.geolocation.getCurrentPosition(showPosition);
//     } else {
//       x.innerHTML = "Gagal mengambil koordinat lokasi";
//     }
//   }

//   function showPosition(position) {
//     $('#latLng').html('(Keakuratan koordinat bergantung pada stabilitas koneksi jaringan)<br><b>Posisi Otomatis Anda : </b><br>Lat : ' + position.coords.latitude + '<br>Lng : ' + position.coords.longitude);
//     var latLng = [position.coords.latitude, position.coords.longitude];
//     control.spliceWaypoints(0, 1, latLng);
//     map.panTo(latLng);
//   }
// });
// $('#latLng').html('Latitude : ' + marker.getLatLng().lat + '<br>Longitude : ' + marker.getLatLng().lng);

// marker.on('drag', function() {
//   $('#latLng').html('Latitude : ' + marker.getLatLng().lat + '<br>Longitude : ' + marker.getLatLng().lng);
//   var latLng = [position.coords.latitude, position.coords.longitude];
//   control.spliceWaypoints(0, 1, latLng);
// });

// marker.on('dragend', function() {
//   map.panTo([marker.getLatLng().lat, marker.getLatLng().lng]);
// });


// $('#posisiSekarang').click(function {













// });
</script>