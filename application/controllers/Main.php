<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index(){

 $data['title']="nutriden";
		$this->load->view('partials/header.php',$data);
		$this->load->model('Contacts_model');
		
	$data2['contacts']=$this->Contacts_model->get_all_contacts();

		$this->load->view('welcome_message',$data2);
$this->load->view('partials/footer.php');
	
	 }

public function handleform(){

$name=$this->input->post("Name");
$this->load->model('Contacts_model');
$this->Contacts_model->addcontact($name);
}
}

	//$this->load->model('Contacts_model');
	//$this->Contacts_model->get_all_contacts();}}
		?>