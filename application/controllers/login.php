<?php

class login extends CI_Controller {


	function index() {
		if( $this->session->userdata('isLoggedIn')&& $this->session->userdata('role' )==2 ){
			redirect('/cv/tableau_de_bord');
		} else {
			$this->authentification(false);
		}
	}

	function login_user() {
		$im = trim($this->input->post('im'));
		$pass  = trim($this->input->post('password'));
		if( $im && $pass && $this->mdl_cv->validate_user($im,$pass)) {
			redirect('/cv/tableau_de_bord');
		} else {
			$this->authentification(true);
		}
	}

	function authentification( $show_error = false ) {
		$data['error'] = $show_error;
		$this->load->helper('form');
		$this->load->view('authen',$data);
	}

	function logout_user() {
		$this->session->sess_destroy();
		//$this->index();
		redirect('/');
	}

	function showphpinfo() {
		echo phpinfo();
	}
    
}

