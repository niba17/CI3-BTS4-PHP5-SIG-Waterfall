<body id="page-top" class>
    <?php if ($this->session->userdata('username')) {
		$key = 'Admin';
	} else {
		$key = 'User';
	} ?>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-<?= $customColor; ?> sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <?php if ($this->session->userdata('username')) : ?>
                    <i class="fa-solid fa-user-shield" style="font-size:30px;"></i>
                    <?php endif; ?>
                    <?php if (!$this->session->userdata('username')) : ?>
                    <i class="fa-solid fa-user" style="font-size: 30px;"></i>
                    <?php endif; ?>

                </div>
                <div class="sidebar-brand-text mx-3"><?= $key ?></div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item 
      <?php if ($sidebar == "berandaActive") {
				echo "active";
			}
			?>" id="beranda">
                <a class="nav-link" href="<?= base_url($key . '/indexBeranda' . $key) ?>">
                    <i class="fa-solid fa-gauge pr-1" style="font-size: 20px;"></i>
                    <span>Beranda</span>
                </a>
            </li>

            <li class="nav-item <?php if ($sidebar == "profilActive") {
														echo "active";
													}
													?>" id="profil">
                <a class="nav-link" href="<?= base_url($key . '/indexProfil' . $key) ?>">
                    <i class="fa-solid fa-clipboard-list pr-1" style="font-size: 27px;"></i>
                    <span>Profil</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item 
      <?php if ($sidebar == "obwisActive") {
				echo "active";
			}
			?>" id="obWis">
                <a class="nav-link collapsed" href="<?= base_url($key . '/indexObwis' . $key . '2') ?>"
                    data-toggle="collapse" data-target="#collapseTwoobWis" aria-expanded="true"
                    aria-controls="collapseTwoobWis">
                    <i class="fa-solid fa-mountain-sun pr-1" style="font-size: 17px;"></i>
                    <span>Objek Wisata</span>
                </a>
                <div id="collapseTwoobWis" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php foreach ($semua["dataKategori"] as $s) : ?>
                        <a class="collapse-item"
                            href="<?= base_url($key . '/indexDetailObwis' . $key . '2/') . $s->nama; ?>"><?= $s->nama ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if ($sidebar == "fasTamActive") {
														echo "active";
													}
													?>" id="fasTam">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwofasTam"
                    aria-expanded="true" aria-controls="collapseTwofasTam">
                    <i class="fa-solid fa-building pr-1" style="font-size: 28px;"></i>
                    <span>Fasilitas Tambahan</span>
                </a>
                <div id="collapseTwofasTam" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url($key . '/indexBPP' . $key) ?>">Biro Perjalanan
                            Pariwisata</a>
                        <a class="collapse-item" href="<?= base_url($key . '/IndexTC' . $key) ?>">Toko Cinderamata</a>
                        <a class="collapse-item" href="<?= base_url($key . '/IndexHotel' . $key) ?>">Hotel</a>
                    </div>
                </div>
            </li>

            <?php if (!$this->session->userdata('username')) : ?>
            <li class="nav-item <?php if ($sidebar == "petaActive") {
															echo "active";
														}
														?>" id="peta">
                <a class="nav-link" href="<?= base_url($key . '/indexPeta' . $key) ?>">
                    <i class="fa-solid fa-map-location-dot pr-1" style="font-size:20px;"></i>
                    <span>Peta</span></a>
            </li>
            <li class="nav-item <?php if ($sidebar == "hubungiActive") {
															echo "active";
														}
														?>" id="hubungi">
                <a class="nav-link" href="<?= base_url($key . '/indexHubungi' . $key) ?>">
                    <i class="fa-solid fa-phone-flip pr-1" style="font-size: 22px;"></i>
                    <span>Hubungi Kami</span></a>
            </li>
            <li class="nav-item <?php if ($sidebar == "loginActive") {
															echo "active";
														}
														?>" id="login">
                <a class="nav-link" href="<?= base_url('User/indexLogin') ?>">
                    <i class="fa-solid fa-right-to-bracket pr-1" style="font-size: 22px;"></i>
                    <span>Login</span></a>
            </li>
            <?php endif; ?>

            <?php if ($this->session->userdata('username')) : ?>
            <li class="nav-item <?php if ($sidebar == "pengaturanActive") {
															echo "active";
														}
														?>" id="pengaturan">
                <a class="nav-link" href="<?= base_url('Admin/indexPengaturan'); ?>">
                    <i class="fa-solid fa-gears" style="font-size: 22px;"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if ($this->session->userdata('username')) : ?>
            <li class="nav-item" id="logout">
                <a class="nav-link" href="#" onclick="logout()">
                    <i class="fa-solid fa-right-from-bracket pr-1" style="font-size: 21px;"></i>
                    <span>Logout</span>
                </a>
            </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <script>
        function logout() {
            Swal.fire({
                title: 'Yakin ingin Logout?',
                // text: "You won't be able to revert this!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace(base_url + 'Autentifikasi/logout');
                }

            })
        }
        </script>

        <!-- End Of Sidebar -->
        <!-- Content Wrapper -->