<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct(){ 	
		
		parent::__construct();	
		
	}
	/**
	  *Récupere le num , le nom et prenom des praticiens par ordre alphabétique
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
	  *Vérifie le login et le mot de passe saisie
	  *@param $login
	  *@param $pass
	*/
	public function check_id($login,$pass){

		$query = $this->db->query("
									  SELECT VIS_NOM,VIS_DATEEMBAUCHE
									  FROM visiteur 
									  WHERE VIS_NOM ='".$login."'
									  AND VIS_DATEEMBAUCHE ='".$pass."'
								 ");

		if($query->num_rows()>0){

			$bool = true;

		}
		else{

			$bool = false;
		}

		return $bool;
		
	}

	/**
	  *Renvoie le matricule du visiteur
	  *@param $nomVisiteur
	*/
	public function recupMatricule($nomVisiteur){

		$query = $this->db->query("
									  SELECT VIS_MATRICULE
									  FROM visiteur 
									  WHERE VIS_NOM ='".$nomVisiteur."'
								 ");

		foreach ($query->result() as $row){
			
			$data[] = $row;

			foreach ($data as $recupMatricule){

				$matricule = $recupMatricule->VIS_MATRICULE;
			}
		}
		return $matricule;
		
	}

	/**
	  *Ajoute le rappport de visite dans la bdd
	  *@author zoubert hanem
	  *@param $data
	*/
	public function addRapport($data){

		$this->db->insert('rapport_visite',$data);

		if($this->db->affected_rows()>0){

			$bool = true;

		}

		else{

			$bool = false;

		}
		return $bool;
	}


	/**
	  *Renvoie les informations complètes sur le praticien sélectionné 
	  *@author zoubert hanem
	  *@param $id
	*/
	public function detailsPraticien($id){
		//Requête sql
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