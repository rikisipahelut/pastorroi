<?php 

/**
 * 
 */
class Details_pastor_prespective extends CI_Controller
{
	
	public function index($id,$uri)
	{   $data['prespective'] = $this->Konten_model->getByIdPres($id);
		$data['judul'] = 'Pastor Perspective '.$data['prespective']['judul_status'];
		$data['isi'] = $data['prespective']['status'];
		$data['gambar'] = $data['prespective']['gambar'];
		$data["about"] = $this->Konten_model->getByIdAbout(2);
		$data["vidio"] = $this->Konten_model->getAll_vidio();
		$data["mp3"] = $this->Konten_model->getAll_mp3();
		
		$data['uri'] = "Details_pastor_prespective/index/".$id."/".$uri;
		$this->load->view('template/header',$data);
		$this->load->view('details_pastor/details_pastor_view',$data);
		$this->load->view('template/aside');
		$this->load->view('template/footer');
	}
}






 ?>
