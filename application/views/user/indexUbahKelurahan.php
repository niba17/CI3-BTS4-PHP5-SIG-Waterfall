<div class="container-fluid" id="isi">
  <?php if ($this->session->flashdata('noticeGagalUbah')) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Kelurahan dalam Kecamatan sudah ada!',
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
      })
    </script>
  <?php endif; ?>
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="mb-0 text-gray-800">Index Ubah Kelurahan</h3>
  </div>

  <!-- Divider -->
  <hr class="divider">
  <form class="user" enctype="multipart/form-data" action="<?= base_url('Admin/ubahKelurahan'); ?>" method="post">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <input type="hidden" name="idKel" value="<?= $idKel; ?>" method="post">
        <input type="hidden" name="namaKec" value="<?= $namaKec; ?>" method="post">
        <div class="form-group mb-3">
          <label for="namaKel">Kelurahan</label>
          <input type="text" class="form-control" name="namaKel" id="namaKel" value="<?= $namaKel ?>" required>
        </div>
        <div class="form-group mb-3">
          <div class="input-group-prepend">
            <label for="idKec">Kecamatan</label>
          </div>
          <select class="custom-select" name="idKec" id="idKec" required>
            <!-- <option value="<?= $idKec; ?>" selected><?= $namaKec . ' (selected)'; ?></option> -->
            <?php foreach ($semua["dataKecamatan"] as $rowKec) : ?>
              <?php if ($rowKec->nama == $namaKec) : ?>
                <option value=<?= $idKec; ?> selected><?= $namaKec; ?></option>
              <?php endif; ?>
              <?php if ($rowKec->nama != $namaKec) : ?>
                <option value=<?= $rowKec->id; ?>><?= $rowKec->nama; ?></option>
              <?php endif; ?>
            <?php endforeach; ?>
          </select>
        </div>
        <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-pen-to-square"></i> Ubah Data</button>
      </div>
    </div>
  </form>
</div>