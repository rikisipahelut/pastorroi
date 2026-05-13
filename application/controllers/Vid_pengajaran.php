<?php 
/**
 * 
 */
class Vid_pengajaran extends CI_Controller
{
	public function index(){
		if ($this->input->post('keyword')) {
			$data["cari"] = $this->Konten_model->cari_artikel();
		}
		$data['judul'] = 'Vidio Pengajaran';
		$data['vidio'] = $this->Konten_model->getAll_vidio();
		$this->load->view('template/header',$data);
		$this->load->view('vid_pengajaran/vid_pengajaran_view');
		$this->load->view('template/footer');
	}
}


 ?>