<?php 
/**
 * 
 */
class Details extends CI_Controller
{
	
	public function index($id,$uri)
	{
		$data['konten'] = $this->Konten_model->getById($id);
		$data['aside'] = $this->Konten_model->getAll_konten($id);
		$data['judul'] = $data['konten']['judul'];
		$data['isi'] =$data['konten']['isi'];
		$data['gambar'] =$data['konten']['gambar'];
		$data['id'] = $id;
		$data['uri'] = "details/index/".$id."/".$uri;
		$data["about"] = $this->Konten_model->getByIdAbout(2);
		$data["vidio"] = $this->Konten_model->getAll_vidio();
		$data["mp3"] = $this->Konten_model->getAll_mp3();
		$this->load->view('template/header',$data);
		$this->load->view('details/details_view',$data);
		$this->load->view('template/aside',$data);
		$this->load->view('template/footer');

		if ($data["konten"]) {
			$this->Konten_model->tambah_visitor();
		}
		
	}
}
 ?>