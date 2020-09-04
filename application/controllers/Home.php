<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["judul"] = 'home';
		$data["konten"] = $this->Konten_model->getAll_konten();
		$data["aside"] = $this->Konten_model->getAll_konten();
		if ($this->input->post('keyword')) {
			$data["cari"] = $this->Konten_model->cari_artikel();
		}
		$data["buku"] = $this->Konten_model->getAll_buku();
		$data["about"] = $this->Konten_model->getByIdAbout(2);
		$data["vidio"] = $this->Konten_model->getAll_vidio();
		$data["mp3"] = $this->Konten_model->getAll_mp3();
		$data["prespective"] = $this->Konten_model->getAll_prespective();
		$data['uri'] = "details/index/".$data['konten'][1]['id']."/".$data['konten'][1]['judul'];
		$data['visitor']=$this->Konten_model->getByIdVisitor();
		$this->load->view('template/header',$data);
		$this->load->view('home/home_view',$data);
		$this->load->view('template/aside',$data);
		$this->load->view('template/footer');

		// untuk Visitor
		if ($data["konten"]) {
			$this->Konten_model->tambah_visitor();
		}
	}
}
