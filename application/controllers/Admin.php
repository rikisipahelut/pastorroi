<?php 

/**
 * 
 */
class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata("username") == FALSE){
			redirect('auth/login');
		}
	}
	
	public function index(){
		$data['judul'] = 'Admin';
		$data['konten'] = $this->Konten_model->getAll_konten();
		$data['mp3'] = $this->Konten_model->getAll_mp3();
		$data['vidio'] = $this->Konten_model->getAll_vidio();
		$data['buku']=$this->Konten_model->getAll_buku();
		$data['visitor']=$this->Konten_model->getByIdVisitor();
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/content',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}
	public function artikel(){
		$data['judul'] = 'Admin';
		$data['page'] ='Artikel';

		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','Isi Artikel','required');
		$this->form_validation->set_rules('penulis','Penulis','required');
		// $this->form_validation->set_rules('gambar','Gambar','required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/artikel_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
	    }else{
	    	// jika form berhasil di validasi maka data kirim ke Model
	    	$this->Konten_model->tambah_artikel();
	    	$this->session->set_flashdata('flash','ditambahkan'); //(nama_session,isi_sessions)
	    	redirect('Admin');
	    }
	}
		
	public function embed_mp3(){
		$data['judul'] = 'Admin';
		$data['page'] ='mp3';
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('embed','embed','required');
		if($this->form_validation->run()== FALSE){
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/mp3_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->tambah_mp3();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('Admin');
		}
		
	}
	public function embed_vidio(){
		$data['judul'] = 'Admin';
		$data['page'] ='Vidio';
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('embed','embed','required');
		if ($this->form_validation->run()==FALSE) {

			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/vidio_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->tambah_vidio();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('Admin');
		}
	}
	public function buku(){
		$data['judul'] = 'Admin';
		$data['page'] ='Buku';
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('penulis','Penulis','required');
		$this->form_validation->set_rules('link','link','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/buku_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->tambah_buku();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('Admin');
		}
		
	}
	public function prespective(){
		$data['judul'] = 'Admin';
		$data['page'] ='Pastor_prespective';
		$this->form_validation->set_rules('judul_status','Judul','required');
		$this->form_validation->set_rules('status','Status','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/prespective_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->tambah_prespective();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('Admin');
		}
		
	}
	public function about($id=2){
		$data['about'] = $this->Konten_model->getByIdAbout($id);
		$data['judul'] = 'Admin';
		$data['page'] ='About';
		$this->form_validation->set_rules('about','About','required');
		// $this->form_validation->set_rules('gambar','Gambar','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/about_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->ubah_about($id,$data);
			$this->session->set_flashdata('flash','diubah');
			redirect('Admin');
		}
		
	}
	public function slide(){
		$data['judul'] = 'Admin';
		$data['page'] ='Slide';
		$this->form_validation->set_rules('judul_kegiatan','Judul Kegiatan','required');
		$this->form_validation->set_rules('penjelasan','Penjelasan','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/slide_panti_asuhan_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->tambah_slide();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('Admin');
		}
		
	}
	public function dokumen(){
		$data['judul'] = 'Dokumen';
		$data['page'] ='Dokumen';
		$this->form_validation->set_rules('nama_file','Nama File','required');
		$this->form_validation->set_rules('link','link','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form/dokumen_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->tambah_dokumen();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('Admin');
		}

	}
	public function tb_artikel(){
		$data['judul'] = 'Admin';
		$data['page'] ='Daftar Artikel';
		$data['konten'] = $this->Konten_model->getAll_konten();
		$this->load->view('template_admin/header',$data);
		$this->load->view('admin_table/tb_artikel',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}
	public function tb_embed_mp3(){
		$data['judul'] = 'Admin';
		$data['page'] =' Daftar Mp3';
		$data['embed'] = $this->Konten_model->getAll_mp3();
		$this->load->view('template_admin/header',$data);
		$this->load->view('admin_table/tb_mp3',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}
	public function tb_embed_vidio(){
		$data['judul'] = 'Admin';
		$data['page'] ='Daftar Vidio';
		$data['embed']=$this->Konten_model->getAll_vidio();
		$this->load->view('template_admin/header',$data);
		$this->load->view('admin_table/tb_vidio',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}
	public function tb_dokumen(){
		$data['judul'] = 'Admin';
		$data['page'] ='Daftar Dokumen';
		$data['dokumen']=$this->Konten_model->getAll_dokumen();
		$this->load->view('template_admin/header',$data);
		$this->load->view('admin_table/tb_dokumen',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}
	public function tb_buku(){
		$data['judul'] = 'Admin';
		$data['page'] ='Daftar Buku';
		$data['buku'] = $this->Konten_model->getAll_buku();
		$this->load->view('template_admin/header',$data);
		$this->load->view('admin_table/tb_buku',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}
	public function tb_prespective(){
		$data['judul'] = 'Admin';
		$data['page'] ='Daftar Pastor_prespective';
		$data['prespective'] = $this->Konten_model->getAll_prespective();
		$this->load->view('template_admin/header',$data);
		$this->load->view('admin_table/tb_prespective',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}
	public function tb_slide(){
		$data['judul'] = 'Admin';
		$data['page'] ='Daftar Slide Panti Asuhan';
		$data['slide'] = $this->Konten_model->getAll_slide();
		$this->load->view('template_admin/header',$data);
		$this->load->view('admin_table/tb_slide',$data);
		$this->load->view('template_admin/aside');
		$this->load->view('template_admin/foother');
	}

	public function hapus($id){
		$this->Konten_model->hapus_artikel($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('admin');
	}
	public function hapus_mp3($id){
		$this->Konten_model->hapus_mp3($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('admin');
	}
	public function hapus_vidio($id){
		$this->Konten_model->hapus_vidio($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('Admin');
	}
	public function hapus_dokumen($id){
		$this->Konten_model->hapus_dokumen($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('Admin');
	}
	public function hapus_buku($id){
		$this->Konten_model->hapus_buku($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('Admin');
	}
	public function hapus_slide($id){
		$this->Konten_model->hapus_slide($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('Admin');
	}
	public function ubah_artikel($id){
		$data['artikel']=$this->Konten_model->getById($id);
		$data['page']="ubah_artikel";
		$data['judul'] = 'Admin';
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('isi','Isi Artikel','required');
		$this->form_validation->set_rules('penulis','Penulis','required');
		// $this->form_validation->set_rules('gambar','Gambar','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form_ubah/artikel_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->ubah_artikel($id,$data);
			$this->session->set_flashdata('flash','diubah');
			redirect('Admin');
		}
		
	}
	public function ubah_mp3($id){
		$data['mp3'] = $this->Konten_model->getByIdMp3($id);
		$data['judul'] = 'Admin';
		$data['page'] ='ubah_mp3';
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('embed','embed','required');
		if($this->form_validation->run()== FALSE){
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form_ubah/mp3_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->ubah_mp3($id);
			$this->session->set_flashdata('flash','diubah');
			redirect('Admin');
		}
	}
	public function ubah_vidio($id){
		$data['vidio'] = $this->Konten_model->getByIdVidio($id);
		$data['judul'] = 'Admin';
		$data['page'] ='ubah_vidio';
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('embed','embed','required');
		if ($this->form_validation->run()==FALSE) {

			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form_ubah/vidio_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->ubah_vidio($id);
			$this->session->set_flashdata('flash','diubah');
			redirect('Admin');
		}
	}
	public function ubah_dokumen($id){
		$data['dokumen'] = $this->Konten_model->getByIdDokumen($id);
		$data['judul'] = 'Admin';
		$data['page'] ='ubah_dokumen';
		$this->form_validation->set_rules('nama_file','Nama File','required');
		$this->form_validation->set_rules('link','Link','required');
		if ($this->form_validation->run()==FALSE) {

			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form_ubah/dokumen_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->ubah_dokumen($id);
			$this->session->set_flashdata('flash','diubah');
			redirect('Admin');
		}
	}
	public function ubah_buku($id){
		$data['buku']=$this->Konten_model->getByIdBuku($id);
		$data['page']="ubah_buku";
		$data['judul'] = 'Admin';
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('link','link','required');
		$this->form_validation->set_rules('penulis','Penulis','required');
		// $this->form_validation->set_rules('gambar','Gambar','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form_ubah/buku_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->ubah_buku($id);
			$this->session->set_flashdata('flash','diubah');
			redirect('Admin');
		}
		
	}
	public function ubah_prespective($id){
		$data['prespective']=$this->Konten_model->getByIdPrespective($id);
		$data['page']="ubah_prespective";
		$data['judul'] = 'Admin';
		$this->form_validation->set_rules('judul_status','Judul','required');
		$this->form_validation->set_rules('status','Status','required');
		// $this->form_validation->set_rules('gambar','Gambar','required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('template_admin/header',$data);
			$this->load->view('admin_form_ubah/prespective_view',$data);
			$this->load->view('template_admin/aside');
			$this->load->view('template_admin/foother');
		}else{
			$this->Konten_model->ubah_prespective($id);
			$this->session->set_flashdata('flash','diubah');
			redirect('Admin');
		}
		
	}
}

 ?>