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
			
			$data['menu'] = 'menu_v';//menu
			$data['content'] = 'espaceVisiteur_v';//contenu de la page
			$data['titre'] = 'Gestion des comptes rendus';//titre de la page
			/*
			 * Charge la vue template_v qui prend comme contenu la vue 'espaceVisiteur_v'
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
	
	public function rapport()
	{
		$data['results']=$this->user_model->lstPraticien();
	
		$data['menu'] = 'menu_v';//menu
		$data['content'] = 'rapportVisite_v';//contenu de la page
		$data['titre'] = "Rapport de visite";//titre de la page
		$this->load->view('template_v',$data);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}

}