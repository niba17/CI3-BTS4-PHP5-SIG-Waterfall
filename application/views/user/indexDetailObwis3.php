<div class="container-fluid" id="isi">
    <?php if ($this->session->userdata('username')) {
    $key = 'Admin';
  } else {
    $key = 'User';
  } ?>
    <?php if ($this->session->flashdata('noticeUbah')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil diubah!',
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
    <a class="btn btn-<?= $customColor; ?> btn-sm" href="<?= base_url($key . '/indexberanda' . $key); ?>">
        <i class="fa-solid fa-circle-left"></i>
        <span>Kembali</span>
    </a>
    <?php
  $idKategori = "";

  foreach ($semua["dataKategori"] as $s) {
    if ($kategori == $s->nama) {
      $idKategori = $s->id;
    }
  }
  ?>
    <div class="table-responsive mt-3">
        <table class="table table-striped" style="font-size:13px;" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Alamat</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <?php if ($this->session->userdata('username')) : ?>
                    <th style="width:100px;">Aksi</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
        foreach ($semua["dataObwis"] as $s) : ?>
                <?php if ($idKategori == $s->idkategori) : ?>
                <tr>
                    <td><?= ++$no; ?></td>
                    <td><?= $s->nama; ?></td>
                    <td><?= $s->namaKategori; ?></td>
                    <td><?= $s->namaKecamatan; ?></td>
                    <td><?= $s->namaKelurahan; ?></td>
                    <td><?= $s->alamat; ?></td>
                    <td><?= $s->lat; ?></td>
                    <td><?= $s->lng; ?></td>
                    <td><?= $s->deskripsi; ?></td>
                    <td>
                        <img src="<?= base_url('assets/img/') . $s->gambar; ?>" alt="img"
                            style="width:200px; height:100px;" onclick="popUpFoto('<?= $s->gambar ?>')">
                    </td>
                    <?php if ($this->session->userdata('username')) : ?>
                    <td>
                        <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle"
                            href="<?= base_url('Admin/indexUbahData/') . $s->id . '/' . $kategori . '/' . $sidebarTitle ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="#"
                            onclick="hapus('<?= $s->id; ?>','<?= $kategori; ?>','<?= $sidebarTitle; ?>')">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                    <?php endif; ?>
                </tr>
                <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
function hapus(id, kategori, sidebarTitle) {
    Swal.fire({
        title: 'Yakin ingin Menghapus?',
        // text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace(base_url + 'Admin/HapusData/' + id + '/' + kategori + '/' + sidebarTitle);
        }
    })
}

function popUpFoto(gambar, nama) {
    Swal.fire({
        imageUrl: base_url + 'assets/img/' + gambar,
        title: nama,
        imageHeight: 400,
        imageWidth: 700,
        imageAlt: 'A tall image'
    })
}
</script>