<?php if ($this->session->flashdata('noticeGagalTambah')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Data Hotel sudah ada!',
    // text: 'Something went wrong!',
    // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php endif; ?>
<?php if ($this->session->userdata('username')) {
  $key = 'Admin';
} else {
  $key = 'User';
} ?>
<div class="container-fluid" id="isi">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Index Tambah Data Hotel</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <a class="btn btn-<?= $customColor; ?> btn-sm" href="<?= base_url($key . '/indexHotel' . $key); ?>">
        <i class="fa-solid fa-circle-left"></i>
        <span>Kembali</span>
    </a>

    <form class="user mt-3" enctype="multipart/form-data" id="inputFormTambah"
        action="<?= base_url('Admin/tambahDataHotel/') . $sidebarTitle; ?>" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <label for="FTinputNamaHotel">Nama Hotel</label>
                    <input type="text" class="form-control" name="FTinputNamaHotel" id="FTinputNamaHotel"
                        placeholder="Masukkan Nama Hotel..." required>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group-prepend">
                        <label for="FTinputKecamatan">Kecamatan</label>
                    </div>
                    <select class="custom-select" name="FTinputKecamatan" id="FTinputKecamatan" required>
                        <option selected>Pilih kecamatan...</option>
                        <?php foreach ($semua["dataKecamatan"] as $row) : ?>
                        <option value=<?= $row->id; ?>><?= $row->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group-prepend">
                        <label for="FTinputKelurahan">Kelurahan</label>
                    </div>
                    <select class="custom-select" name="FTinputKelurahan" id="FTinputKelurahan" required>
                        <option selected>Pilih kecamatan terlebih dahulu...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="FTinputLink">Link</label>
                    <input type="text" class="form-control" id="FTinputLink" name="FTinputLink"
                        placeholder="Masukkan alamat...">
                </div>
                <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-circle-plus"></i>
                    Tambah Data</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="FTinputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="FTinputAlamat" name="FTinputAlamat"
                        placeholder="Masukkan alamat..." required>
                </div>
                <div class="form-group">
                    <label for="FTinputNamaPemilik">Nama Pemilik</label>
                    <input type="text" class="form-control" id="FTinputNamaPemilik" name="FTinputNamaPemilik"
                        placeholder="Masukkan Nama Pemilik..." required>
                </div>
                <div class="form-group">
                    <label for="FTinputNoTDUP">No TDUP</label>
                    <input type="text" class="form-control" id="FTinputNoTDUP" name="FTinputNoTDUP"
                        placeholder="Masukkan No TDUP..." required>
                </div>
                <!-- <a class="btn btn-<?= $customColor; ?>" href="<?= base_url('Admin/indexDetailHotelAdmin/') . $id . '/' . $sidebarTitle ?>"><i class="fa-solid fa-circle-left"></i> Kembali</a> -->

    </form>
</div>
<script>
$(document).ready(function() {

    //tombolResetFormTambah
    $('#resetTambah').click(function() {
        $('.custom-select').prop('selectedIndex', 0);
        $('#inputFormTambah').find("input[type=text], textarea").each(function() {
            $(this).val('');
            $('#FTinputKelurahan').val('');
        });
    })

    $("#FTinputKecamatan").change(function() {
        $idKecamatan = $(this).val();

        $.ajax({
            url: base_url + 'Admin/jsonGetKelurahanFT',
            method: 'post',
            data: {
                FTidKecamatan: $idKecamatan
            },
            cache: false,
            dataType: 'json',
            success: function(data) {
                $html = "";
                for ($i = 0; $i < data.length; $i++) {
                    $html += '<option value="' + data[$i].id + '">' + data[$i].nama +
                        '</option>';
                }
                $("#FTinputKelurahan").html($html);
            }
        });
    });
});
</script>