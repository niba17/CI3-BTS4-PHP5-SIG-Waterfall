<body class="login-bg">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900">Ubah Password untuk </h1>
                    <h5 class="mb-4"><?= $this->session->userdata('reset_email'); ?></h5>
                    <?= $this->session->flashdata('message');
                    if (isset($_SESSION['message'])) {
                      unset($_SESSION['message']);
                    } ?>
                  </div>
                  <form class="user" method="post" action="<?= base_url('Autentifikasi/ubah_password'); ?>">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password baru">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password2" class="form-control form-control-user" id="password2" name="password2" placeholder="Konfirmasi Password baru">
                      <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Ubah Password
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>