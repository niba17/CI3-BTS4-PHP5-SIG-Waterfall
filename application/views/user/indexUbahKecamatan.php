<?php if ($this->session->flashdata('noticeUbah')) : ?>
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
        <h3 class="mb-0 text-gray-800">Index Ubah Kecamatan</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <form class="user" enctype="multipart/form-data" action="<?= base_url('Admin/ubahKecamatan'); ?>" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="namaKec">Kecamatan</label>
                    <input type="hidden" name="idKec" value="<?= $idKec; ?>" method="post">
                    <input type="text" class="form-control" name="namaKec" id="namaKec"
                        value="<?= $namaKec ?? 'NULL'; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="geojson">GeoJson : <?= $geojson . ' (selected)'; ?></label>
                    <br>
                    <input type="file" name="geojson" id="geojson">
                    <input type="hidden" name="geojson" id="geojson" value="<?= $geojson ?? 'NULL'; ?>">
                </div>
                <div class="form-group">
                    <label for="warnaFill">Warna Fill</label>
                    <input type="hidden" name="warnaFill" value="<?= $warnaFill; ?>" method="post">
                    <input type="text" class="form-control" name="warnaFill" id="warnaFill"
                        value="<?= $warnaFill ?? 'NULL'; ?>" required>
                    <div class="container-start mt-3"
                        style="width:100px;height:100px;background-color:<?= $warnaFill ?? 'white'; ?>;" id="box">
                    </div>
                </div>
                <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-pen-to-square"></i>
                    Ubah Data</button>
            </div>



        </div>
    </form>
</div>
<script>
$('#warnaFill').on('keyup', function() {

    var color = $(this).val()
    console.log(color)
    $('#box').css('background-color', color)



















})
</script>