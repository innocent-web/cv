<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if( !$this->session->userdata('isLoggedIn') ) {
			redirect('/login/authentification');
		}
	}

	public function tableau_de_bord(){
		$this->data['subview'] = 'tableau_de_bord';
		$this->load->view('_layout', $this->data);

	}

	public function test(){
		$this->load->view('test');
	}

	public function ajouter_cv(){
		$this->data['subview'] = 'frm_cv';
		$this->load->view('_layout', $this->data);
	}
	public function ajouter(){

		$this->data['direction'] = $this->mdl_cv->liste_deroulante_direction();
		$this->data['service'] = $this->mdl_cv->liste_deroulante_service();
		$this->data['grade'] = $this->mdl_cv->liste_deroulante_grade();
		$this->data['corps'] = $this->mdl_cv->liste_deroulante_corps();
		$this->data['fonction'] = $this->mdl_cv->liste_deroulante_fonction();

		$this->data['subview'] = 'formulaire';
		$this->load->view('_layout', $this->data);
	}
  public function liste(){
        print_r("Page en construction");
	}
	public function sg(){
		$this->data['subview'] = 'tableau_de_bord';
		$this->load->view('_layout', $this->data);
	}

	public function insert_cv(){
		$id = $this->input->post('idagent');
		$tzInsert = array();
		$tzInsert['im'] = $this->input->post('im');
		$tzInsert['nom'] = $this->input->post('nom');
		$tzInsert['prenom'] = $this->input->post('prenom');
		$tzInsert['dateadmin'] = date('Y-m-d', strtotime($this->input->post('dateadmin')));
		$tzInsert['idcorps'] = $this->input->post('corps');
		$tzInsert['idgrade'] = $this->input->post('grade');
		$tzInsert['adresse'] = $this->input->post('adresse');
		$tzInsert['telephone'] = $this->input->post('telephone');
		$tzInsert['email'] = $this->input->post('email');
		$tzInsert['datenaissance'] =date('Y-m-d', strtotime($this->input->post('datenaissance')));
		$tzInsert['cin'] = $this->input->post('cin');
		$tzInsert['idservice'] = $this->input->post('service');
		$tzInsert['idfontction'] = $this->input->post('fonction');

			$iLastId = $this->models->insert(TABLE_AGENT, $tzInsert );
			if ($iLastId){
				redirect('cv/add_complement/'.$iLastId);
			}



	}

	public function add_complement($id=null){

		$this->data['infosAgent'] =  $this->models->get_id(TABLE_AGENT,$id);
		$this->data['subview'] = 'add_complement';
		$this->load->view('_layout', $this->data);
	}

	public function insert_experience()
	{
		$id = $this->input->post('id');
		$tzInsert = array();
		$tzInsert['debut_exp'] = date('Y-m-d', strtotime($this->input->post('debut_exp')));
		$tzInsert['fin_exp'] = date('Y-m-d', strtotime($this->input->post('fin_exp')));
		$tzInsert['poste'] = $this->input->post('poste');
		if($id){
			$this->models->save($tzInsert,$id );
		}else{
			$this->models->insert(TABLE_EXPE,$tzInsert);
		}
		echo json_encode(array("status" => TRUE));
	}

}
