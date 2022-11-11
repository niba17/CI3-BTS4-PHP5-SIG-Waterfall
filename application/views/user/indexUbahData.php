<!-- Begin Page Content -->
<div class="container-fluid" id="isi">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Ubah Data <?= $detailObwisById->nama; ?></h3>
    </div>
    <!-- <?php print_r($detailObwisById); ?> -->
    <hr class="divider">

    <a class="btn btn-<?= $customColor; ?> btn-sm"
        href="<?= base_url('Admin/indexDetailObwisAdmin/' . $kategori . '/' . $sidebarTitle . '/' . $detailObwisById->id)  ?>">
        <i class="fa-solid fa-circle-left"></i>
        <span>Kembali</span>
    </a>

    <!-- Content Row -->
    <form class="user mt-3" enctype="multipart/form-data" id="inputFormTambah"
        action="<?= base_url('Admin/ubahData/') . $kategori . '/' . $sidebarTitle; ?>" method="post">
        <div class="row">
            <div class="col-lg-6">
                <input type="hidden" name="FUinputId" value="<?= $detailObwisById->id; ?>" method="post">
                <div class="form-group mb-3">
                    <label for="FUinputNama">Nama Objek Wisata</label>
                    <input type="text" class="form-control" name="FUinputNama" id="FUinputNama"
                        value="<?= $detailObwisById->nama; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group-prepend">
                        <label for="FUinputKategori">Kategori</label>
                    </div>
                    <select class="custom-select" name="FUinputKategori" id="FUinputKategori" required>
                        <?php foreach ($semua["dataKategori"] as $rowKat) : ?>
                        <?php if ($rowKat->nama == $detailObwisById->namaKategori) : ?>
                        <option value=<?= $detailObwisById->idkategori; ?> selected>
                            <?= $detailObwisById->namaKategori; ?></option>
                        <?php endif; ?>
                        <?php if ($rowKat->nama != $detailObwisById->namaKategori) : ?>
                        <option value=<?= $rowKat->id; ?>><?= $rowKat->nama; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group-prepend">
                        <label for="FUinputKecamatan">Kecamatan</label>
                    </div>
                    <select class="custom-select" name="FUinputKecamatan" id="FUinputKecamatan" required>
                        <!-- <option value="<?= $detailObwisById->idkecamatan; ?>" selected><?= $detailObwisById->namaKecamatan . ' (selected)'; ?></option> -->
                        <?php foreach ($semua["dataKecamatan"] as $rowKec) : ?>
                        <?php if ($rowKec->nama == $detailObwisById->namaKecamatan) : ?>
                        <option value=<?= $detailObwisById->idkecamatan; ?> selected>
                            <?= $detailObwisById->namaKecamatan; ?></option>
                        <?php endif; ?>
                        <?php if ($rowKec->nama != $detailObwisById->namaKecamatan) : ?>
                        <option value=<?= $rowKec->id; ?>><?= $rowKec->nama; ?></option>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group-prepend">
                        <label for="FUinputKelurahan">Kelurahan</label>
                    </div>
                    <select class="custom-select" name="FUinputKelurahan" id="FUinputKelurahan" required>
                        <option value="<?= $detailObwisById->idkelurahan; ?>" selected>
                            <?= $detailObwisById->namaKelurahan . ' (selected)'; ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="FUinputDes">Deskripsi</label>
                    <textarea type="text" class="form-control" name="FUinputDes"
                        id="FUinputDes"><?= $detailObwisById->deskripsi; ?></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group mb-3">
                    <label for="FUinputAlamat">Alamat</label>
                    <input type="text" class="form-control" id="FUinputAlamat" name="FUinputAlamat"
                        value="<?= $detailObwisById->alamat; ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="FUinputLat">Latitude</label>
                    <input type="text" class="form-control" name="FUinputLat" id="FUinputLat"
                        value="<?= $detailObwisById->lat; ?>" required>
                </div>
                <div class="form-group">
                    <label for="FUinputLng">Longitude</label>
                    <input type="text" class="form-control" name="FUinputLng" id="FUinputLng"
                        value="<?= $detailObwisById->lng; ?>" required>
                </div>
                <div class="form-group">
                    <label for="FUinputLink">Link</label>
                    <input type="text" class="form-control" name="FUinputLink" id="FUinputLink"
                        value="<?= $detailObwisById->link; ?>" required>
                </div>
                <div class="form-group">
                    <label for="FUinputGambar">Gambar : <?= $detailObwisById->gambar . ' (selected)'; ?></label>
                    <br>
                    <img class="mb-2" src="<?= base_url('assets/img/') . $detailObwisById->gambar; ?>" width="200"
                        height="110" alt="No Image">
                    <br>
                    <input type="file" name="FUinputGambar" id="FUinputGambar">
                    <input type="hidden" name="FUinputGambar" id="FUinputGambar"
                        value="<?= $detailObwisById->gambar; ?>">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="resetUbah">
            <i class="fa-solid fa-circle-minus"></i>
            <span>Reset</span>
        </button>
        <button type="submit" class="btn btn-<?= $customColor; ?>">
            <i class="fa-solid fa-circle-check"></i>
            <span>Simpan</span>
        </button>
    </form>
    <br>

    <script>
    $(document).ready(function() {

        //tombolResetFormTambah
        $('#resetUbah').click(function() {
            $('.custom-select').prop('selectedIndex', 0);
            $('#inputFormTambah').find("input[type=text], textarea").each(function() {
                $(this).val('');
                $('#FUinputKelurahan').val('');
            });
        })

        $("#FUinputKecamatan").change(function() {
            $idKecamatan = $(this).val();

            $.ajax({
                url: base_url + 'Admin/jsonGetKelurahanFU',
                method: 'post',
                data: {
                    FUidKecamatan: $idKecamatan
                },
                cache: false,
                dataType: 'json',
                success: function(data) {
                    $html = "";
                    for ($i = 0; $i < data.length; $i++) {
                        $html += '<option value="' + data[$i].id + '">' + data[$i].nama +
                            '</option>';
                    }
                    $("#FUinputKelurahan").html($html);

                }
            });
        });
    });


    <?php if ($this->session->flashdata('noticeGagalUbah')) : ?>
    Swal.fire({
        icon: 'error',
        title: 'Data Sudah Ada!',
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
    })
    <?php endif; ?>
    </script>
</div>