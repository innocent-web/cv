<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {



	public function index()
	{
		$this->load->view('Home');
	}


	public function cabinet()
	{
		$this->data['subview'] = 'cabinet';
		$this->load->view('_layout', $this->data);
	}
	public function sg()
	{
		$this->data['subview'] = 'sg';
		$this->load->view('_layout', $this->data);
	}

	public function formulaire()
	{
		$this->data['subview'] = 'formulaire';
		$this->load->view('_layout', $this->data);
	}

	
}
