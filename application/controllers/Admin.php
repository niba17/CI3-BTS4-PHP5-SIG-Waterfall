<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function indexBerandaAdmin($kategori = null)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "berandaActive";
			$data["sidebarTitle"] = "indexBerandaAdmin";
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

			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexBeranda', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}
	public function jsonGetKelurahanFT()
	{
		$kelurahanById = $this->M_obwis->getDataKelurahan($this->input->post("FTidKecamatan"));
		echo json_encode($kelurahanById);
	}

	public function jsonGetKelurahanFU()
	{
		$kelurahanById = $this->M_obwis->getDataKelurahan($this->input->post("FUidKecamatan"));
		echo json_encode($kelurahanById);
	}

	public function indexProfilAdmin()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "profilActive";
			$data["title"] = "SIG-Admin";
			$data["semua"] = $this->M_obwis->semuaData();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexProfil');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexObWisAdmin()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "obwisActive";
			$data["title"] = "SIG-Admin";
			$data["semua"] = $this->M_obwis->semuaData();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexObwis');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexBPPAdmin()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["title"] = "SIG-Admin";
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = "indexBPPAdmin";
			$data["semua"] = $this->M_obwis->semuaData();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('user/indexBPP', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexDetailBPPAdmin($id)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["title"] = "SIG-Admin";
			$data["sidebar"] = "fasTamActive";
			$data["id"] = $id;
			$data["sidebarTitle"] = 'indexDetailBPPAdmin';
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
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexTCAdmin()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["title"] = "SIG-Admin";
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = "indexTCAdmin";
			$data["semua"] = $this->M_obwis->semuaData();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTC', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexDetailTCAdmin($id)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["title"] = "SIG-Admin";
			$data["sidebar"] = "fasTamActive";
			$data["id"] = $id;
			$data["sidebarTitle"] = 'indexDetailTCAdmin';
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
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('user/indexDetailTC', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexHotelAdmin()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["title"] = "SIG-Admin";
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = "indexHotelAdmin";
			$data["semua"] = $this->M_obwis->semuaData();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('user/indexHotel', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexDetailHotelAdmin($id)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["title"] = "SIG-Admin";
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
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar');
			$this->load->view('user/indexDetailHotel', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexPetaAdmin()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "petaActive";
			$data["sidebarTitle"] = "indexPetaAdmin";
			$data["title"] = "SIG-Admin";
			$data["semua"] = $this->M_obwis->semuaData();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexPeta');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexHubungiAdmin()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "hubungiActive";
			$data["title"] = "SIG-Admin";
			$data["semua"] = $this->M_obwis->semuaData();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexHubungi');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexDetailObwisAdmin($kategori, $sidebarTitle, $id = null)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "obwisActive";
			$data["sidebarTitle"] = $sidebarTitle;
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
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexDetailObwis', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexDetailObwisAdmin2($kategori)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "obwisActive";
			$data["sidebarTitle"] = 'indexDetailObwisAdmin2';
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
			$this->load->view('user/indexDetailObwis2', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexDetailObwisAdmin3($kategori, $id = null)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "obwisActive";
			$data["sidebarTitle"] = 'indexDetailObwisAdmin3';
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
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function login()
	{
		$data['customColor'] = 'pastelPurple';
		$data["sidebar"] = "loginActive";
		$data["title"] = "SIG-Admin";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('user/indexLogin');
		$this->load->view('templates/footer');
	}

	public function indexTambahData($kategori, $sidebarTitle, $id = null)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["kategori"] = urldecode($kategori);
			$data["sidebar"] = "berandaActive";
			$data["id"] = $id;
			$data["sidebarTitle"] = $sidebarTitle;
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTambahData');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexPengaturan()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "pengaturanActive";
			$data["sidebarTitle"] = 'indexPengaturan';
			$data["semua"] = $this->M_obwis->semuaData();

			$i = 0;
			foreach ($data["semua"]["dataKecamatan"] as $rowKec) {
				foreach ($data["semua"]["dataKelurahan"] as $rowKel) {
					if ($rowKec->id == $rowKel->idkecamatan) {
						$rowKel->namaKecamatan = $rowKec->nama;
					}
				}
				$i++;
			}

			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexPengaturan', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexTambahKategori()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "pengaturanActive";
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTambahKategori');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahKategori($idKat, $namaKat, $marker = null)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "pengaturanActive";
			$data["idKat"] = $idKat;
			$data["namaKat"] = urldecode($namaKat);
			$data["marker"] = urldecode($marker);
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexUbahKategori');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function tambahKategori()
	{
		// $data = [
		//   'nama' => $this->input->post('namaKat')
		// ];
		$marker = $_FILES['FTinputTMarker'];
		if ($marker != '') {
			$config['upload_path'] = './assets/marker';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);
			$this->upload->do_upload('FTinputTMarker');
			$marker = $this->upload->data('file_name');
		}

		$data = [
			'nama' => $this->input->post('namaKat'),
			'marker' => $marker
		];

		$duplikat = $this->M_obwis->antiDuplikasi($data, 'tabelkategori');

		if ($duplikat == false) {
			$this->M_obwis->tambahDataAturan($data, 'tabelkategori', 'indexPengaturan');
		} else {
			$this->session->set_flashdata('noticeTambah', 'Gagal!');
			redirect(base_url('Admin/indexTambahKategori'));
		}
	}

	public function ubahKategori()
	{
		$id =  $this->input->post('idKat');

		$marker = $_FILES['FUinputMarker'];
		// var_dump($marker);
		// die;

		if ($marker['error'] != 4) {
			$config['upload_path'] = './assets/marker/';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);
			$this->upload->do_upload('FUinputMarker');
			$marker = $this->upload->data('file_name');
			// var_dump($this->upload->do_upload('FUinputMarker'));
			// die;
		} else if ($marker['error'] == 4) {
			$marker = $this->input->post('FUinputMarker');
		}

		// var_dump($marker);
		// die;

		$data = [
			'id' => $id,
			'nama' => $this->input->post('namaKat'),
			'marker' => $marker
		];

		$duplikat = $this->M_obwis->antiDuplikasiUbahData($data, 'tabelkategori');

		if ($duplikat == false) {
			$this->M_obwis->ubahDataAturan($data, 'tabelKategori', 'indexPengaturan', $id);
		} else {
			$this->session->set_flashdata('noticeUbah', 'Gagal!');
			redirect(base_url('Admin/indexUbahKategori/' . $id . '/' . $data['nama']));
		}
	}

	public function indexTambahKecamatan()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "pengaturanActive";
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTambahKecamatan');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahKecamatan($idKec, $namaKec, $geojson = null, $warnaFill = null)
	{
		if ($this->session->userdata('username')) {

			// var_dump($warnaFill);
			// die;
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "pengaturanActive";
			$data["idKec"] = $idKec;
			$data["namaKec"] = urldecode($namaKec);
			$data["geojson"] = urldecode($geojson);
			$data["warnaFill"] = urldecode($warnaFill);
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexUbahKecamatan');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function tambahKecamatan()
	{
		$geojson = $_FILES['geojson'];
		// var_dump($geojson);
		// die;
		if ($geojson != '') {
			$config['upload_path'] = './assets/geojson/kecamatan/';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);
			$this->upload->do_upload('geojson');
			$geojson = $this->upload->data('file_name');
		}
		$data = [
			'nama' => $this->input->post('namaKec'),
			'geojson' => $geojson,
			'warnaFill' => $this->input->post('warnaFill')
		];

		$duplikat = $this->M_obwis->antiDuplikasi($data, 'tabelkecamatan');

		if ($duplikat == false) {
			$this->M_obwis->tambahDataAturan($data, 'tabelkecamatan', 'indexPengaturan');
		} else {
			$this->session->set_flashdata('noticeTambah', 'Gagal!');
			redirect(base_url('Admin/indexTambahKecamatan'));
		}
	}

	public function ubahKecamatan()
	{
		$id = $this->input->post('idKec');
		$geojson = $_FILES['geojson'];

		if ($geojson['error'] != 4) {
			$config['upload_path'] = './assets/geojson/kecamatan';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);
			$this->upload->do_upload('geojson');
			$geojson = $this->upload->data('file_name');
		} else if ($geojson['error'] == 4) {
			$geojson = $this->input->post('geojson');
		}

		$data = [
			'id' => $id,
			'nama' =>  $this->input->post('namaKec'),
			'geojson' =>  $geojson,
			'warnaFill' =>   $this->input->post('warnaFill'),
		];

		$duplikat = $this->M_obwis->antiDuplikasiUbahData($data, 'tabelkecamatan');

		if ($duplikat == false) {
			$this->M_obwis->ubahDataAturan($data, 'tabelKecamatan', 'indexPengaturan', $id);
		} else {
			$this->session->set_flashdata('noticeUbah', 'Gagal!');
			redirect(base_url('Admin/indexUbahKecamatan/' . $id . '/' . $data['nama']));
		}
	}

	public function indexTambahKelurahan()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "pengaturanActive";
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTambahKelurahan');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahKelurahan($idKel, $namaKel, $idKec, $namaKec)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "pengaturanActive";
			$data["idKel"] = $idKel;
			$data["namaKel"] = urldecode($namaKel);
			$data["idKec"] = $idKec;
			$data["namaKec"] = urldecode($namaKec);
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexUbahKelurahan');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function tambahKelurahan()
	{
		$data = [
			'idkecamatan' => $this->input->post('idKec'),
			'nama' => $this->input->post('namaKel')
		];
		$duplikat = $this->M_obwis->antiDuplikasi($data, 'tabelkelurahan');

		if ($duplikat == false) {
			$this->M_obwis->tambahDataAturan($data, 'tabelkelurahan', 'indexPengaturan');
		} else {
			$this->session->set_flashdata('noticeGagalTambah', 'Gagal!');
			redirect(base_url('Admin/indexTambahKelurahan'));
		}
	}

	public function ubahKelurahan()
	{
		$id = $this->input->post('idKel');
		$data = [
			'id' => $id,
			'idkecamatan' => $this->input->post('idKec'),
			'nama' => $this->input->post('namaKel')
		];

		$duplikat = $this->M_obwis->antiDuplikasiUbahData($data, 'tabelkelurahan');

		if ($duplikat == false) {
			$this->M_obwis->ubahDataAturan($data, 'tabelkelurahan', 'indexPengaturan', $id);
		} else {
			$this->session->set_flashdata('noticeGagalUbah', 'Gagal!');
			redirect(base_url('Admin/indexUbahKelurahan/' . $id . '/' . $data['nama'] . '/' . $data['idkecamatan'] . '/' . $this->input->post('namaKec')));
		}

		// $this->M_obwis->ubahDataAturan($data, 'tabelKelurahan', 'indexPengaturan', $id);
	}

	public function indexTambahDataBPP()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = 'indexTambahDataBPP';
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTambahDataBPP');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexTambahDataTC()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = 'indexTambahDataTC';
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTambahDataTC');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexTambahDataHotel()
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = 'indexTambahDataTC';
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexTambahDataHotel');
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function tambahData($kategori, $sidebarTitle)
	{
		$data['customColor'] = 'pastelPurple';
		$data["sidebar"] = "berandaActive";
		$data["sidebarTitle"] = $sidebarTitle;
		$gambar = $_FILES['FTinputTGambar'];
		// var_dump($gambar);
		// die;
		if ($gambar != '') {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);
			$this->upload->do_upload('FTinputTGambar');
			$gambar = $this->upload->data('file_name');
		}
		$data = [
			'idkategori' => $this->input->post('FTinputKategori'),
			'idkecamatan' => $this->input->post('FTinputKecamatan'),
			'idkelurahan' => $this->input->post('FTinputKelurahan'),
			'nama' => $this->input->post('FTinputNama'),
			'alamat' => $this->input->post('FTinputAlamat'),
			'lat' => $this->input->post('FTinputLat'),
			'lng' => $this->input->post('FTinputLng'),
			'deskripsi' => $this->input->post('FTinputDes'),
			'gambar' => $gambar
		];
		$duplikat = $this->M_obwis->antiDuplikasi($data, 'tabelobwis');

		if ($duplikat == false) {
			$this->M_obwis->tambahData($data, urldecode($kategori), $sidebarTitle);
		} else {
			$this->session->set_flashdata('noticeGagalTambah', 'Gagal!');
			redirect(base_url('Admin/indexTambahData/' . $kategori . '/' . $sidebarTitle));
		}
	}

	public function tambahDataBPP()
	{
		$data['customColor'] = 'pastelPurple';
		$data["sidebar"] = "fastamActive";
		$data["sidebarTitle"] = 'indexTambahDataTC';

		$data = [
			'nmusaha' => $this->input->post('FTinputNamaBPP'),
			'idkecamatan' => $this->input->post('FTinputKecamatan'),
			'idkelurahan' => $this->input->post('FTinputKelurahan'),
			'alamat' => $this->input->post('FTinputAlamat'),
			'nmpemilik' => $this->input->post('FTinputNamaPemilik'),
			'notdup' => $this->input->post('FTinputNoTDUP'),
			'link' => $this->input->post('FTinputLink')
		];
		$duplikat = $this->M_obwis->antiDuplikasi($data, 'tabelbpp');

		if ($duplikat == false) {
			$this->M_obwis->tambahDataBPP($data);
		} else {
			$this->session->set_flashdata('noticeGagalTambah', 'Gagal!');
			redirect(base_url('Admin/indexTambahDataBPP'));
		}
	}

	public function tambahDataTC()
	{
		$data['customColor'] = 'pastelPurple';
		$data["sidebar"] = "fastamActive";

		$data = [
			'nmusaha' => $this->input->post('FTinputNamaTC'),
			'idkecamatan' => $this->input->post('FTinputKecamatan'),
			'idkelurahan' => $this->input->post('FTinputKelurahan'),
			'alamat' => $this->input->post('FTinputAlamat'),
			'nmpemilik' => $this->input->post('FTinputNamaPemilik'),
			'link' => $this->input->post('FTinputLink')
		];
		$duplikat = $this->M_obwis->antiDuplikasi($data, 'tabeltokocinderamata');

		if ($duplikat == false) {
			$this->M_obwis->tambahDataTC($data);
		} else {
			$this->session->set_flashdata('noticeGagalTambah', 'Gagal!');
			redirect(base_url('Admin/indexTambahDataBPP'));
		}
	}

	public function tambahDataHotel()
	{
		$data['customColor'] = 'pastelPurple';
		$data["sidebar"] = "fastamActive";

		$data = [
			'nmusaha' => $this->input->post('FTinputNamaHotel'),
			'idkecamatan' => $this->input->post('FTinputKecamatan'),
			'idkelurahan' => $this->input->post('FTinputKelurahan'),
			'alamat' => $this->input->post('FTinputAlamat'),
			'nmpemilik' => $this->input->post('FTinputNamaPemilik'),
			'notdup' => $this->input->post('FTinputNoTDUP'),
			'link' => $this->input->post('FTinputLink')
		];
		$duplikat = $this->M_obwis->antiDuplikasi($data, 'tabelhotel');

		if ($duplikat == false) {
			$this->M_obwis->tambahDataHotel($data);
		} else {
			$this->session->set_flashdata('noticeGagalTambah', 'Gagal!');
			redirect(base_url('Admin/indexTambahDataHotel'));
		}
	}

	public function indexUbahData($id, $kategori, $sidebarTitle)
	{
		if ($this->session->userdata('username')) {
			$data["sidebar"] = "berandaActive";
			$data['customColor'] = 'pastelPurple';
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
			$i = 0;
			$data['detailObwisById'] = [];
			foreach ($data["semua"]["dataObwis"] as $d) {
				if ($id == $d->id) {
					$data['detailObwisById'] = $d;
				}
			}
			$data["kategori"] = urldecode($kategori);
			$data["sidebar"] = "berandaActive";
			$data["sidebarTitle"] = $sidebarTitle;
			$data["semua"] = $this->M_obwis->semuaData();
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexUbahData', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahDataBPP($id)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["semua"] = $this->M_obwis->semuaData();

			$i = 0;
			foreach ($data["semua"]["dataKecamatan"] as $d) {
				foreach ($data["semua"]["dataBPP"] as $row) {
					if ($d->id == $row->idkecamatan) {
						$row->namaKecamatan = $d->nama;
					}
				}
				$i++;
			}
			$i = 0;
			foreach ($data["semua"]["dataKelurahan"] as $d) {
				foreach ($data["semua"]["dataBPP"] as $row) {
					if ($d->id == $row->idkelurahan) {
						$row->namaKelurahan = $d->nama;
					}
				}
				$i++;
			}
			$i = 0;
			$data['detailBPPById'] = [];
			foreach ($data["semua"]["dataBPP"] as $d) {
				if ($id == $d->id) {
					$data['detailBPPById'] = $d;
				}
			}
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = 'indexUbahDataBPP';
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexUbahDataBPP', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahDataTC($id)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["semua"] = $this->M_obwis->semuaData();

			$i = 0;
			foreach ($data["semua"]["dataKecamatan"] as $d) {
				foreach ($data["semua"]["dataTC"] as $row) {
					if ($d->id == $row->idkecamatan) {
						$row->namaKecamatan = $d->nama;
					}
				}
				$i++;
			}
			$i = 0;
			foreach ($data["semua"]["dataKelurahan"] as $d) {
				foreach ($data["semua"]["dataTC"] as $row) {
					if ($d->id == $row->idkelurahan) {
						$row->namaKelurahan = $d->nama;
					}
				}
				$i++;
			}
			$i = 0;
			$data['detailTCById'] = [];
			foreach ($data["semua"]["dataTC"] as $d) {
				if ($id == $d->id) {
					$data['detailTCById'] = $d;
				}
			}
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = 'indexUbahDataTC';
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexUbahDataTC', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function indexUbahDataHotel($id)
	{
		if ($this->session->userdata('username')) {
			$data['customColor'] = 'pastelPurple';
			$data["semua"] = $this->M_obwis->semuaData();

			$i = 0;
			foreach ($data["semua"]["dataKecamatan"] as $d) {
				foreach ($data["semua"]["dataHotel"] as $row) {
					if ($d->id == $row->idkecamatan) {
						$row->namaKecamatan = $d->nama;
					}
				}
				$i++;
			}
			$i = 0;
			foreach ($data["semua"]["dataKelurahan"] as $d) {
				foreach ($data["semua"]["dataHotel"] as $row) {
					if ($d->id == $row->idkelurahan) {
						$row->namaKelurahan = $d->nama;
					}
				}
				$i++;
			}
			$i = 0;
			$data['detailHotelById'] = [];
			foreach ($data["semua"]["dataHotel"] as $d) {
				if ($id == $d->id) {
					$data['detailHotelById'] = $d;
				}
			}
			$data["sidebar"] = "fasTamActive";
			$data["sidebarTitle"] = 'indexUbahDataHotel';
			$data["title"] = "SIG-Admin";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('templates/topbar');
			$this->load->view('user/indexUbahDataHotel', $data);
			$this->load->view('templates/footer');
		} else {
			redirect(base_url('User/indexBerandaUser'));
		}
	}

	public function ubahData($kategori, $sidebarTitle)
	{
		$data["sidebar"] = "berandaActive";
		$gambar = $_FILES['FUinputGambar'];

		if ($gambar['error'] != 4) {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = '*';

			$this->load->library('upload', $config);
			$this->upload->do_upload('FUinputGambar');
			$gambar = $this->upload->data('file_name');
		} else if ($gambar['error'] == 4) {
			$gambar = $this->input->post('FUinputGambar');
		}

		$data = [
			'id' => $this->input->post('FUinputId'),
			'idkategori' => $this->input->post('FUinputKategori'),
			'idkecamatan' => $this->input->post('FUinputKecamatan'),
			'idkelurahan' => $this->input->post('FUinputKelurahan'),
			'nama' => $this->input->post('FUinputNama'),
			'alamat' => $this->input->post('FUinputAlamat'),
			'lat' => $this->input->post('FUinputLat'),
			'lng' => $this->input->post('FUinputLng'),
			'deskripsi' => $this->input->post('FUinputDes'),
			'gambar' => $gambar,
			'link' => $this->input->post('FUinputLink')
		];

		$this->M_obwis->ubahData($data, urldecode($kategori), $sidebarTitle);
	}

	public function ubahDataBPP()
	{
		$data["sidebar"] = "fasTamActive";
		$data = [
			'id' => $this->input->post('FUinputId'),
			'idkecamatan' => $this->input->post('FUinputKecamatan'),
			'idkelurahan' => $this->input->post('FUinputKelurahan'),
			'nmusaha' => $this->input->post('FUinputNamaBPP'),
			'alamat' => $this->input->post('FUinputAlamat'),
			'nmpemilik' => $this->input->post('FUinputNamaPemilik'),
			'notdup' => $this->input->post('FUinputNoTDUP'),
			'link' => $this->input->post('FUinputLink'),
		];
		$duplikat = $this->M_obwis->antiDuplikasiUbahData($data, 'tabelbpp');
		if ($duplikat == false) {
			$this->M_obwis->ubahDataBPP($data);
		} else {
			$this->session->set_flashdata('noticeGagalUbah', 'Gagal!');
			redirect(base_url('Admin/indexUbahDataBPP/' . $data['id']));
		}
	}

	public function ubahDataTC()
	{
		$data["sidebar"] = "fasTamActive";
		$data = [
			'id' => $this->input->post('FUinputId'),
			'idkecamatan' => $this->input->post('FUinputKecamatan'),
			'idkelurahan' => $this->input->post('FUinputKelurahan'),
			'nmusaha' => $this->input->post('FUinputNamaTC'),
			'alamat' => $this->input->post('FUinputAlamat'),
			'nmpemilik' => $this->input->post('FUinputNamaPemilik'),
			'link' => $this->input->post('FUinputLink')
		];

		$duplikat = $this->M_obwis->antiDuplikasiUbahData($data, 'tabeltokocinderamata');
		if ($duplikat == false) {
			$this->M_obwis->ubahDataTC($data);
		} else {
			$this->session->set_flashdata('noticeGagalUbah', 'Gagal!');
			redirect(base_url('Admin/indexUbahDataTC/' . $data['id']));
		}
	}

	public function ubahDataHotel()
	{
		$data["sidebar"] = "fasTamActive";
		$data = [
			'id' => $this->input->post('FUinputId'),
			'idkecamatan' => $this->input->post('FUinputKecamatan'),
			'idkelurahan' => $this->input->post('FUinputKelurahan'),
			'nmusaha' => $this->input->post('FUinputNamaHotel'),
			'alamat' => $this->input->post('FUinputAlamat'),
			'nmpemilik' => $this->input->post('FUinputNamaPemilik'),
			'notdup' => $this->input->post('FUinputNoTDUP'),
			'link' => $this->input->post('FUinputLink')
		];

		$duplikat = $this->M_obwis->antiDuplikasiUbahData($data, 'tabelhotel');
		if ($duplikat == false) {
			$this->M_obwis->ubahDataHotel($data);
		} else {
			$this->session->set_flashdata('noticeGagalUbah', 'Gagal!');
			redirect(base_url('Admin/indexUbahDataHotel/' . $data['id']));
		}
	}

	//logika hapus data
	public function HapusData($id, $kategori, $sidebarTitle)
	{
		$data["sidebar"] = "berandaActive";
		$data["sidebarTitle"] = $sidebarTitle;
		$this->db->where('id', $id);
		$this->db->delete('tabelobwis');
		$this->session->set_flashdata('noticeHapus', 'Berhasil!');
		redirect(base_url('Admin/' . $sidebarTitle) . '/' . urldecode($kategori)  . '/' . $id);
	}

	public function HapusDataFastam($id, $tabel, $sidebarTitle)
	{
		$this->db->where('id', $id);
		$this->db->delete($tabel);
		$this->session->set_flashdata('noticeHapus', 'Berhasil!');
		redirect(base_url('Admin/') . $sidebarTitle . '/' . $id);
	}

	public function HapusDataAturan($id, $tabel, $sidebarTitle)
	{
		$this->db->where('id', $id);
		$this->db->delete($tabel);
		$this->session->set_flashdata('noticeHapus', 'Berhasil!');
		redirect(base_url('Admin/') . $sidebarTitle);
	}
}