<?php if ($this->session->flashdata('noticeGagalTambah')) : ?>
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Kelurahan dalam Kecamatan sudah ada!',
      // text: 'Something went wrong!',
      // footer: '<a href="">Why do I have this issue?</a>'
    })
  </script>
<?php endif; ?>
<div class="container-fluid" id="isi">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="mb-0 text-gray-800">Index Tambah Kelurahan</h3>
  </div>

  <!-- Divider -->
  <hr class="divider">
  <form class="user" enctype="multipart/form-data" action="<?= base_url('Admin/tambahKelurahan'); ?>" method="post">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="form-group mb-3">
          <label for="namaKel">Kelurahan</label>
          <input type="text" class="form-control" name="namaKel" id="namaKel" placeholder="Masukkan Nama Kelurahan..." required>
        </div>
        <div class="form-group mb-3">
          <div class="input-group-prepend">
            <label for="idKec">Kecamatan</label>
          </div>
          <select class="custom-select" name="idKec" id="idKec" required>
            <option value="" selected>Pilih kecamatan...</option>
            <?php foreach ($semua["dataKecamatan"] as $row) : ?>
              <option value=<?= $row->id; ?>><?= $row->nama; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-circle-plus"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>