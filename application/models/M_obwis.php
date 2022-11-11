<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_obwis extends CI_Model
{

	//logika ambil semua data anjing dan user
	public function semuaData()
	{
		return [
			"dataAdmin" => $this->db->get('tabeladmin')->result(),
			"dataObwis" => $this->db->get('tabelobwis')->result(),
			"dataKategori" => $this->db->get('tabelkategori')->result(),
			"dataKecamatan" => $this->db->get('tabelkecamatan')->result(),
			"dataKelurahan" => $this->db->get('tabelkelurahan')->result(),
			"dataBPP" => $this->db->get('tabelbpp')->result(),
			"dataTC" => $this->db->get('tabeltokocinderamata')->result(),
			"dataHotel" => $this->db->get('tabelhotel')->result()
		];
	}

	public function antiDuplikasi($data, $tabel)
	{
		$duplikat = false;

		if ($tabel == 'tabelobwis') {
			$query = $this->db->get_where($tabel, ['nama' => $data['nama']])->row();
			if ($query) {
				$duplikat = true;
			}
		}

		if ($tabel == 'tabelkategori') {
			$query = $this->db->get_where($tabel, ['nama' => $data['nama']])->row();
			if ($query) {
				$duplikat = true;
			}
		}

		if ($tabel == 'tabelkecamatan') {
			$query = $this->db->get_where($tabel, ['nama' => $data['nama'], 'geojson' => $data['geojson']])->row();
			if ($query) {
				$duplikat = true;
			}
		}

		if ($tabel == 'tabelkelurahan') {
			$query = $this->db->get_where($tabel, ['idkecamatan' => $data['idkecamatan'], 'nama' => $data['nama']])->row();
			if ($query) {
				$duplikat = true;
			}
		}

		if ($tabel == 'tabelbpp') {
			$query = $this->db->get_where($tabel, ['nmusaha' => $data['nmusaha']])->row();
			if ($query) {
				$duplikat = true;
			}
		}

		if ($tabel == 'tabeltokocinderamata') {
			$query = $this->db->get_where($tabel, ['nmusaha' => $data['nmusaha']])->row();
			if ($query) {
				$duplikat = true;
			}
		}

		if ($tabel == 'tabelhotel') {
			$query = $this->db->get_where($tabel, ['nmusaha' => $data['nmusaha']])->row();
			if ($query) {
				$duplikat = true;
			}
		}

		return $duplikat;
	}

	public function antiDuplikasiUbahData($data, $tabel)
	{
		$duplikat = false;

		if ($tabel == 'tabelobwis') {
			$query = $this->db->get_where($tabel, ['nama' => $data['nama']])->row_array();
			$pembanding = $this->db->get_where($tabel, ['id' => $data['id']])->row_array();
			if ($query) {
				if (strtolower($query['nama']) == strtolower($pembanding['nama'])) {
					$duplikat = false;
				} else {
					$duplikat = true;
				}
			}
		}

		if ($tabel == 'tabelkategori') {
			$query = $this->db->get_where($tabel, ['nama' => $data['nama']])->row_array();
			$pembanding = $this->db->get_where($tabel, ['id' => $data['id']])->row_array();
			if ($query) {
				if (strtolower($query['nama']) == strtolower($pembanding['nama'])) {
					$duplikat = false;
				} else {
					$duplikat = true;
				}
			}
		}

		if ($tabel == 'tabelkecamatan') {
			$query = $this->db->get_where($tabel, ['nama' => $data['nama']])->row_array();
			$pembanding = $this->db->get_where($tabel, ['id' => $data['id']])->row_array();
			if ($query) {
				if (strtolower($query['nama']) == strtolower($pembanding['nama'])) {
					$duplikat = false;
				} else {
					$duplikat = true;
				}
			}
		}

		if ($tabel == 'tabelkelurahan') {
			$query = $this->db->get_where($tabel, ['idkecamatan' => $data['idkecamatan'], 'nama' => $data['nama']])->row_array();
			$pembanding = $this->db->get_where($tabel, ['id' => $data['id']])->row_array();

			if ($query) {
				if (strtolower($query['idkecamatan']) == strtolower($pembanding['idkecamatan']) && strtolower($query['nama']) == strtolower($pembanding['nama'])) {
					$duplikat = false;
				} else {
					$duplikat = true;
				}
			}
		}

		if ($tabel == 'tabelbpp') {
			$query = $this->db->get_where($tabel, ['nmusaha' => $data['nmusaha']])->row_array();
			$pembanding = $this->db->get_where($tabel, ['id' => $data['id']])->row_array();
			if ($query) {
				if (strtolower($query['nmusaha']) == strtolower($pembanding['nmusaha'])) {
					$duplikat = false;
				} else {
					$duplikat = true;
				}
			}
		}

		if ($tabel == 'tabeltokocinderamata') {
			$query = $this->db->get_where($tabel, ['nmusaha' => $data['nmusaha']])->row_array();
			$pembanding = $this->db->get_where($tabel, ['id' => $data['id']])->row_array();
			if ($query) {
				if (strtolower($query['nmusaha']) == strtolower($pembanding['nmusaha'])) {
					$duplikat = false;
				} else {
					$duplikat = true;
				}
			}
		}

		if ($tabel == 'tabelhotel') {
			$query = $this->db->get_where($tabel, ['nmusaha' => $data['nmusaha']])->row_array();
			$pembanding = $this->db->get_where($tabel, ['id' => $data['id']])->row_array();
			if ($query) {
				if (strtolower($query['nmusaha']) == strtolower($pembanding['nmusaha'])) {
					$duplikat = false;
				} else {
					$duplikat = true;
				}
			}
		}

		return $duplikat;
	}

	public function getDataKelurahan($idKecamatan)
	{
		$this->db->where('idkecamatan', $idKecamatan);
		$kelurahanById = $this->db->get('tabelkelurahan');
		return $kelurahanById->result();
	}

	public function tambahData($data, $kategori, $sidebarTitle)
	{
		$this->db->insert('tabelobwis', $data);
		$this->session->set_flashdata('noticeTambah', 'Berhasil!');
		redirect(base_url('Admin/indexDetailObwisAdmin2/') . $kategori);
	}

	public function tambahDataAturan($data, $tabel, $sidebarTitle)
	{
		$query = $this->db->insert($tabel, $data);
		if ($query) {
			$this->session->set_flashdata('noticeTambah', 'Berhasil!');
		} else {
			$this->session->set_flashdata('noticeGagalTambah', 'Gagal!');
		}
		redirect(base_url('Admin/') . $sidebarTitle);
	}

	public function tambahDataBPP($data)
	{
		$this->db->insert('tabelBPP', $data);
		$this->session->set_flashdata('noticeTambah', 'Berhasil!');
		redirect(base_url('Admin/indexBPPAdmin'));
	}

	public function tambahDataTC($data)
	{
		$this->db->insert('tabeltokocinderamata', $data);
		$this->session->set_flashdata('noticeTambah', 'Berhasil!');
		redirect(base_url('Admin/indexTCAdmin'));
	}

	public function tambahDataHotel($data)
	{
		$this->db->insert('tabelhotel', $data);
		$this->session->set_flashdata('noticeTambah', 'Berhasil!');
		redirect(base_url('Admin/indexHotelAdmin'));
	}

	public function ubahData($data, $kategori, $sidebarTitle)
	{
		$duplikat = $this->M_obwis->antiDuplikasiUbahdata($data, 'tabelobwis');
		if ($duplikat == false) {
			$this->db->where('id', $data['id']);
			$this->db->update('tabelobwis', $data);
			$this->session->set_flashdata('noticeUbah', 'Berhasil!');
			redirect(base_url('Admin/indexDetailObwisAdmin/') . $kategori  . '/' . $sidebarTitle . '/' . $data['id']);
		} else {
			$this->session->set_flashdata('noticeGagalUbah', 'Gagal!');
			redirect(base_url('Admin/indexUbahData/') . $data['id'] . '/' . $kategori  . '/' . $sidebarTitle);
		}
	}

	public function ubahDataAturan($data, $tabel, $sidebarTitle, $id)
	{
		$this->db->where('id', $id);
		$query = $this->db->update($tabel, $data);
		if ($query) {
			$this->session->set_flashdata('noticeUbah', 'Berhasil!');
		} else {
			$this->session->set_flashdata('noticeGagalUbah', 'Gagal!');
		}

		redirect(base_url('Admin/') . $sidebarTitle);
	}

	public function ubahDataBPP($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tabelBPP', $data);
		$this->session->set_flashdata('noticeUbah', 'Berhasil!');
		redirect(base_url('Admin/indexDetailBPPAdmin/') . $data['id']);
	}

	public function ubahDataTC($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tabeltokocinderamata', $data);
		$this->session->set_flashdata('noticeUbah', 'Berhasil!');
		redirect(base_url('Admin/indexDetailTCAdmin/') . $data['id']);
	}

	public function ubahDataHotel($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('tabelhotel', $data);
		$this->session->set_flashdata('noticeUbah', 'Berhasil!');
		redirect(base_url('Admin/indexDetailHotelAdmin/') . $data['id']);
	}

	//logika verifikasi
	public function verifikasi($tabel, $password)
	{
		return $this->db->get_where($tabel, $password);
	}
}