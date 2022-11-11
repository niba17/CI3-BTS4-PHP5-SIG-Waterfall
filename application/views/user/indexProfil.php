<!-- Begin Page Content -->
<div class="container-fluid" id="isi">
  <?php if ($this->session->userdata('username')) {
    $key = 'Admin';
  } else {
    $key = 'User';
  } ?>
  <!-- Page Heading -->
  <!-- <div class="d-sm-flex align-items-center justify-content-between">
    <h3 class="mb-0 text-gray-800">Profil Kota Kupang dan Dinas Pariwisata Kota Kupang</h3>
  </div> -->

  <!-- Divider -->
  <!-- <hr class="divider"> -->

  <style>
    .containerBox {
      position: relative;
      display: inline-block;
      width: 100%;
    }

    .text-box {
      margin-top: 50px;
      position: absolute;
      height: 100%;
      text-align: center;
      width: 100%;
    }

    .text-box:before {
      /* content: ''; */
      display: inline-block;
      height: 100%;
      vertical-align: top;
    }

    h4 {
      display: inline-block;
      font-size: 35px;
      /*or whatever you want*/
      /* color: #FFF; */
      -webkit-text-stroke: 1px black;
      /* font-family: arial; */
      color: #00eded;
    }

    img {
      display: block;
      max-width: 100%;
      height: auto;
      object-fit: fill;
      height: 450px;
      width: inherit;
    }

    .left {
      text-align: left;
    }

    .right {
      text-align: right;
    }

    .center {
      text-align: center;
    }

    .justify {
      text-align: justify;
    }
  </style>

  <div class="containerBox mb-3">
    <div class="text-box">
      <?php if ($key == 'User') : ?>
        <h4><b>Profil Kota Kupang dan Dinas Pariwisata Kota Kupang</b></h4>
      <?php endif; ?>
    </div>
    <img class="img-responsive" src="<?= base_url('assets/img/index/profil.jpeg') ?>" />
  </div>

  <!-- <img class="mb-3" src="<?= base_url('assets/img/index/profil.jpeg') ?>" alt="img_index.jpg" style="object-fit: fill; height:450px; width:inherit;"> -->

  <div class="row">
    <div class="col-lg-6 col-sm-12">
      <div class="card shadow">
        <div class="card-header py-3 bg-<?= $customColor; ?>">
          <h5 class="m-0 font-weight-bold text-white">Profil Kota Kupang</h5>
        </div>
        <div class="card-body justify">
          <!-- <h5 class="card-title"><b>Profil Kota Kupang</b></h5> -->
          <p class="card-text">Kota Kupang adalah sebuah kota dan sekaligus ibu kota provinsi Nusa Tenggara Timur, Indonesia. Kota Kupang adalah kota yang terbesar di Pulau Timor yang terletak di pesisir Teluk Kupang, bagian barat laut pulau Timor.</p>
          <p class="card-text"> Sebagai kota terbesar di provinsi Nusa Tenggara Timur, Kota Kupang dipenuhi oleh berbagai suku bangsa. Suku yang signifikan jumlahnya di "Kota Kupang" adalah suku Timor, Rote, Sabu, Tionghoa, Flores dan sebagian kecil pendatang dari Bugis dan Jawa. Luas wilayah Kota Kupang adalah 180,27 km² dengan jumlah penduduk sekitar 455.847 jiwa (2021). Kota ini terbagi menjadi 6 kecamatan dan 51 kelurahan. Kota Kupang yang sering dijuluki Kota Karang, memang merupakan daerah yang kering, dan pada musim kemarau ( ± April – November ).</p>
          <p class="card-text"> Kota sebagai pusat kegiatan dan peradaban selalu menjadi pusat pembangunan termasuk pembangunan sektor pariwisata. Kelengkapan fasilitas yang dimiliki menjadikan kota dapat dikembangkan menjadi suatu destinasi wisata. Pengembangan kota sebagai destinasi wisata atau menjadi kota wisata menjadi trend dalam beberapa tahun terakhir. Visi penataan ruang Kota Kupang adalah terwujudnya Kota Kupang sebagai Pusat Kegiatan Nasional (PKN) di NTT yang berorientasi Kota Pantai, Modern dan Berkelanjutan. Kota Pantai disini maksudnya Tata Ruang Kota Kupang yang mengoptimalkan potensi pantai dan laut yang merupakan halaman depan kota bagi kepentingan pembangunan ekonomi, sosial budaya dan lingkungan dengan tetap menjaga aspek kelestariannya.</p>
          <p class="card-text">Bagi pembangunan Kota Kupang khususnya pengembangan waterfront city, semakin menambah dan memperkaya ruang terbuka publik tepi pantai kota yang representatif dan menjadi destinasi wisata ikonik untuk mendukung pengembangan wisata di Kota Kupang.</p>
          <hr class="divider">
          <h5 class="card-title">Visi dan Misi Dinas Pariwisata Kota Kupang</h5>
          <p class="card-text">
            Adapun misi dari Dinas Pariwisata Kota Kupang adalah sebagai berikut : “Mengembangkan Perekonomian Kota Kupang Yang Berdaya Saing dengan Meningkatkan Peran Swasta (KUPANG MAKMUR)”.
          <ol>
            <li>Mengembangkan Sumber Daya Manusia (SDM) Yang Sehat, Cerdas, Berakhlak, Profesional dan Berdaya Saing (KUPANG SEHAT – CERDAS).</li>
            <li>Mengembangkan Perekonomian Kota Kupang Yang Berdaya Saing dengan Meningkatkan Peran Swasta (KUPANG MAKMUR).</li>
            <li>Meningkatkan Kesejahteraan Sosial dan Mengembangkan Budaya Kota Yang Tertib, Aman, Kreatif dan Berprestasi dalam Menunjang Kota Jasa (KUPANG BAGAYA-BERPRESTASI).</li>
            <li>Mempersiapkan Kota Kupang Menuju Metropolitan yang Berwawasan Lingkungan (KUPANG HIJAU).</li>
            <li>Meningkatkan Tatakelola Pemerintahan Yang Bebas KKN dan Transparansi Pengelolaan Keuangan (KUPANG JUJUR).</li>
            <li>Membangun Kota Kupang sebagai Rumah Besar Persaudaraan.</li>
          </ol>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-sm-12">
      <div class="card shadow">
        <div class="card-header py-3 bg-<?= $customColor; ?>">
          <h5 class="m-0 font-weight-bold text-white">Profil Dinas Pariwisata Kota Kupang</h5>
        </div>
        <div class="card-body justify">
          <!-- <h5 class="card-title"><b>Profil Dinas Pariwisata Kota Kupang</b></h5> -->
          <p class="card-text">Dinas Pariwisata Kota Kupang
            Kantor Dinas Kebuyadaan dan Pariwisata wilayah Kota Kupang, Nusa Tenggara Timur memiliki tugas untuk melaksanakan urusan pemerintahan Kota Kupang dalam bidang budaya dan pariwisata berdasarkan asas otonomi daerahnya. Melalui kantor Dinas pariwisata dan kebudayaan atau yang disingkan Disparbud ini, berbagai urusan pemerintah daerah terkait bidang pariwisata dan kebudayaan dilakukan.</p>
          <p class="card-text">Adapun tugas Disparbud adalah sebagai pelaksana urusan pemerintah daerah pada bidang pariwisata dan pelestarian budaya di wilayah kerjanya. Fungsi Disparbud ialah merumuskan kebijakan bidang pariwisata, kesenian, kebudayaan dan perfilman, penyelenggara pariwisata dan kebudayaan, pembinaan dan pembimbingan pada pelaku pariwisata dan budaya di wilayah kerjanya, koordinator UPTD, hingga pelaporan dan koordinasi urusan pariwisata dan budaya.</p>
          <p class="card-text">Terkait dengan tugas dan fungsinya, Disparbud berwenang untuk mengeluarkan izin-izin bidang pariwisata meliputi Izin Usaha Pariwisata untuk travel agent dan lainnya, mengurus Izin Tetap Usaha Pariwisata (ITUP), Tanda Daftar Usaha Pariwisata atau TDUP meliputi surat Tanda Daftar Usaha Jasa Perjalanan Wisata, Tanda Daftar Usaha Penyedia Akomodasi, Tanda daftar Usaha Kawasan Pariwisata, dan lainnya. Selain izin-izin bidang pariwisata, Disparbud juga memiliki wewenang dalam mengeluarkan izin terkait bidang kebudayaan seperti kegiatan kebudayaan, alih fungsi bagunan bersejarah dan lainnya. Untuk informasi lainnya Anda dapat berkunjung langsung pada kantor Disparbud terdekat, menghubungi kontak telepon, atau mengakses website resmi Disparbud untuk informasi umum.</p>
          <hr class="divider">
          <h5 class="card-title">Rumusan Visi dan Misi Dinas Pariwisata Kota Kupang</h5>
          <p class="card-text">Adapun visi sebagai berikut : “TERWUJUDNYA KOTA KUPANG YANG LAYAK HUNI, CERDAS, MANDIRI DAN SEJAHTERA DENGAN TATA KELOLA BEBAS KKN” Visi ini memiliki 4 kunci pokok yakni : Kota Layak Huni, Kota Cerdas, Kota Mandiri dan Sejahtera, dan Kota Bebas KKN.
          <ol>
            <li>Kota Layak Huni, mengandung arti Ketersediaan Sarana dan prasarana perkotaan seperti air minum yang menjangkau seluruh penduduk, listrik yang cukup bagi kebutuhan penduduk dan tersedianya transportasi yang aman bagi warga.</li>
            <li>Kota Cerdas, mengandung arti Membantu waga kota dengan mengelola sumber daya yang ada dengan efisien dan memberi informasi yang tepat kepada masyarakat, atau mengantisivasi kejadian yang tak terduka.</li>
            <li>Kota Mandiri dan Sejahtera, mengandung arti ekonomi rakyat berkembang dalam kemampuan daerah dan terwujudnya kesejahteraan dalam masyarakat.</li>
            <li>Kota Bebas KKN, mengandung arti berprinsip pemerintahan yang baik/ Good Governance and Clean Goverment.</li>
          </ol>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- \.container-fluid -->