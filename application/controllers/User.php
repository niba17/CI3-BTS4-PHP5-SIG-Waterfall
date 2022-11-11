<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function indexBerandaUser($kategori = null)
  {
    $data['customColor'] = 'blueberryBlue';
    $data["sidebar"] = "berandaActive";
    $data["sidebarTitle"] = "indexBerandaUser";
    $data["semua"] = $this->M_obwis->semuaData();
    $data["jObwis"] = [];
    $p1 = 0;
    $p2 = 0;
    foreach ($data["semua"]["dataKategori"] as $dK) {
      $jObwis = 0;
      $data["jObwis"][$p1] = $jObwis;
      foreach ($data["semua"]["dataObwis"] as $dO) {
        if ($dK->id == $dO->idkategori) {
          $data["jObwis"][$p1] = ++$jObwis;
        }
        $p2++;
      }
      $p1++;
    }

    $arr = [];
    $i = 0;
    do {
      $duplikat = false;
      $rand[$i] = rand(0, count($data["semua"]['dataObwis']) - 1);
      // $temp[$i] = $rand;

      $arr = array_unique($rand);


      $i++;
    } while (count($arr) < 6);

    $i = 0;
    foreach ($arr as $key => $value) {
      $data['kupangDest'][$i] = $data['semua']['dataObwis'][$value];
      $i++;
    }

    $i = 0;
    foreach ($data["semua"]["dataKategori"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkategori) {
          $row->namaKategori = $d->nama;
        }
      }
      $i++;
    }

    $data["title"] = "SIG-User";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexBeranda', $data);
    $this->load->view('templates/footer');
  }

  // public function json()
  // {
  //   $idKecamatan = $this->input->post("id");
  //   print_r($idKecamatan);
  //   die;
  //   // echo (json_encode($this->M_obwis->semuaData()));
  // }

  public function indexProfilUser()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "profilActive";
    $data["semua"] = $this->M_obwis->semuaData();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexProfil', $data);
    $this->load->view('templates/footer');
  }

  public function indexObWisUser()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "obwisActive";
    $data["semua"] = $this->M_obwis->semuaData();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexObwis', $data);
    $this->load->view('templates/footer');
  }

  public function indexBPPUser()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "fasTamActive";
    $data["sidebarTitle"] = "indexBPPUser";
    $data["semua"] = $this->M_obwis->semuaData();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexBPP', $data);
    $this->load->view('templates/footer');
  }

  public function indexDetailBPPUser($id)
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "fasTamActive";
    $data["id"] = $id;
    $data["sidebarTitle"] = 'indexDetailBPPUser';
    $data["semua"] = $this->M_obwis->semuaData();

    $i = 0;
    foreach ($data["semua"]["dataKecamatan"] as $rowDKec) {
      foreach ($data["semua"]["dataBPP"] as $rowBPP) {
        if ($rowDKec->id == $rowBPP->idkecamatan) {
          $rowBPP->namaKecamatan = $rowDKec->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKelurahan"] as $rowDKel) {
      foreach ($data["semua"]["dataBPP"] as $rowBPP) {
        if ($rowDKel->id == $rowBPP->idkelurahan) {
          $rowBPP->namaKelurahan = $rowDKel->nama;
        }
      }
      $i++;
    }

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexDetailBPP', $data);
    $this->load->view('templates/footer');
  }

  public function indexTCUser()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "fasTamActive";
    $data["sidebarTitle"] = "indexTCUser";
    $data["semua"] = $this->M_obwis->semuaData();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexTC', $data);
    $this->load->view('templates/footer');
  }

  public function indexDetailTCUser($id)
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "fasTamActive";
    $data["id"] = $id;
    $data["sidebarTitle"] = 'indexDetailTCUser';
    $data["semua"] = $this->M_obwis->semuaData();

    $i = 0;
    foreach ($data["semua"]["dataKecamatan"] as $rowDKec) {
      foreach ($data["semua"]["dataTC"] as $rowTC) {
        if ($rowDKec->id == $rowTC->idkecamatan) {
          $rowTC->namaKecamatan = $rowDKec->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKelurahan"] as $rowDKel) {
      foreach ($data["semua"]["dataTC"] as $rowTC) {
        if ($rowDKel->id == $rowTC->idkelurahan) {
          $rowTC->namaKelurahan = $rowDKel->nama;
        }
      }
      $i++;
    }
    // echo $data['id'];
    // die;
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexDetailTC', $data);
    $this->load->view('templates/footer');
  }

  public function indexHotelUser()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "fasTamActive";
    $data["sidebarTitle"] = "indexHotelUser";
    $data["semua"] = $this->M_obwis->semuaData();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexHotel', $data);
    $this->load->view('templates/footer');
  }

  public function indexDetailHotelUser($id)
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "fasTamActive";
    $data["id"] = $id;
    $data["sidebarTitle"] = 'indexDetailHotelAdmin';
    $data["semua"] = $this->M_obwis->semuaData();

    $i = 0;
    foreach ($data["semua"]["dataKecamatan"] as $rowDKec) {
      foreach ($data["semua"]["dataHotel"] as $rowHotel) {
        if ($rowDKec->id == $rowHotel->idkecamatan) {
          $rowHotel->namaKecamatan = $rowDKec->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKelurahan"] as $rowDKel) {
      foreach ($data["semua"]["dataHotel"] as $rowHotel) {
        if ($rowDKel->id == $rowHotel->idkelurahan) {
          $rowHotel->namaKelurahan = $rowDKel->nama;
        }
      }
      $i++;
    }
    // echo $data['id'];
    // die;
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexDetailHotel', $data);
    $this->load->view('templates/footer');
  }

  public function indexPetaUser()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "petaActive";
    $data["sidebarTitle"] = "indexPetaUser";
    $data["semua"] = $this->M_obwis->semuaData();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexPeta', $data);
    $this->load->view('templates/footer');
  }

  public function indexDetailObwisUser($kategori, $sidebarTitle, $id = null)
  {
    $data['customColor'] = 'blueberryBlue';
    $data["sidebar"] = "obwisActive";
    $data["sidebarTitle"] =  $sidebarTitle;
    $data["kategori"] = urldecode($kategori);
    $data["id"] = $id;
    $data["semua"] = $this->M_obwis->semuaData();
    $i = 0;
    foreach ($data["semua"]["dataKategori"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkategori) {
          $row->namaKategori = $d->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKecamatan"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkecamatan) {
          $row->namaKecamatan = $d->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKelurahan"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkelurahan) {
          $row->namaKelurahan = $d->nama;
        }
      }
      $i++;
    }
    $data["title"] = "SIG-User";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexDetailObwis', $data);
    $this->load->view('templates/footer');
  }

  public function indexDetailObwisUser2($kategori)
  {
    $data['customColor'] = 'blueberryBlue';
    $data["sidebar"] = "obwisActive";
    $data["sidebarTitle"] = "indexDetailObwisUser2";
    $data["kategori"] = urldecode($kategori);
    $data["semua"] = $this->M_obwis->semuaData();
    $i = 0;
    foreach ($data["semua"]["dataKategori"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkategori) {
          $row->namaKategori = $d->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKecamatan"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkecamatan) {
          $row->namaKecamatan = $d->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKelurahan"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkelurahan) {
          $row->namaKelurahan = $d->nama;
        }
      }
      $i++;
    }
    $data["title"] = "SIG-User";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexDetailObwis2', $data);
    $this->load->view('templates/footer');
  }

  public function indexDetailObwisUser3($kategori, $id = null)
  {

    $data['customColor'] = 'blueberryBlue';
    $data["sidebar"] = "obwisActive";
    $data["sidebarTitle"] = 'indexDetailObwisUser3';
    $data["kategori"] = urldecode($kategori);
    $data["semua"] = $this->M_obwis->semuaData();
    $i = 0;
    foreach ($data["semua"]["dataKategori"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkategori) {
          $row->namaKategori = $d->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKecamatan"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkecamatan) {
          $row->namaKecamatan = $d->nama;
        }
      }
      $i++;
    }
    $i = 0;
    foreach ($data["semua"]["dataKelurahan"] as $d) {
      foreach ($data["semua"]["dataObwis"] as $row) {
        if ($d->id == $row->idkelurahan) {
          $row->namaKelurahan = $d->nama;
        }
      }
      $i++;
    }
    $data["title"] = "SIG-User";
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('user/indexDetailObwis3', $data);
    $this->load->view('templates/footer');
  }

  public function indexHubungiUser()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "hubungiActive";
    $data["semua"] = $this->M_obwis->semuaData();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexHubungi', $data);
    $this->load->view('templates/footer');
  }

  public function indexLogin()
  {
    $data['customColor'] = 'blueberryBlue';
    $data["title"] = "SIG-User";
    $data["sidebar"] = "loginActive";
    $data["semua"] = $this->M_obwis->semuaData();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar');
    $this->load->view('user/indexLogin', $data);
    $this->load->view('templates/footer');
  }
}
