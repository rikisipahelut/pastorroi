<?php 
/**
 * 
 */
class Panti_asuhan extends CI_Controller
{
	public function index(){
		$data['judul'] = 'Panti Asuhan';
		$data['kegiatan'] = $this->Konten_model->getAll_slide();
		$this->load->view('template/header',$data);
		$this->load->view('panti_asuhan/panti_asuhan_view',$data);
		$this->load->view('template/footer');
	}
	public function visi(){
		$data['judul'] = 'Visi Misi';
		$this->load->view('template/header',$data);
		$this->load->view('panti_asuhan/visi_view',$data);
		$this->load->view('template/footer');

	}
	public function jum_anak(){
		$data['judul'] = 'Jumlah Anak';
		$this->load->view('template/header',$data);
		$this->load->view('panti_asuhan/Jumlah_anak_view',$data);
		$this->load->view('template/footer');
	}
	public function program(){
		$data['judul'] = 'Program';
		$this->load->view('template/header',$data);
		$this->load->view('panti_asuhan/program_view',$data);
		$this->load->view('template/footer');
	}
	public function dokumen(){
		$data['judul'] = 'dokumen';
		$data['dokumen'] = $this->Konten_model->getAll_dokumen();
		$this->load->view('template/header',$data);
		$this->load->view('panti_asuhan/dokumen_view',$data);
		$this->load->view('template/footer');
	}

}

 ?>