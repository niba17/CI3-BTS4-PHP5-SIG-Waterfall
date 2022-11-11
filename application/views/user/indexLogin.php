<!-- Page Heading -->
<div class="container-fluid" id="isi">
  <?php if ($this->session->flashdata('noticeGagalLogin')) : ?>
    <script>
      Swal.fire({
        icon: 'error',
        title: 'Username atau Password Tidak Sesuai!',
        // text: 'Something went wrong!',
        // footer: '<a href="">Why do I have this issue?</a>'
      })
    </script>
  <?php endif; ?>
  <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="mb-0 text-gray-800">Index Login Admin</h3>
  </div>

  <!-- Divider -->
  <hr class="divider">

  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Login Admin</h1>
        </div>
        <form class="user" action="<?= base_url("Autentifikasi/verifikasi"); ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control form-control-user text-center" name="username" placeholder="Masukkan Username..." required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-user text-center" name="password" placeholder="Masukkan Password..." required>
          </div>
          <button type="submit" class="btn btn-<?= $customColor; ?> btn-user btn-block">
            Login
          </button>
          <hr class="divider">
          <div class="text-center">
            <a href="#" onclick="lupaP()">Lupa Password?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function lupaP() {
    Swal.fire({
      icon: 'warning',
      // title: 'Gagal Login!',
      title: '<h1><b>Lupa Password?</b></h1><div class="alert alert-danger"><h3><b>Hubungi pihak developer untuk pemulihan password!</b></h3><h4>Whatsapp : 082237511717<br>Email : astingabriel99@gmail.com</h4></div>'
      // footer: '<a href="">Why do I have this issue?</a>'
    });
  }
</script>