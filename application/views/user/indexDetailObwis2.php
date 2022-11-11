<div class="container-fluid" id="isi">
    <?php if ($this->session->userdata('username')) {
		$key = 'Admin';
	} else {
		$key = 'User';
	} ?>
    <style>
    .left {
        text-align: left;
    }

    .right {
        text-align: right;
    }

    .center {
        text-align: center;
    }

    .justify {
        text-align: justify;
    }
    </style>
    <?php if ($this->session->flashdata('noticeTambah')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil ditambahkan!',
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
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php endif; ?>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Detail data <?= $kategori ?></h3>
    </div>

    <!-- Divider -->
    <hr class="divider">

    <?php if ($this->session->userdata('username')) : ?>
    <a type="button" class="btn btn-sm btn-<?= $customColor; ?> mb-2"
        href="<?= base_url('Admin/indexTambahData/') . $kategori . '/' . $sidebarTitle ?>">
        <i class="fa-solid fa-circle-plus"></i>
        <span>Tambah Data</span>
    </a>
    <?php endif; ?>

    <div class="row">
        <?php foreach ($semua["dataKategori"] as $s) {
			if ($kategori == $s->nama) {
				$idKategori = $s->id;
			}
		} ?>
        <?php foreach ($semua["dataObwis"] as $s) : ?>
        <?php if ($idKategori == $s->idkategori) : ?>
        <?php
				$deksripsi = preg_replace('/\s+/', ' ', $s->deskripsi);
				$deksripsi = str_replace(array("'", '"'), " ", $deksripsi);
				?>
        <div class="col-lg-6 col-md-6 col-sm-12 p-2">
            <div class="card shadow">
                <img class="card-img-top" src="<?= base_url("assets/img/") . $s->gambar; ?>" alt="Card image cap"
                    style="height:280px;"
                    onclick="popUpFoto('<?= $s->nama ?>','<?= $s->namaKecamatan ?>','<?= $s->namaKelurahan ?>','<?= $s->alamat ?>','<?= $s->lat ?>','<?= $s->lng ?>','<?= $deksripsi ?>','<?= $s->gambar ?>',)">
                <div class="card-body">
                    <h5 class="card-title text-<?= $customColor; ?>"><b><?= $s->nama; ?></b></h5>
                    <hr class="divider">
                    <!-- <p class="card-text justify"><?= $s->deskripsi ?></p> -->
                    <a href="<?= base_url($key . '/indexDetailObwis' . $key . '/') . $kategori  . '/indexDetailObwis' . $key . '2/' . $s->id ?>"
                        class="btn btn-<?= $customColor; ?> btn-sm"><i class="fa-solid fa-magnifying-glass"></i>
                        Detail
                    </a>
                    <a href="https://<?= $s->link ?>" class="btn btn-<?= $customColor; ?> btn-sm">Link <i
                            class="fa-solid fa-link"></i></a>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<script>
function popUpFoto(nama, namaKecamatan, namaKelurahan, alamat, lat, lng, deskripsi, gambar) {
    Swal.fire({
        imageUrl: base_url + 'assets/img/' + gambar,
        title: nama,
        html: `<div class="left small"><li><b>Kec - Kel :</b> ` + namaKecamatan + ` - ` + namaKelurahan +
            `</li><li><b>Alamat :</b> ` + alamat +
            `</li><li><b>Lat / Lng :</b> ` + lat + ` / ` + lng +
            `</li></div><hr class="divider"><a class="mr-2" href="#" onclick="play()"><i class="fa-regular fa-circle-play"></i></a><a href="#" onclick="stop()"><i class="fa-regular fa-circle-stop"></i></a><div class="card-text justify" id="deskripsi">` +
            deskripsi +
            `</div>`,
        imageHeight: 400,
        imageWidth: 900,
        imageAlt: nama + 'jpg'
    })
}

function play() {
    var deskripsi = $('#deskripsi').html()
    var TextSpeak = deskripsi
    responsiveVoice.speak(TextSpeak, 'Indonesian Male', {
        pitch: 1,
        rate: 1,
        volume: 1
    })
}

// function pause() {
//     responsiveVoice.pause
// }










function stop() {
    responsiveVoice.cancel()
}
</script>