<?php 

/**
 * 
 */
class Pastor_prespective extends CI_Controller
{
	
	public function index(){
		if ($this->input->post('keyword')) {
			$data["cari"] = $this->Konten_model->cari_artikel();
		}
		$data['judul'] = 'Pastor Prespective';
		$data["about"] = $this->Konten_model->getByIdAbout(2);
		$data["vidio"] = $this->Konten_model->getAll_vidio();
		$data["mp3"] = $this->Konten_model->getAll_mp3();
		$data['prespective'] = $this->Konten_model->getAll_prespective();
		$data['visitor']=$this->Konten_model->getByIdVisitor();
		$this->load->view('template/header',$data);
		$this->load->view('pastor_prespective/pastor_prespective_view',$data);
		$this->load->view('template/aside');
		$this->load->view('template/footer');
	}
}
 ?>