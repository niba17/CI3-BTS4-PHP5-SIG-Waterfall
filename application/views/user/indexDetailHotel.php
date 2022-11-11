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
    })
    </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('noticeHapus')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil dihapus!',
    })
    </script>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Detail Hotel</h1>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <a class="btn btn-<?= $customColor; ?> btn-sm" href="<?= base_url($key . '/indexHotel' . $key); ?>">
        <i class="fa-solid fa-circle-left"></i>
        <span>Kembali</span>
    </a>

    <div class="table-responsive mt-3">
        <table class="table table-striped" style="font-size:13px;">
            <thead class="">
                <tr role="row">
                    <th>No</th>
                    <th>Nama Hotel</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Alamat</th>
                    <th>Nama Pemilik</th>
                    <th>No TDUP</th>
                    <th>Link</th>
                    <?php if ($this->session->userdata('username')) : ?>
                    <th style="width:100px;">Aksi</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php
        // $idKategori = "";
        $no = 0;
        // foreach ($semua["dataKategori"] as $s) {
        //   if ($kategori == $s->nama) {
        //     $idKategori = $s->id;
        //   }
        // }
        foreach ($semua["dataHotel"] as $rowHotel) : ?>
                <tr class="even">
                    <?php if ($id == $rowHotel->id) : ?>
                    <td><?= ++$no; ?></td>
                    <td><?= $rowHotel->nmusaha; ?></td>
                    <td><?= $rowHotel->namaKecamatan; ?></td>
                    <td><?= $rowHotel->namaKelurahan; ?></td>
                    <td><?= $rowHotel->alamat; ?></td>
                    <td><?= $rowHotel->nmpemilik; ?></td>
                    <td><?= $rowHotel->notdup; ?></td>
                    <td><a href="<?= 'http://'.$rowHotel->link; ?>"><?= $rowHotel->link; ?></a></td>
                    <?php if ($this->session->userdata('username')) : ?>
                    <td>
                        <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle"
                            href="<?= base_url('Admin/indexUbahDataHotel/') . $rowHotel->id ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="#"
                            onclick="hapus('<?= $rowHotel->id; ?>','tabelhotel','<?= $sidebarTitle; ?>')">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <?php endif; ?>
                        <?php endif; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
function hapus(id, tabel, $sidebarTitle) {
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
            window.location.replace(base_url + 'Admin/HapusDataFastam/' + id + '/' + tabel + '/' +
                $sidebarTitle);
        }
    })
}
</script>