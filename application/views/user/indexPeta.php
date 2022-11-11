<!-- Begin Page Content -->
<div class="container-fluid" id="isi">
    <?php if ($this->session->userdata('username')) {
		$key = 'Admin';
	} else {
		$key = 'User';
	} ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Peta Objek Wisata</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <!-- <div class="row">
        <div class="col-lg-2">
            <div class="dropdown show">
                <button class="btn btn-<?= $customColor; ?> btn-sm dropdown-toggle mb-2 mr-2" href="#" role="button"
                    id="dropdownMenuLinkName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Kategori
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="tPkategori">
                    <?php foreach ($semua['dataKategori'] as $s) : ?>
                    <button class="dropdown-item" href="#" value="<?= $s->id ?>"><?= $s->nama ?></button>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="btn btn-<?= $customColor; ?> mb-2 btn-sm" id="tampilSemua">Tampilkan Semua <i
                    class="fa-solid fa-check-double"></i></button>
            <button class="btn btn-<?= $customColor; ?> mb-2 btn-sm" id="posisiOtomatis">Sesuaikan Posisi Otomatis <i
                    class="fa-solid fa-crosshairs"></i></button>

        </div>

      
    </div> -->
    <div class="row mb-2" style="display:none;" id="note">
        <div class="col-lg-6 col-md-12 col-sm-6">
            <h6 class="mb-3" id="pesan"></h6>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-6">
            <h6 name="latLng" id="latLng"></h6>
        </div>
    </div>

    <!-- <div class="row px-3"> -->
    <button class="alert alert-primary dropdown-toggle mb-2 mr-1" href="#" role="button" id="dropdownMenuLinkName"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pilih Kategori
    </button>
    <div class="dropdown-menu mr-1" aria-labelledby="dropdownMenuLink" id="tPkategori">
        <?php foreach ($semua['dataKategori'] as $s) : ?>
        <button class="dropdown-item" href="#" value="<?= $s->id ?>"><?= $s->nama ?></button>
        <?php endforeach; ?>
    </div>

    <button class="alert alert-success mb-2 mr-1" id="tampilSemua">Tampilkan Semua <i
            class="fa-solid fa-check-double"></i>
    </button>

    <button class="alert alert-danger mb-2" id="posisiOtomatis">Sesuaikan Posisi Otomatis
        <i class="fa-solid fa-crosshairs"></i>
    </button>
    <!-- </div> -->

    <h6 class="alert alert-warning mb-0"><i>Untuk mendapatkan rute yang sesuai, <b>pindahkan marker berwarna merah
                sesuai dengan posisi anda sekarang</b> atau klik tombol "<b>Sesuaikan Posisi Otomatis</b>"</i>
    </h6>

    <!-- Content Row -->
    <div class="row mb-3">
        <div class="col-lg-12">
            <div id="map" style="height: 690px;"></div>
        </div>
    </div>
</div>
<script>
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

var kotaKupang = new L.GeoJSON.AJAX([base_url + "/assets/geojson/kota-kupang/kota-kupang.geojson"], {
    style
}).addTo(map)

<?php foreach ($semua['dataKecamatan'] as $rowKec) : ?>

new L.GeoJSON.AJAX([base_url + "/assets/geojson/kecamatan/" +
    "<?= $rowKec->geojson; ?>"
], {
    style: function(feature) {
        return {
            opacity: 0.6,
            color: '<?= $rowKec->warnaFill ?>',
            fillOpacity: 0.5,
            fillColor: '<?= $rowKec->warnaFill ?>',
            weight: 3
        }
    },
    onEachFeature: function(f, l) {
        var out = []
        if (f.properties) {
            for (key in f.properties) {
                if (key == 'KECAMATAN') {
                    out.push("<b>KECAMATAN : </b>" + "<?= $rowKec->nama ?>")
                }
            }
            l.bindPopup(out.join("<br />"))
        }
    }
}).addTo(map)
<?php endforeach; ?>

//Deklarasi Lat & Lng Map
var latLng = [-10.211080, 123.600672];

//Set Posisi Toggle Zoom In/Out dan View Map
map.zoomControl.setPosition('topright');

//Set Posisi View Awal Dan Zoom Map
map.setView(latLng, 12);

//Deklarasi Tipe Map
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

let markerCoba = [];

