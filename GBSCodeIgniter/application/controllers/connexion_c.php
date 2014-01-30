<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_c extends CI_Controller {

	public function __construct(){ 	
		
		parent::__construct();	
		
	}


	public function index()
	{
		/**
		   *Vérifie si la variable de session "login" ou la varibale de session "logged" existe.
		 */
		if($this->session->userdata('login') || $this->session->userdata('logged')){

	     	redirect('connexion_c/espaceVisiteur');

	    }

		$data['content'] = 'accueil_v';//contenu de la page
		$data['titre'] = "Rapport de visite";//titre de la page
		/**
		   * Charge la vue template_v qui prend comme content la vue 'accueil_v'
		 */
		$this->load->view('template_v',$data);
	}
	
	/**
	   *Connexion à l'espace visiteur
	 */
	public function login()
	{
		 if($this->session->userdata('login') || $this->session->userdata('logged')){

	     	redirect('connexion_c/espaceVisiteur');

	    }
		/*Vérification des champs s'ils sont valides. xss_clean -> pour sécuriser les injéctions sql*/
		$this->form_validation->set_rules('login','login','trim|required|xss_clean');
		$this->form_validation->set_rules('mdp','mot de passe','trim|required|xss_clean');
		/**
		 * Si les champs sont remplis il passe sur le deuxiéme (if)
		*/
		if($this->form_validation->run()){
			/*
			*vérifie les données saisies grâce à la fonction check_id de la class user_model.
			 *Si la fonction check_id de la class user_model renvoie true c'est good :D,
			 */
			if($this->user_model->check_id($this->input->post('login'), $this->input->post('mdp'))){

				$data = array('login'=>$this->input->post('login'), 'logged'=>true);

        		$this->session->set_userdata($data);

        		redirect('connexion_c/espaceVisiteur');
			}
			/*Si non recharge la page d'accueil et affiche un msg d'erreur "Mauvais identifiants" */
			else{

		        $data['error'] = 'Mauvais identifiant';//msg d'erreur 
		       	$data['content'] = 'accueil_v';//contenu de la page
				$data['titre'] = "Rapport de visite";//titre de la page
				$this->load->view('template_v',$data);
      		}
		}
		/* si non recharge la vue accueil_v et affiche un msg d'erreur géré par la fonction html5 requierd*/
		else{
				
			$data['content'] = 'accueil_v';//contenu de la page
			$data['titre'] = "Rapport de visite";//titre de la page
			$this->load->view('template_v',$data);
		
		}
		
	}
	
	/**
	*Cahrge la vue espaceVisiteur_v 
	*/
	public function espaceVisiteur(){
		/*
		 *Vérifie si la variable de session "login" ou la varibale de session "logged" n'existe pas.
		 *---c'est à dire que l'utilisateur n'est pas connécté.--- donc redirige vers l'index
		 */

		if(!$this->session->userdata('login') || !$this->session->userdata('logged')){

	      redirect(site_url());

	    }
	    
	    else{

			$data['menu'] = 'menu_v';//menu
			$data['content'] = 'espaceVisiteur_v';//contenu de la page
			$data['titre'] = 'Gestion des comptes rendus';//titre de la page
			/**
			 * Charge la vue template_v qui prend comme content la vue 'espaceVisiteur_v'
			*/
			$this->load->view('template_v',$data);
		}
	}
	
	/**
		*Cahrge la vue rapportVisite_v 
		*@author zoubert hanem
	*/
	public function rapport()
	{
		if(!$this->session->userdata('login') || !$this->session->userdata('logged')){

	     	 redirect(site_url());

	    }

	    else{
			$data['results']=$this->user_model->lstPraticien();
		
			$data['menu'] = 'menu_v';//menu
			$data['content'] = 'rapportVisite_v';//contenu de la page
			$data['titre'] = "Rapport de visite";//titre de la page
			$this->load->view('template_v',$data);
		}
	}


	/**
	  *Ajoute le rapport dans la base de données ou affiche les details du praticien 
	  *@author zoubert hanem
	*/
	public function addRapport(){

		/*Si c'est le boutton details qui a été cliqué il charge la vue detailsPraticien_v*/
		 if($this->input->post('btnDetails') == "Details") {

		 	/*Recupére les infos de la fonction detailsPraticien() de la classe model user_model() */
			 $data['results'] = $this->user_model->detailsPraticien($this->input->post('lstPraticien'));
	    	 $data['menu'] = 'menu_v';//menu
			 $data['content'] ="detailsPraticien_v";
			 $data['titre'] = "Details praticien";//titre de la page
			 $this->load->view('template_v',$data);

		 }
		 else{

			/*Vérification des champs s'ils sont valides. xss_clean -> pour sécuriser les injéctions sql*/
			$this->form_validation->set_rules('numRapport','num&eacute;ro rapport','trim|required|xss_clean');
			$this->form_validation->set_rules('lstPraticien','praticien','trim|required|xss_clean');
			$this->form_validation->set_rules('date','date','trim|required|xss_clean');
			$this->form_validation->set_rules('motif','motif','trim|required|xss_clean');
			$this->form_validation->set_rules('bilan','bilan','trim|required|xss_clean');
			
			if($this->form_validation->run()){

				/*Récupere les informations saisies dans le formulaire rapport de viste est les stockes dans la variable $recupInfos */
				$recupInfos= array(
									 'num'=>$this->input->post('numRapport'),
									 'praticien'=>$this->input->post('lstPraticien'),
	       							 'date'=>$this->input->post('date'),
	        						 'motif'=>$this->input->post('motif'),
	        						 'bilan'=>$this->input->post('bilan')
								  );
				echo $this->input->post('numRapport')."<br>".
					 $this->input->post('lstPraticien')."<br>".
					 $this->input->post('date')."<br>".
	        		 $this->input->post('motif')."<br>".
	        		 $this->input->post('bilan');

	        	
	    		//$this->user_model->addRapport($recupInfos);

	        		
				}

				else{

					//$data['error'] ="l'ajout du rapport a echou&eacute;";
					$data['results']=$this->user_model->lstPraticien();
					$data['menu'] = 'menu_v';//menu
					$data['content'] = 'rapportVisite_v';//contenu de la page
					$data['titre'] = "Rapport de visite";//titre de la page
					$this->load->view('template_v',$data);
				}
		 }
	  }
	

	/**
	  *Déconnexion du visiteur
	*/
	public function logout()
	{
		$this->session->unset_userdata('login');
    	$this->session->unset_userdata('logged');
		$this->session->sess_destroy();
		redirect(site_url());
	}

}