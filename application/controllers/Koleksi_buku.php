<?php 

/**
 * 
 */
class Koleksi_buku extends CI_Controller
{
	public function index(){
		if ($this->input->post('keyword2')) {
			$data["cari"] = $this->Konten_model->cari_buku();
		}
		$data['judul']='Koleksi Buku';
		$data['buku']=$this->Konten_model->getAll_buku();
		$data["about"] = $this->Konten_model->getByIdAbout(2);
		$data["vidio"] = $this->Konten_model->getAll_vidio();
		$data["mp3"] = $this->Konten_model->getAll_mp3();
		$data["aside"] = $this->Konten_model->getAll_konten();
		$this->load->view('template/header',$data);
		$this->load->view('koleksi_buku/koleksi_buku_view',$data);
		$this->load->view('template/aside',$data);
		$this->load->view('template/footer');
	}	
}
 ?>