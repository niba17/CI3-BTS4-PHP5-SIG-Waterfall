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
		<h3 class="mb-3 text-gray-800">Detail Pengaturan</h1>
	</div>

	<!-- Divider -->
	<!-- <hr class="divider"> -->
	<!-- <a class="btn btn-<?= $customColor; ?>" href="<?= base_url($key . '/' . $sidebarTitle); ?>">
    <i class="fa-solid fa-circle-left"></i>
    <span>Kembali</span>
  </a> -->

	<hr class="divider mt-0">

	<div class="row">
		<div class="col-lg-6">
			<a type="button" class="btn btn-sm btn-<?= $customColor; ?> mb-3" href="<?= base_url('Admin/indexTambahKategori') ?>">
				<i class="fa-solid fa-circle-plus"></i>
				<span>Tambah Data Kategori</span>
			</a>
			<div class="table-responsive">
				<table class="table table-striped" id="tabelKat" style="font-size:13px;">
					<thead>
						<tr>
							<th class="text-center bg-pastelPurple text-white" colspan="3">
								Tabel Kategori
							</th>
						</tr>
						<tr>
							<th>No</th>
							<th>Kategori</th>
							<th style="width:100px;">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;
						foreach ($semua["dataKategori"] as $rowKat) : ?>
							<tr class="even">
								<td><?= ++$no; ?></td>
								<td><?= $rowKat->nama; ?></td>
								<td>
									<a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="<?= base_url('Admin/indexUbahKategori/') . $rowKat->id . '/' . $rowKat->nama . '/' . $rowKat->marker ?>">
										<i class="fa-solid fa-pen-to-square"></i>
									</a>
									<a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="#" onclick="hapus('<?= $rowKat->id ?>','tabelkategori','<?= $sidebarTitle ?>')">
										<i class="fa-solid fa-trash-can"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-lg-6">
			<a type="button" class="btn btn-sm btn-<?= $customColor; ?> mb-3" href="<?= base_url('Admin/indexTambahKecamatan') ?>">
				<i class="fa-solid fa-circle-plus"></i>
				<span>Tambah Data Kecamatan</span>
			</a>
			<div class="table-responsive">
				<table class="table table-striped" id="tabelKec" style="font-size:13px;">
					<thead>
						<tr>
							<th class="text-center bg-pastelPurple text-white" colspan="5">
								Tabel Kecamatan
							</th>
						</tr>
						<tr>
							<th>No</th>
							<th>Kecamatan</th>
							<th>GeoJson</th>
							<th>Warna Fill</th>
							<th style="width:100px;">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;
						foreach ($semua["dataKecamatan"] as $rowKec) : ?>
							<tr class="even">
								<td><?= ++$no; ?></td>
								<td><?= $rowKec->nama; ?></td>
								<td><?= $rowKec->geojson ?? 'NULL'; ?></td>
								<td>
									<div class="container" style="width:30px;height:40px;background-color:<?= $rowKec->warnaFill ?? 'white'; ?>;">
									</div>
								</td>
								<td>
									<a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="<?= base_url('Admin/indexUbahKecamatan/') . $rowKec->id . '/' . $rowKec->nama  . '/' . $rowKec->geojson . '/' . urlencode($rowKec->warnaFill) ?>">
										<i class="fa-solid fa-pen-to-square"></i>
									</a>
									<a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="#" onclick="hapus('<?= $rowKec->id ?>','tabelkecamatan','<?= $sidebarTitle ?>')">
										<i class="fa-solid fa-trash-can"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<hr class="divider">

	<div class="col-lg-12">
		<a type="button" class="btn btn-sm btn-<?= $customColor; ?> mb-3" href="<?= base_url('Admin/indexTambahKelurahan') ?>">
			<i class="fa-solid fa-circle-plus"></i>
			<span>Tambah Data Kelurahan</span>
		</a>
		<div class="table-responsive">
			<table class="table table-striped" id="tabelKel" style="font-size:13px;">
				<thead>
					<tr>
						<th class="text-center bg-pastelPurple text-white" colspan="4">
							Tabel Kelurahan Dalam Kecamatan
						</th>
					</tr>
					<tr>
						<th>No</th>
						<th>Kelurahan</th>
						<th>Kecamatan</th>
						<th style="width:100px;">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0;
					foreach ($semua["dataKelurahan"] as $rowKel) : ?>
						<tr class="even">
							<td><?= ++$no; ?></td>
							<td><?= $rowKel->nama; ?></td>
							<td><?= $rowKel->namaKecamatan; ?></td>
							<td>
								<a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="<?= base_url('Admin/indexUbahKelurahan/') . $rowKel->id . '/' . $rowKel->nama . '/' . $rowKel->idkecamatan . '/' . $rowKel->namaKecamatan; ?>">
									<i class="fa-solid fa-pen-to-square"></i>
								</a>
								<a class="btn btn-<?= $customColor; ?> btn-sm btn-circle" href="#" onclick="hapus('<?= $rowKel->id ?>','tabelkelurahan','<?= $sidebarTitle ?>')">
									<i class="fa-solid fa-trash-can"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#tabelKat').dataTable();
		$('#tabelKec').dataTable();
		$('#tabelKel').dataTable();
	});

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
				window.location.replace(base_url + 'Admin/HapusDataAturan/' + id + '/' + tabel + '/' +
					$sidebarTitle);
			}
		})
	}
</script>
