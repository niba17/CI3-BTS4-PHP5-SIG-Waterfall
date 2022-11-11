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
        <h3 class="mb-0 text-gray-800">Daftar Toko Cinderamata Kupang</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <div class="row">
        <div class="col-lg-12">
            <?php if ($this->session->userdata('username')) : ?>
            <a type="button" class="btn btn-sm btn-<?= $customColor; ?> mb-3"
                href="<?= base_url('Admin/indexTambahDataTC') ?>">
                <i class="fa-solid fa-circle-plus"></i>
                <span>Tambah Toko Cinderamata</span>
            </a>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" style="font-size:13px;">
                    <thead>
                        <tr>
                            <th class="text-center bg-<?= $customColor; ?> text-white" colspan="4">
                                Tabel Toko Cinderamata
                            </th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Nama Toko</th>
                            <th>Link</th>
                            <th style="width:100px;">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
            foreach ($semua["dataTC"] as $rowTC) : ?>
                        <tr class="even">
                            <td><?= ++$no; ?></td>
                            <td><?= $rowTC->nmusaha; ?></td>
                            <td><a href="<?= 'http://'.$rowTC->link; ?>"><?= $rowTC->link; ?></a></td>
                            <td>
                                <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle"
                                    href="<?= base_url($key . '/indexDetailTC' . $key . '/') . $rowTC->id; ?>">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>