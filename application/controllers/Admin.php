<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function _construct()
    {
     parent::_construct();
    }

	public function Accueil()
	{
		$DonneesInjectees['titredelapage']='Accueil';
		$this->afficher('Admin/AccueilAdmin',$DonneesInjectees);
	}
	public function Deconnexion()
	{
		session_destroy();
	  	redirect('/Visiteur/Accueil', 'refresh');
	}
	public function AjouterEvenement()
	{
		$DonneesInjectees['titredelapage']='Evenement';
		$this->afficher('Admin/AjoutEvenement',$DonneesInjectees);
		if($this->input->post('btnEvenement'))
		{
		 
			$Donneesevenement=array(
			  'titre'=>$this->input->post('txtTitre'),
			 'description'=>$this->input->post('txtDescription'),
			 'periode'=>$this->input->post('txtPeriode'),
			 'position'=>1,
			  'debut'=>$this->input->post('txtDateDebut'),
			  'fin'=>$this->input->post('txtDateFin')
			);

			$this->ModeleEvenement->AjouterEvenement($Donneesevenement);
			

		}
	}
	private function afficher($page,$DonneesInjectees)
	{
		$this->load->view('Templates/Header');
		$this->load->view($page,$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
