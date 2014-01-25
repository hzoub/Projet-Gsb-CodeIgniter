<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){ 	
		
		parent::__construct();	
		
	}
	/*
	*Récupere la nom et prenom des praticiens par ordre alphabétique
	*/
	public function lstPraticien(){
		
		$query = $this->db->query('
									SELECT PRA_NOM,PRA_PRENOM 
									FROM praticien 
									ORDER BY PRA_NOM
								');
		
		foreach ($query->result() as $row){
			
			$data[] = $row;
			
		}
		
		return $data;
	}
}
?>