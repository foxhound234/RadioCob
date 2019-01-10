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
		if($this->input->post('btnEnregistrement'))
		{
		 $client=array(
		   'nom' => $this->input->post('txtNom'),
 
		   'prenom' => $this->input->post('txtPrenom'),
 
		   'adresse'=>$this->input->post('txtadresse'),
 
		   'ville'=>$this->input->post('txtVille'),
 
		   'codePostal'=>$this->input->post('txtcodePostal'),
 
		   'email'=>$this->input->post('txtEmail'),
 
		   'motdePasse'=>$this->input->post('txtMdp')
		   ); 
		   
		}
		
	}

	 public function Partenaires()
	 {
		$DonneesInjectees['DesPartenaires']=$this->ModelePartenaires->getLespartenaires();
		$DonneesInjectees['TitredelaPage']="Les Partenaires";
		$this->afficher('Visiteur/Partenaires',$DonneesInjectees);
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
