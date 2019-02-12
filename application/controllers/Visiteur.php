<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visiteur extends CI_Controller {
	function __construct() {
		parent::__construct();	
	}
	public function Accueil()
	{
		$info=$this->ModeleInfos->getIdJour();
		if($this->ModeleInfos->getnbinfojour() == 0 )
		{
			$DonneesInjectees['nbinfo']=$this->ModeleInfos->getnbinfojour();
		}else{
			$DonneesInjectees['Informations']=$this->ModeleInfos->GetInfoLocal($info->id);
			$DonneesInjectees['nbinfo']=$this->ModeleInfos->GetnbTxtlocal($info->id);
		}
		$DonneesInjectees['titredelapage']='Accueil';
		$DonneesInjectees['nbJeux']=$this->ModeleJeux->getnbjeux();
		$DonneesInjectees['nbinterview']=$this->Modeleinterview->getnbinterview();
		$DonneesInjectees['nbEvenement']=$this->ModeleEvenement->nbEvenement();
		$DonneesInjectees['Interviews']=$this->Modeleinterview->getLesinterview();
		$DonneesInjectees['InfoLocales']=$this->ModeleInfos->getIdJour();
		$DonneesInjectees['LesEvenements']=$this->ModeleEvenement->LesEvenements();
		$DonneesInjectees['LesJeux']=$this->ModeleJeux->LesJeuxActuelle();

		$this->afficher('Visiteur/Accueil',$DonneesInjectees); 
	}
	

	public function Contact()
	{
		if($this->input->post('btnEnregistrement'))
		{		
		   $this->email->to("morganlb347@gmail.com");
		   $this->email->from($this->input->post('txtEmail'));
		   $this->email->subject('Nom : '.$this->input->post('txtNom').' Prenom:'.$this->input->post('txtPrenom'));
		   $this->email->message('Telephone:'.$this->input->post('txttel').'.'.$this->input->post('txtMsg').'. Ville:'.$this->input->post('txtVille'));
		   $this->email->send();
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
	 public function VoirUnEvenement($id)
	 {
		$DonneesInjectees['UnEvenement']=$this->ModeleEvenement->getEvenement($id);
		$DonneesInjectees['TitredelaPage']="Evenement";
		$this->afficher('Visiteur/VoirUnEvenement',$DonneesInjectees); 
	 }
	 public function VoirUnJeux($id)
	 {
		$DonneesInjectees['UnJeux']=$this->ModeleJeux->Unjeux($id);
		$DonneesInjectees['TitredelaPage']="Evenement";
		$this->afficher('Visiteur/VoirUnjeux',$DonneesInjectees); 
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
	 public function Jeux()
	 {
		$DonneesInjectees['TitredelaPage']="Les Jeux";
		$DonneesInjectees['LesJeux']=$this->ModeleJeux->LesJeuxActuelle();
		$this->afficher('Visiteur/Jeux',$DonneesInjectees);	 
	 }
	 public function inscriptionJeux($id)
	 {

		$DonneesInjectees['TitredeLaPage']="inscriptionJeux";
		$DonneesInjectees['UnJeux']=$this->ModeleJeux->GetLesJeux($id);
		$this->afficher('Visiteur/incriptionJeux',$DonneesInjectees);
		if($this->input->post('btninscription'))
		{		

		  $date=date("Y-m-d H:i:s");
          $DonnesParticipant=array(
			'email'=>$this->input->post('txtEmail'),
			'nom'=>$this->input->post('txtNom'),
			'prenom'=>$this->input->post('txtPrenom'),
			'tel'=>$this->input->post('txttel'),
			'cp'=>$this->input->post('txtcodePostal'),
			'ville'=>$this->input->post('txtVille'),
			 'date'=>$date,
			'jeu'=>$id
		  );
		 
		  $this->ModeleJeux->AjouterParticipant($DonneesPartenaire);
		  
		}
	 }
	 public function IncriptionJeux()
	 {
		if($this->input->post('btninscription'))
		{		

		  $date=date("Y-m-d H:i:s");
          $DonnesParticipant=array(
			'email'=>$this->input->post('txtEmail'),
			'nom'=>$this->input->post('txtNom'),
			'prenom'=>$this->input->post('txtPrenom'),
			'tel'=>$this->input->post('txttel'),
			'cp'=>$this->input->post('txtcodePostal'),
			'ville'=>$this->input->post('txtVille'),
			 'date'=>$date,
			'jeu'=>$this->input->post("txtid")
		  );
		  $this->ModeleJeux->AjouterParticipant($DonnesParticipant);
		  
		  redirect('Visiteur/Accueil','refresh');
		   
		}
	 }

	 public function Programmation(){
		$DonneesInjectees['TitredeLaPage']="Programmation";
		$this->afficher('Visiteur/Programmes',$DonneesInjectees);
	 }
	 public function afficheProgrammation(){
		$data= $this->ModeleEmission->AfficherProgrammation();
		echo json_encode($data);
	 }
	 public function AffichePopup()
	 {
		$this->load->view('Visiteur/PopupRadio'); 
	 }
	private function afficher($page,$DonneesInjectees)
	{
		$this->load->view('Templates/Header');
		$this->load->view($page,$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