$('#tampilSemua').click(function(e) {

    //Deklarasi Perulangan $.each Untuk Mengosongkan Array "markerCoba"
    $.each(markerCoba, function(index) {
        map.removeLayer(markerCoba[index]);
    });

    //Deklarasi Variabel "index" Untuk Menampung Index Marker
    var index = 0;

    //Deklarasi Perulangan foreach Untuk Generate Marker
    <?php foreach ($semua['dataObwis'] as $rowO) : ?>

    <?php foreach ($semua['dataKecamatan'] as $rowK) : ?>
    <?php if ($rowO->idkecamatan == $rowK->id) : ?>
    <?php $rowO->namaKecamatan = $rowK->nama; ?>
    <?php endif; ?>
    <?php endforeach; ?>

    <?php foreach ($semua['dataKelurahan'] as $rowKel) : ?>
    <?php if ($rowO->idkelurahan == $rowKel->id) : ?>
    <?php $rowO->namaKelurahan = $rowKel->nama; ?>
    <?php endif; ?>
    <?php endforeach; ?>

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

    markerCoba[index] = L.marker([<?= $rowO->lat ?>, <?= $rowO->lng ?>], {
        icon: myIcon,
    }).bindPopup('<img src=' + base_url + '/assets/img/' + '<?= $rowO->gambar ?>' +
        " style='width:300px;'><br><br>" +
        '<?= 'Nama : ' . $rowO->nama . '<br>' ?><?= 'Kecamatan : ' . $rowO->namaKecamatan . '<br>' ?><?= 'Kelurahan : ' . $rowO->namaKelurahan . '<br><a class="btn btn-' . $customColor . ' btn-sm text-white mt-2" href="' . base_url($key . '/indexDetailObwis' . $key . '/' . $rowO->namaKategori . '/' . $sidebarTitle . '/' . $rowO->id . '') . '">Detail</a><button class="btn btn-' . $customColor . ' btn-sm text-white ml-1 mt-2" href="#" id="rute" onclick="rute(' . $rowO->lat . ',' . $rowO->lng . ')">Rute</button>' ?>'
    ).addTo(map);
    index++;

    <?php endforeach; ?>
});

//Deklarasi Event Tombol "Pilih Kategori"
$('#tPkategori').children('button').click(function(e) {

    //Deklarasi Variabel "index" Untuk Menampung Index Marker

    //Deklarasi Perulangan $.each Untuk Mengosongkan Array "markerCoba"
    $.each(markerCoba, function(index) {
        map.removeLayer(markerCoba[index]);
    });

    // console.log(markerCoba)

    //Deklarasi Variabel "IdKategori"
    var idKategori = $(this).attr('value');

    //Deklarasi Event Untuk Mengambil Value Teks Berdasarkan Tombol Yang di Klik
    $('#dropdownMenuLinkName').text($(this).text() + ' ');

    $('#note').css('display', '');

    //Set Pesan Info Marker
    $('#pesan').html('<li><b>Marker Merah :</b> Posisi anda sekarang</li>' +
        '<li><b>Marker Hijau :</b> Posisi tujuan anda</li>');

    var index = 0

    //Deklarasi Perulangan foreach Untuk Generate Marker
    <?php foreach ($semua['dataObwis'] as $rowO) : ?>
    if (<?= $rowO->idkategori ?> == idKategori) {



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

        // console.log('<?= $rowO->marker ?>')
        markerCoba[index] = L.marker([<?= $rowO->lat ?>, <?= $rowO->lng ?>], {
            icon: myIcon,
        }).bindPopup('<img src=' + base_url + '/assets/img/' + '<?= $rowO->gambar ?>' +
            " style='width:300px;'><br><br>" +
            '<?= 'Nama : ' . $rowO->nama . '<br>' ?><?= 'Kecamatan : ' . $rowO->namaKecamatan . '<br>' ?><?= 'Kelurahan : ' . $rowO->namaKelurahan . '<br><a class="btn btn-' . $customColor . ' btn-sm text-white mt-2" href="' . base_url($key . '/indexDetailObwis' . $key . '/' . $rowO->namaKategori . '/' . $sidebarTitle . '/' . $rowO->id . '') . '">Detail</a><button class="btn btn-' . $customColor . ' btn-sm text-white ml-1 mt-2" href="#" id="rute" onclick="rute(' . $rowO->lat . ',' . $rowO->lng . ')">Rute</button>' ?>'
        ).addTo(map);
        index++;
    }
    <?php endforeach; ?>

});

var marker;

var control = L.Routing.control({
    waypoints: [latLng],
    routeWhileDragging: true,
    createMarker: function(i, waypoint, n) {
        var urlIcon;
        if (i == 0) {
            urlIcon = base_url + 'assets/img/icons/startMarker.png';
        } else if ((i + 1) == n) {
            urlIcon = base_url + 'assets/img/icons/finishMarker.png';
        } else {
            urlIcon = base_url + 'assets/img/icons/footstepsMarker.png';
        }
        marker = L.marker(waypoint.latLng, {
            draggable: true,
            bounceOnAdd: false,
            icon: L.icon({
                iconUrl: urlIcon,
                iconSize: [24, 25],
                iconAnchor: [10, 20],
                popupAnchor: [2, -16],
                shadowSize: [68, 45],
                shadowAnchor: [22, 94]
            })
        });
        return marker;
    }
})
control.addTo(map);

function rute(lat, lng) {
    var latLng = L.latLng(lat, lng);
    control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
}

$('#posisiOtomatis').click(function() {
    geoLocation();

    function geoLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Gagal mengambil koordinat lokasi";
        }
    }

    function showPosition(position) {

        $('#note').css('display', '');

        $('#latLng').html(
            '( Keakuratan koordinat bergantung pada stabilitas koneksi jaringan )<br><b>Posisi Otomatis LatLng : [ </b>' +
            position.coords.latitude + '<b>,</b> ' + position.coords.longitude + '<b> ]</b>');
        var latLng = [position.coords.latitude, position.coords.longitude];
        control.spliceWaypoints(0, 1, latLng);

        map.panTo(latLng);
    }
























































































































});
</script>