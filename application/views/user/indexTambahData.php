<?php if ($this->session->flashdata('noticeGagalTambah')) : ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Objek Wisata sudah ada!',
    // text: 'Something went wrong!',
    // footer: '<a href="">Why do I have this issue?</a>'
})
</script>
<?php endif; ?>
<div class="container-fluid" id="isi">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Tambah Data <?= $kategori ?></h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <a class="btn btn-<?= $customColor; ?> btn-sm" href="<?= base_url('Admin/' . $sidebarTitle . '/' . $kategori); ?>">
        <i class="fa-solid fa-circle-left"></i>
        <span>Kembali</span>
    </a>

    <form class="user mt-3" enctype="multipart/form-data" id="inputFormTambah"
        action="<?= base_url('Admin/tambahData/') . $kategori . '/' . $sidebarTitle; ?>" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group mb-3">
                    <label for="FTinputNama">Nama Objek Wisata</label>
                    <input type="text" class="form-control" name="FTinputNama" id="FTinputNama"
                        placeholder="Masukkan Nama..." required>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group-prepend">
                        <label for="FTinputKategori">Kategori</label>
                    </div>
                    <select class="custom-select" name="FTinputKategori" id="FTinputKategori" required>
                        <option selected>Pilih kategori...</option>
                        <?php foreach ($semua["dataKategori"] as $row) : ?>
                        <option value=<?= $row->id; ?>><?= $row->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
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
                    <label for="FTinputTGambar">Gambar</label>
                    <br>
                    <input type="file" name="FTinputTGambar" id="FTinputTGambar">
                </div>
                <div class="form-group mb-3">
                    <label for="FTinputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="FTinputAlamat" name="FTinputAlamat"
                        placeholder="Masukkan alamat..." required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">

                <div class="form-group mb-3">
                    <label for="FTinputLat">Latitude</label>
                    <input type="text" class="form-control" name="FTinputLat" id="FTinputLat"
                        placeholder="Masukkan latitude..." required>
                </div>
                <div class="form-group">
                    <label for="FTinputLng">Longitude</label>
                    <input type="text" class="form-control" name="FTinputLng" id="FTinputLng"
                        placeholder="Masukkan longitude..." required>
                </div>
                <div class="form-group">
                    <label for="FTinputDes">Deskripsi</label>
                    <textarea type="text" class="form-control" name="FTinputDes" id="FTinputDes"
                        placeholder="Masukkan deskripsi..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="FTinputLink">Link</label>
                    <input type="text" class="form-control" name="FTinputLink" id="FTinputLink"
                        placeholder="Masukkan link..." required>
                </div>
            </div>
        </div>
        <!-- <a class="btn btn-<?= $customColor; ?>" href="<?= base_url('Admin/indexDetailObwisAdmin/') . $kategori . '/' . $sidebarTitle . '/' . $id ?>"><i class="fa-solid fa-circle-left"></i> Kembali</a> -->
        <button class="btn btn-<?= $customColor; ?>" type="submit"><i class="fa-solid fa-circle-plus"></i> Tambah
            Data</button>
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