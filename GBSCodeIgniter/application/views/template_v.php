<?php 
	$this->load->view('header_v');
		/*Charge la vue défini dans le controleur.
		 *Ex : $data['content'] = 'nom de la vue';
		 */
		$this->load->view($content);
	$this->load->view('footer_v');
?>