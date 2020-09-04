<?php 

/**
 * 
 */
class Auth extends CI_Controller
{
	
	public function login(){

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password ','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/login_view');
		}else{
			$Auth = $this->Konten_model->cek_login();

			if($Auth==FALSE){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username atau Password Salah</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
				redirect('auth/login');
			}else{
				$this->session->set_userdata('username',$Auth->username);

				redirect('admin');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}