<?php if ($this->session->flashdata('noticeTambah')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Kategori sudah ada!',
    // text: 'Something went wrong!',
    // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php endif; ?>
<div class="container-fluid" id="isi">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Index Tambah Kategori</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <form class="user" enctype="multipart/form-data" action="<?= base_url('Admin/tambahKategori'); ?>" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <label for="namaKat">Kategori</label>
                    <input type="text" class="form-control" name="namaKat" id="namaKat"
                        placeholder="Masukkan Nama Kategori..." required>
                </div>

                <div class="form-group">
                    <label for="FTinputTMarker">Marker</label>
                    <br>
                    <input type="file" name="FTinputTMarker" id="FTinputTMarker">
                </div>
                <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-circle-plus"></i>
                    Tambah Data</button>
            </div>
      
  </div>
    </form>
</div>