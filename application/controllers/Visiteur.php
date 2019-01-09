<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiteur extends CI_Controller {
    public function _construct()
    {
     parent::_construct();
    }

	public function Accueil()
	{
		$DonneesInjectees['titredelapage']='Accueil';
		$this->afficher('Visiteur/Accueil',$DonneesInjectees); 
	}
	public function afficherEvenement()
	{


	}

	public function Contact()
	{

	}

	 public function Partenaires()
	 {

	 }
	 public function APropos()
	 {
	  $DonneesInjectees['DesAnimateurs']=$this->ModeleAnimateur->RetournerAnimateur();
	  $DonneesInjectees['TitredelaPage']="A propos";
	  $this->afficher('Visiteur/APropos',$DonneesInjectees);
	 }
	 public function VoirUnAnimateur($id)
	 {
		$DonneesInjectees['UnAnimateur']=$this->ModeleAnimateur->RetournerAnimateur($id);
		$DonneesInjectees['TitredelaPage']="VoirUnAnimateur";
		$this->afficher('Visiteur/VoirUnAnimateur',$DonneesInjectees);
	 }
	private function afficher($page,$DonneesInjectees)
	{
		$this->load->view('Templates/Header');
		$this->load->view($page,$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
