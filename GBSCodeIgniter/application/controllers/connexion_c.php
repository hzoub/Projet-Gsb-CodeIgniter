<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_c extends CI_Controller {

	public function __construct(){ 	
		
		parent::__construct();	
		// Appel obligatoire au constructeur parent
		//Chargement : base de donnÃ©e, model, helper
		
	}
	public function index()
	{
		/*Vérification des champs s'ils sont valides. xss_clean -> pour sécuriser les injéctions sql*/
		$this->form_validation->set_rules('login','login','trim|required|xss_clean');
		$this->form_validation->set_rules('mdp','mot de passe','trim|required|xss_clean');
		/**
		 * Si les champs sont remplis il charge la vue menu_v ;)
		 */
		if($this->form_validation->run()){
			
			$data['content'] = 'menu_v';//contenu de la page
			$data['titre'] = 'test';//titre de la page
			/*
			 * Charge la vue template_v qui prend comme contenu la vue 'menu_v' et titre 'test'
			 */
			$this->load->view('template_v',$data);
		}
		/* si non recharge la vue accueil_v*/
		else{
			
			$data['content'] = 'accueil_v';//contenu de la page
			$data['titre'] = "Rapport de visite";//titre de la page
			$this->load->view('template_v',$data);
			
		}
			
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}

}