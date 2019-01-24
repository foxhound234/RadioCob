<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiteur extends CI_Controller {
	function __construct() {
		parent::__construct();	
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
	 
	 public function ConnexionAdmin()
	 {
		$DonneesInjectees['TitredelaPage']="Admin";
		$DonneesInjectees['Erreur']="";
		$this->afficher('Visiteur/Connexion',$DonneesInjectees);
		if($this->input->post('btnConnexion'))
		{
			$DonnesDeConnexion=array(
				'login'=>$this->input->post('txtLogin'),
				'password'=>$this->input->post('txtPassword')
				);
				$UtilisateurRetourner=$this->ModeleAdmin->RetournerAdmin($DonnesDeConnexion);
		  if($UtilisateurRetourner==null)
		  {
			log_message('error',' erreur veuillez Ressaisir');
		  }
		  else{
			$this->session->Login=$UtilisateurRetourner->login;
			$this->session->profil=$UtilisateurRetourner->type;  
			redirect('/Admin/Accueil', 'refresh');
		  }

		}
	 }
	 public function LesEvenements()
	 {
		$DonneesInjectees['TitredelaPage']="Les Evenements";
		$DonneesInjectees['LesEvenements']=$this->ModeleEvenement->LesEvenements();
		$this->afficher('Visiteur/Evenement',$DonneesInjectees);
		
	 }
	private function afficher($page,$DonneesInjectees)
	{
		$this->load->view('Templates/Header');
		$this->load->view($page,$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
