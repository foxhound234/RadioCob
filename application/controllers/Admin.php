<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!($this->session->profil=='A'))
		{
		 redirect('Visiteur/ConnexionAdmin','Refresh');
		}
		
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

			$Evenements=$this->ModeleEvenement->AjouterEvenement($Donneesevenement);
		  
			redirect('/Admin/Accueil', 'refresh');	
				
		}
	}

	public function AjouterInfosLocal()
	{
		$DonneesInjectees['titredelapage']='Evenement';
		$DonneesInjectees[''];
	}
	public function ModifierLesEvenements()
	{
		$DonneesInjectees['titredelapage']='Modifier les Evenement';
		$DonneesInjectees['LesEvenements']=$this->ModeleEvenement->GetLesEvenements();
		$this->afficher('Admin/ModifierEvenements',$DonneesInjectees);
	}
	public function ModifierUnEvenement($id)
	{
		$DonneesInjectees['titredelapage']='Modifier les Evenement';
		$DonneesInjectees['LesEvenements']=$this->ModeleEvenement->GetLesEvenements($id);

	}
	private function afficher($page,$DonneesInjectees)
	{
		$this->load->view('Templates/Header');
		$this->load->view($page,$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
