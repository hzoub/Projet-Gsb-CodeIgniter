<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){ 	
		
		parent::__construct();	
		
	}
	/**
	  *R�cupere 'le num,le nom et prenom des praticiens par ordre alphab�tique
	  *@author zoubert hanem
	*/
	public function lstPraticien(){
		
		$query = $this->db->query("
									SELECT PRA_NUM,PRA_NOM,PRA_PRENOM 
									FROM praticien 
									ORDER BY PRA_NOM
								 ");
		
		foreach ($query->result() as $row){
			
			$data[] = $row;
			
		}
		
		return $data;
	}

	/**
	  *V�rifie le login et le mot de passe saisie
	  *@param $login
	  *@param $pass
	*/
	function check_id($login,$pass){

		$query = $this->db->query("
									  SELECT VIS_NOM,VIS_DATEEMBAUCHE
									  FROM visiteur 
									  WHERE VIS_NOM ='".$login."'
									  AND VIS_DATEEMBAUCHE ='".$pass."'
								 ");

		if($query->num_rows()>0){

			return true;

		}
		
	}

	/**
	  *Ajoute le rappport de visite dans la bdd
	  *@author zoubert hanem
	  *@param $data
	*/
	public function addRapport($data){
		//Requ�te sql
	}


	/**
	  *Permet d'obtenir les informations compl�tes sur le praticien s�lectionn� 
	  *@author zoubert hanem
	  *@param $nom
	*/
	public function detailsPraticien($id){
		//Requ�te sql
		$query = $this->db->query("
									SELECT PRA_NOM,PRA_PRENOM,PRA_ADRESSE,PRA_CP,PRA_VILLE
									FROM praticien 
									WHERE PRA_NUM ='".$id."'
								 ");
		
		foreach ($query->result() as $row){
			
			$data[] = $row;
			
		}
		
		return $data;
	}
}
?>