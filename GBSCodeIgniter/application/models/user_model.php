<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){ 	
		
		parent::__construct();	
		
	}
	/*
	*Récupere la nom et prenom des praticiens par ordre alphabétique
	*/
	public function lstPraticien(){
		
		$query = $this->db->query("
										SELECT PRA_NOM,PRA_PRENOM 
										FROM praticien 
										ORDER BY PRA_NOM
								 ");
		
		foreach ($query->result() as $row){
			
			$data[] = $row;
			
		}
		
		return $data;
	}

	/*
	*Verifie le pseudo et le mot de passe
	*@param $pseudo
	*@param $pass
	*/
	function check_id($pseudo,$pass){

		$query = $this->db->query("
									  SELECT VIS_NOM,VIS_DATEEMBAUCHE
									  FROM visiteur 
									  WHERE VIS_NOM ='".$pseudo."'
									  AND VIS_DATEEMBAUCHE ='".$pass."'
								 ");

		if($query->num_rows()>0){

			return true;

		}
		
	}
}
?>