<div class="container-fluid" id="isi">
    <?php if ($this->session->userdata('username')) {
    $key = 'Admin';
  } else {
    $key = 'User';
  } ?>
    <?php if ($this->session->flashdata('noticeTambah')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil ditambahkan!',
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('noticeUbah')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil diubah!',
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php endif; ?>
    <?php if ($this->session->flashdata('noticeHapus')) : ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil dihapus!',
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php endif; ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
        <h3 class="mb-0 text-gray-800">Detail Toko Cinderamata</h1>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <a class="btn btn-<?= $customColor; ?> btn-sm" href="<?= base_url($key . '/indexTC' . $key); ?>">
        <i class="fa-solid fa-circle-left"></i>
        <span>Kembali</span>
    </a>

    <div class="table-responsive mt-3">
        <table class="table table-striped" style="font-size:13px;">
            <thead class="">
                <tr role="row">
                    <th>No</th>
                    <th>Nama BPP</th>
                    <th>Kecamatan</th>
                    <th>Kelurahan</th>
                    <th>Alamat</th>
                    <th>Nama Pemilik</th>
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
        foreach ($semua["dataTC"] as $rowTC) : ?>
                <tr class="even">
                    <?php if ($id == $rowTC->id) : ?>
                    <td><?= ++$no; ?></td>
                    <td><?= $rowTC->nmusaha; ?></td>
                    <td><?= $rowTC->namaKecamatan; ?></td>
                    <td><?= $rowTC->namaKelurahan; ?></td>
                    <td><?= $rowTC->alamat; ?></td>
                    <td><?= $rowTC->nmpemilik; ?></td>
                    <td><a href="<?= 'http://'.$rowTC->link; ?>"><?= $rowTC->link; ?></a></td>
                    <?php if ($this->session->userdata('username')) : ?>
                    <td>
                        <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle"
                            href="<?= base_url('Admin/indexUbahDataTC/') . $rowTC->id ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="#"
                            onclick="hapus('<?= $rowTC->id; ?>','tabeltokocinderamata','<?= $sidebarTitle; ?>')">
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