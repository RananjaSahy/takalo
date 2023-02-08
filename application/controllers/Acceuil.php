<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceuil extends CI_Controller {

	public function index(){
        $confirmsession = $this->session->has_userdata('user');

        if ($confirmsession == true) {
			$user = $this->session->user;
            if($user['idutilisateur']==1){
				redirect(site_url('backoffice/indexback'));
			}else{
				redirect(site_url('frontoffice/indexfront'));
			}
        }else {
			redirect(site_url('acceuil/return_login'));
		} 
	}

	public function newuseradd(){
		$newname = $this->input->post('newname');
		$newemail = $this->input->post('newemail');
		$newpassword = $this->input->post('newpassword');

		$this->load->model('User_model');

		$this->User_model->insertUser($newname,$newemail,$newpassword);
		$user = $this->User_model->selectuserlogin($newemail,$newpassword);

		if ($user == null) {
			redirect(site_url('acceuil/return_login'));
		}
		else{
			$this->session->set_userdata('user', $user);
			redirect(site_url('frontoffice/indexfront'));
		}


	}

	public function seconnecter(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$this->load->model('User_model');
		$user = $this->User_model->selectuserlogin($email,$password);

		if ($user == null) {
			redirect(site_url('acceuil/return_login'));
		}
		else{
			$this->session->set_userdata('user', $user);
			if ($user['idutilisateur']==1) {
				redirect(site_url('backoffice/indexback'));
			}else{
				redirect(site_url('frontoffice/indexfront'));
			}
		}

	}

	public function deconnexion(){
		$this->session->sess_destroy();
		redirect(site_url('acceuil/return_login'));
	}
	public function return_login(){
		$this->load->view('forms/pages_login');
	}		
	public function register(){
		$this->load->view('forms/pages_register');
	}		
		
}
