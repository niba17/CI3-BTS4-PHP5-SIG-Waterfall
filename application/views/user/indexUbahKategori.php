<?php if ($this->session->flashdata('noticeUbah')) : ?>
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
        <h3 class="mb-0 text-gray-800">Index Ubah Kategori</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <form class="user" enctype="multipart/form-data" action="<?= base_url('Admin/ubahKategori'); ?>" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <label for="namaKat">Kategori</label>
                    <input type="hidden" name="idKat" value="<?= $idKat; ?>" method="post">
                    <input type="text" class="form-control" name="namaKat" id="namaKat" value="<?= $namaKat; ?>"
                        required>
                </div>
                <!-- <div class="form-group">
                    <label for="FUinputTMarker">Marker</label>
                    <br>
                    <input type="file" name="FUinputTMarker" id="FUinputTMarker">
                </div> -->

                <div class="form-group">
                    <label for="FUinputMarker">Marker : <?= $marker . ' (selected)'; ?></label>
                    <br>
                    <img class="mb-2" src="<?= base_url('assets/marker/') . $marker; ?>" width="200" height="110"
                        alt="No Image">
                    <br>
                    <input type="file" name="FUinputMarker" id="FUinputMarker">
                    <input type="hidden" name="FUinputMarker" id="FUinputMarker" value="<?= $marker; ?>">
                </div>

                <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-pen-to-square"></i>
                    Ubah Data</button>
            </div>



      
  </div>
        </ form>
</div>