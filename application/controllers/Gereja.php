<?php 
/**
 * 
 */
class Gereja extends CI_Controller
{
	
	public function index(){
		$data['judul'] = 'Gereja';
		$data["about"] = $this->Konten_model->getByIdAbout(2);
		$data["vidio"] = $this->Konten_model->getAll_vidio();
		$data["mp3"] = $this->Konten_model->getAll_mp3();
		$data["aside"] = $this->Konten_model->getAll_konten();
		$this->load->view('template/header',$data);
		$this->load->view('gereja/gereja_view');
		$this->load->view('template/aside',$data);
		$this->load->view('template/footer');
	}
}


 ?>