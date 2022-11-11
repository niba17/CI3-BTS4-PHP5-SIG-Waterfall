<?php if ($this->session->flashdata('noticeTambah')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Kecamatan sudah ada!',
    // text: 'Something went wrong!',
    // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php endif; ?>
<div class="container-fluid" id="isi">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Index Tambah Kecamatan</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <form class="user" enctype="multipart/form-data" action="<?= base_url('Admin/tambahKecamatan'); ?>" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="namaKec">Kecamatan</label>
                    <input type="text" class="form-control" name="namaKec" id="namaKec"
                        placeholder="Masukkan Nama Kecamatan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="geojson">GeoJson</label>
                    <br>
                    <input type="file" name="geojson" id="geojson" required>
                </div>
                <div class="form-group">
                    <label for="warnaFill">Warna Fill</label>
                    <input type="text" class="form-control" name="warnaFill" id="warnaFill"
                        placeholder="Masukkan Warna Fill GeoJson" required>
                </div>
                <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-circle-plus"></i>
                    Tambah Data
                </button>
            </div>

        </div>







        </ form>
</div>