<?php /**
 * 
 */
class Konten_model extends CI_Model
{
	
	public function getAll_konten(){
        $this->db->order_by("id","desc");
		$query = $this->db->get('tb_konten');
		return $query->result_array();

		// return $this->db->get('tb_konten')->result_array();
		// ini model untuk tabel konten
	}
	public function getById($id){
		$query = $this->db->get_where('tb_konten', array('id' => $id));
		return $query->row_array();
	}
	public function getByIdMp3($id){
		$query = $this->db->get_where('tb_mp3', array('id' => $id));
		return $query->row_array();
	}
	public function getByIdDokumen($id){
		$query = $this->db->get_where('tb_dokumen', array('id' => $id));
		return $query->row_array();
	}
	public function getAll_mp3(){
		$this->db->order_by("id","desc");
		$query = $this->db->get('tb_mp3');
		return $query->result_array();
	}
	public function getAll_vidio(){
		$this->db->order_by("id","desc");
		$query = $this->db->get('tb_vidio');
		return $query->result_array();
	}
	public function getByIdVidio($id){
		$query = $this->db->get_where('tb_vidio', array('id' => $id));
		return $query->row_array();
	}
	public function getByIdPrespective($id){
		$query = $this->db->get_where('tb_prespective', array('id' => $id));
		return $query->row_array();
	}

