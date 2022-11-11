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
        <h3 class="mb-0 text-gray-800">Daftar Biro Perjalanan Pariwisata Kupang</h3>
    </div>

    <!-- Divider -->
    <hr class="divider">
    <div class="row">
        <div class="col-lg-12">
            <?php if ($this->session->userdata('username')) : ?>
            <a type="button" class="btn btn-sm btn-<?= $customColor; ?> mb-3"
                href="<?= base_url('Admin/indexTambahDataBPP') ?>">
                <i class="fa-solid fa-circle-plus"></i>
                <span>Tambah BPP</span>
            </a>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" style="font-size:13px;">
                    <thead>
                        <tr>
                            <th class="text-center bg-<?= $customColor; ?> text-white" colspan="4">
                                Tabel Biro Perjalanan Pariwisata
                            </th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Nama BPP</th>
                            <th>Link</th>
                            <th style="width:100px;">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
            foreach ($semua["dataBPP"] as $rowBPP) : ?>
                        <tr class="even">
                            <td><?= ++$no; ?></td>
                            <td><?= $rowBPP->nmusaha; ?></td>
                            <td><a href="<?= 'http://'.$rowBPP->link; ?>"><?= $rowBPP->link; ?></a></td>
                            <td>
                                <a class="btn btn-<?= $customColor; ?> btn-sm btn-circle"
                                    href="<?= base_url($key . '/indexDetailBPP' . $key . '/') . $rowBPP->id; ?>">
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