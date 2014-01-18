<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_c extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){ 	
		parent::__construct();	
		// Appel obligatoire au constructeur parent
		//Chargement : base de donnée, model, helper
		
	}
	public function index()
	{
		/*V�rification des champs s'ils sont valides. xss_clean -> pour eviter les inj�ctions sql*/
		$this->form_validation->set_rules('pseudo','pseudo','trim|required|xss_clean');
		$this->form_validation->set_rules('pass','mot de passe','trim|required|xss_clean');
		$this->load->view('accueil_v');	
	}

}