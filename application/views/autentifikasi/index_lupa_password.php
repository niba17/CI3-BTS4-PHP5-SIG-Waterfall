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
                    <h1 class="h4 text-gray-900 mb-4">Lupa Password</h1>
                    <?= $this->session->flashdata('message');
                    if (isset($_SESSION['message'])) {
                      unset($_SESSION['message']);
                    } ?>
                  </div>
                  <form class="user" method="post" action="<?= base_url('Autentifikasi/lupa_password'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                      <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Reset Password
                    </button>
                  </form>
                  <a class="mt-3 nav-link text-center" href="<?= base_url('Autentifikasi/index'); ?>">
                    <span>Kembali</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>