	public function getAll_prespective(){
		$this->db->order_by("id","desc");
		$query = $this->db->get('tb_prespective');
		return $query->result_array();
	}
	public function getAll_buku(){
		$this->db->order_by("id","desc");
		$query = $this->db->get('tb_buku');
		return $query->result_array();
	}
	public function getAll_dokumen(){
		$this->db->order_by("id","desc");
		$query = $this->db->get('tb_dokumen');
		return $query->result_array();
	}
	public function getAll_slide(){
		$this->db->order_by("id","desc");
		$query = $this->db->get('slide');
		return $query->result_array();
	}
	public function getByIdBuku($id){
		$query = $this->db->get_where('tb_buku', array('id' => $id));
		return $query->row_array();
	}
	public function getByIdPres($id){
		$query = $this->db->get_where('tb_prespective', array('id' => $id));
		return $query->row_array();
	}
	public function getByIdAbout($id){
		$query = $this->db->get_where('tb_about', array('id' => $id));
		return $query->row_array();
	}
	public function tambah_artikel(){
		$gambar = $_FILES['gambar'];
		if (empty($gambar)){}else{
			$config['upload_path'] = './asset/img/tumb';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload',$config);
             if ( ! $this->upload->do_upload('gambar'))
                {
                       echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
                       echo '<meta http-equiv="refresh" content="0;">';
                       die;
                }
                else
                {
                        $gambar = $this->upload->data('file_name');
                }
		}
		// ========================= Batas Upload File =======================================
		$data = array('judul' => $this->input->post('judul',true),
						'sub_judul' => $this->input->post('sub_judul',true),
						'isi' => $this->input->post('isi',true),
						'tanggal' => date("l, d-M-Y H:i:s"),
						'penulis' => $this->input->post('penulis',true),
						'gambar' => $gambar);

		$this->db->insert('tb_konten',$data);
	}
	public function hapus_artikel($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_konten');
		
	}
	public function hapus_mp3($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_mp3');
		
	}
	public function hapus_vidio($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_vidio');
		
	}
	public function hapus_dokumen($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_dokumen');
		
	}
	public function hapus_buku($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_buku');
		
	}
	public function hapus_slide($id){
		$this->db->where('id',$id);
		$this->db->delete('slide');
		
	}
	public function tambah_mp3(){
		$data = array('judul_mp3' => $this->input->post('judul',true), 
						'embed' => $this->input->post('embed',true),
						'tanggal' => date("l, d-M-Y H:i:s")	);
		$this->db->insert('tb_mp3',$data);
	}
	public function tambah_vidio(){
		$data = array('judul_vidio' => $this->input->post('judul',true), 
						'embed' => $this->input->post('embed',true),
						'tanggal' => date("l, d-M-Y H:i:s")	);
		$this->db->insert('tb_vidio',$data);

	}
	public function tambah_dokumen(){
		$data = array('nama_file' => $this->input->post('nama_file',true), 
						'link' => $this->input->post('link',true),
						'tanggal' => date("l, d-M-Y H:i:s")	);
		$this->db->insert('tb_dokumen',$data);

	}
	public function tambah_buku(){
		$gambar = $_FILES['gambar'];
		if (empty($gambar)){}else{
			$config['upload_path'] = './asset/img/tumb';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload',$config);
             if ( ! $this->upload->do_upload('gambar'))
                {
                       echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
                       echo '<meta http-equiv="refresh" content="0;">';
                       die;
                }
                else
                {
                        $gambar = $this->upload->data('file_name');
                }
		}
		// ========================= Batas Upload File =======================================
		$data = array('judul' => $this->input->post('judul',true), 
						'penjelasan' => $this->input->post('penjelasan',true),
						'cover' => $gambar,
						'link_download' => $this->input->post('link',true),
						'penulis' => $this->input->post('penulis',true),
						'tanggal' => date("l, d-M-Y H:i:s")	);
		$this->db->insert('tb_buku',$data);

	}
	public function tambah_prespective(){
		$gambar = $_FILES['gambar'];
		if (empty($gambar)){}else{
			$config['upload_path'] = './asset/img/tumb';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload',$config);
             if ( ! $this->upload->do_upload('gambar'))
                {
                       echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
                       echo '<meta http-equiv="refresh" content="0;">';
                       die;
                }
                else
                {
                        $gambar = $this->upload->data('file_name');
                }
		}
		// ========================= Batas Upload File =======================================
		$data = array('judul_status' => $this->input->post('judul_status',true), 
						'status' => $this->input->post('status',true),
						'tanggal' => date("l, d-M-Y H:i:s"),
						'gambar' => $gambar );
		$this->db->insert('tb_prespective',$data);
	}
	public function tambah_slide(){
		$gambar = $_FILES['gambar'];
		if (empty($gambar)){}else{
			$config['upload_path'] = './asset/img/tumb';
            $config['allowed_types'] = 'gif|jpg|png';

            $this->load->library('upload',$config);
             if ( ! $this->upload->do_upload('gambar'))
                {
                       echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
                       echo '<meta http-equiv="refresh" content="0;">';
                       die;
                }
                else
                {
                        $gambar = $this->upload->data('file_name');
                }
		}
		// ========================= Batas Upload File =======================================
		$data = array(	'judul_kegiatan' => $this->input->post('judul_kegiatan'),
						'penjelasan' => $this->input->post('penjelasan'),
						'gambar' => $gambar,
						'tanggal' => date("l, d-M-Y H:i:s")	);
		$this->db->insert('slide',$data);

	}
	public function ubah_artikel($id,$data){
			$gambar = $_FILES['gambar'];
			if (empty($gambar)){}else{
				$config['upload_path'] = './asset/img/tumb';
	            $config['allowed_types'] = 'gif|jpg|png';

	            $this->load->library('upload',$config);
	             if ( ! $this->upload->do_upload('gambar'))
	                {
	                       // echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
	                       // echo '<meta http-equiv="refresh" content="0;">';
	                       // die;
	                		$gambar = $data['artikel']['gambar'];
	                }
	                else
	                {
	                        $gambar = $this->upload->data('file_name');
	                }
			}
		
		// ===============================================================
		$data = array('judul' => $this->input->post('judul',true),
						'sub_judul' => $this->input->post('sub_judul',true),
						'isi' => $this->input->post('isi',true),
						'tanggal' => date("l, d-M-Y H:i:s"),
						'penulis' => $this->input->post('penulis',true),
						'gambar' => $gambar);

		$this->db->where('id',$id);
		$this->db->update('tb_konten',$data);
	}
	public function ubah_mp3($id){
		$data = array('judul_mp3' => $this->input->post('judul',true),
						'embed' => $this->input->post('embed',true),
						'tanggal' => date("l, d-M-Y H:i:s"));
		$this->db->where('id',$id);
		$this->db->update('tb_mp3',$data);
	}
	public function ubah_vidio($id){
		$data = array('judul_vidio' => $this->input->post('judul',true),
						'embed' => $this->input->post('embed',true),
						'tanggal' => date("l, d-M-Y H:i:s"));
		$this->db->where('id',$id);
		$this->db->update('tb_vidio',$data);
	}
	public function ubah_dokumen($id){
		$data = array('nama_file' => $this->input->post('nama_file',true),
						'link' => $this->input->post('link',true),
						'tanggal' => date("l, d-M-Y H:i:s"));
		$this->db->where('id',$id);
		$this->db->update('tb_dokumen',$data);
	}
	public function ubah_buku($id){
		$gambar = $_FILES['gambar'];
			if (empty($gambar)){}else{
				$config['upload_path'] = './asset/img/tumb';
	            $config['allowed_types'] = 'gif|jpg|png';

	            $this->load->library('upload',$config);
	             if ( ! $this->upload->do_upload('gambar'))
	                {
	                       // echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
	                       // echo '<meta http-equiv="refresh" content="0;">';
	                       // die;
	                		$gambar = $this->input->post('gambar_lama');
	                }
	                else
	                {
	                        $gambar = $this->upload->data('file_name');
	                }
			}
		
		// ===============================================================
		$data = array('judul' => $this->input->post('judul',true),
						'penjelasan' => $this->input->post('penjelasan',true),
						'cover' => $gambar,
						'link_download' => $this->input->post('link',true),
						'penulis' => $this->input->post('penulis',true),
						'tanggal' => date("l, d-M-Y H:i:s"));
		$this->db->where('id',$id);
		$this->db->update('tb_buku',$data);
	}
	public function ubah_about($id,$data){
		$gambar = $_FILES['gambar'];
			if (empty($gambar)){}else{
				$config['upload_path'] = './asset/img/tumb';
	            $config['allowed_types'] = 'gif|jpg|png';

	            $this->load->library('upload',$config);
	             if ( ! $this->upload->do_upload('gambar'))
	                {
	                       // echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
	                       // echo '<meta http-equiv="refresh" content="0;">';
	                       // die;
	                		$gambar = $data['about']['gambar'];
	                }
	                else
	                {
	                        $gambar = $this->upload->data('file_name');
	                }
			}
		// =====================================================
		$data = array('about' => $this->input->post('about',true),
						'gambar' => $gambar);
		$this->db->where('id',$id);
		$this->db->update('tb_about',$data);
	}
	public function ubah_prespective($id){
		$gambar = $_FILES['gambar'];
			if (empty($gambar)){}else{
				$config['upload_path'] = './asset/img/tumb';
	            $config['allowed_types'] = 'gif|jpg|png';

	            $this->load->library('upload',$config);
	             if ( ! $this->upload->do_upload('gambar'))
	                {
	                       // echo "<script>alert('Gagal Diupload karena Gambar Kosong')</script>";
	                       // echo '<meta http-equiv="refresh" content="0;">';
	                       // die;
	                		$gambar = $this->input->post('gambar_lama');
	                }
	                else
	                {
	                        $gambar = $this->upload->data('file_name');
	                }
			}
		
		// ===============================================================
		$data = array('judul_status' => $this->input->post('judul_status',true),
						'status' => $this->input->post('status',true),
						'tanggal' => date("l, d-M-Y H:i:s"),
						'gambar' => $gambar);
		$this->db->where('id',$id);
		$this->db->update('tb_prespective',$data);
	}
	public function cek_login(){
		$username = set_value('username');
		$password = set_value('password');

		$result = $this->db->where('username',$username)
						   ->where('password',$password)
						   ->limit(1)
						   ->get('tb_login');

		if ($result->num_rows()>0) {
			return $result->row();
		}else {
			return array();
		}
	}
	public function cari_artikel(){
		$keyword = $this->input->post('keyword');
		$this->db->like("judul",$keyword);
		$this->db->or_like("isi",$keyword);
		$query = $this->db->get('tb_konten');
		return $query->result_array();
	}
	public function cari_buku(){
		$keyword = $this->input->post('keyword2');
		$this->db->like("judul",$keyword);
		$query = $this->db->get('tb_buku');
		return $query->result_array();
	}
	public function tambah_visitor(){
		$visit=1;
		$query = $this->db->get_where('visitor', array('id' => 1))->row_array();
		$data = array('hari' =>$query["hari"]+$visit, 
						'bulan' => $query["bulan"]+$visit,
						'tahun' =>$query["tahun"]+$visit);				
		$this->db->where('id',1);
		$this->db->update('visitor',$data);

		return $data['hari'];
	}
	public function getByIdVisitor(){
		$query = $this->db->get_where('visitor', array('id' => 1));
		return $query->row_array();
	}




} 




?>