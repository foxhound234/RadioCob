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
		$DonneesInjectees['nbinfojour']=$this->modeleInfos->getnbinfojour();
		$DonneesInjectees['titredelapage']='Accueil';
		$DonneesInjectees['LesEmissions']=$this->modeleEmission->RetournerEmission();
		$DonneesInjectees['LesEmissionsAssignée']=$this->modeleEmission->RetournerLesEmissions();
		$DonneesInjectees['LesAnimateurs']=$this->modeleAnimateur->RetournerAnimateur(); 
		$DonneesInjectees['LesEvenements']=$this->modeleEvenement->GetLesEvenements();
		$this->afficher('Admin/AccueilAdmin',$DonneesInjectees);
	}
	public function Deconnexion()
	{
		session_destroy();
	  	redirect('/Visiteur/Accueil', 'refresh');
	}
	public function AjouterEvenement()
	{
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

			$Evenements=$this->modeleEvenement->AjouterEvenement($Donneesevenement);
		  
			redirect('/Admin/Accueil', 'refresh');	
				
		}
	}

	public function Ajouterinfolocal()
	{
		$config['upload_path'] = './assets/son';
		$config['allowed_types'] = '*';
		$config['max_size'] = 250000;
		$name= $_FILES['file']['name'];  
		$type= $_FILES['file']['type'];
		if(isset($_POST['submit'])){
			$dossier='assets/images/';
		}
						
	}
	public function AjouterEmission()
	{
		$config['upload_path']          = './assets/images';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 0 ;
		$config['max_width']            = 0 ;
		$config['max_height']           = 0 ;
         
		$this->upload->initialize($config);
		$nomfichier=$_FILES['txtImages']['name']; 
			if(file_exists($dossier.$nomfichier)|| $nomfichier=='')
			{
				$DonneesEmissions=array(
					'titre'=>$this->input->post('txtTitre'),
				   'description'=>$this->input->post('txtDescription'),
				   'image'=>$nomfichier
				  );
				  $this->modeleEmission->AjouterEmission($DonneesEmissions);
				  redirect('/Admin/Accueil', 'refresh');
			}
			else
			{
				if ( ! $this->upload->do_upload('txtImages'))
				{
						$error =  $this->upload->display_errors();
		
						echo $error;
				}
				else
				{
					$data = $this->upload->data();
					$DonneesEmissions=array(
						'titre'=>$this->input->post('txtTitre'),
					   'description'=>$this->input->post('txtDescription'),
					   'image'=>$data['file_name']
					  );
					  $this->modeleEmission->AjouterEmission($DonneesEmissions);
					  redirect('/Admin/Accueil', 'refresh');
				}
					 
			}
      
		 
	}
	
	public function Ajouterjeux()
	{
		if($this->input->post('btnJeux'))
		{
			$config['upload_path']          = './assets/images';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$config['max_width']            = 2500;
			$config['max_height']           = 2500;
			$this->upload->initialize($config);
			$nomfichier=$_FILES['txtImages']['name']; 
			$dossier='/assets/images/';
				if(file_exists($dossier.$nomfichier)||$nomfichier=='')
				{
						$DonneesJeux=array(
								'Intitule'=>$this->input->post('txtIntitule'),
							   'description'=>$this->input->post('txtDescription'),
							   'fonctionnement'=>$this->input->post('txtFonctionnement'),
							   'image'=>$nomfichier,
							   'debut'=>$this->input->post('txtDateDebut'),
							   'fin'=>$this->input->post('txtDateFin')
							  );
							  $this->modeleJeux->AjouterJeux($DonneesJeux);
							redirect('/Admin/Accueil', 'refresh');
				}
				else{
					if ( ! $this->upload->do_upload('txtImages'))
					{
							$error =  $this->upload->display_errors();
		
							print_r($error);
					}
					else
					{
							$data = $this->upload->data();
							$DonneesJeux=array(
								'Intitule'=>$this->input->post('txtIntitule'),
							   'description'=>$this->input->post('txtDescription'),
							   'fonctionnement'=>$this->input->post('txtFonctionnement'),
							   'image'=>$data['file_name'],
							   'debut'=>$this->input->post('txtDateDebut'),
							   'fin'=>$this->input->post('txtDateFin')
							  );
							  $this->modeleJeux->AjouterJeux($DonneesJeux);
							redirect('/Admin/Accueil', 'refresh');
					}	
				}	
		}
	}
	public function Ajouteranimation()
	{
		if($this->input->post('btnAnimations'))
		{
			$DonneesEmissions=array(
				'emission'=>$this->input->post('txtnoEmission'),
			   'animateur'=>$this->input->post('txtnoAnimateurs')
			  );
			  $this->modeleAnimation->AjouterUneAnimations($DonneesEmissions);
		}
	}
	public function Ajouteranimateur()
	{
		if($this->input->post('btnAnimateur'))
		{
			$config['upload_path']          = './assets/images';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100000;
			$config['max_width']            = 2500;
			$config['max_height']           = 2500;
			$this->upload->initialize($config);
			$nomfichier=$_FILES['txtImages']['name']; 
			$dossier='/assets/images/';
			if(file_exists($dossier.$nomfichier)||$nomfichier=='')
			{
				$DonneesAnimateurs=array(
					'id'=>$this->input->post('txtnom'),
					'nom'=>$this->input->post('txtnom'),
					'presentation'=>$this->input->post('txtPresentations'),
					'photo'=> $nomfichier,
					'site'=>$this->input->post('txtsite'));
				$this->modeleAnimateur->AjoutAnimateur($DonneesAnimateurs);		
			}
			else{
				if ( ! $this->upload->do_upload('txtImages'))
				{
						$error =  $this->upload->display_errors();
	
						print_r($error);
				}
				else
				{
						$data = $this->upload->data();
						$DonneesAnimateurs=array(
							'id'=>$this->input->post('txtnom'),
							'nom'=>$this->input->post('txtnom'),
							'presentation'=>$this->input->post('txtPresentations'),
							'photo'=> $nomfichier,
							'site'=>$this->input->post('txtsite'));

							$this->modeleAnimateur->AjoutAnimateur($DonneesAnimateurs);	
						redirect('/Admin/Accueil', 'refresh');
				}	
			}	
		}
	}



	public function ModifierAnimateurs()
	{
		if($this->input->post('btnAnimateur'))
		{
			$nomfichier=$_FILES['txtImages']['name']; 
			$dossier='/assets/images/';
			$id=$this->input->post('txtnoAnimateurs');
           
				  if($nomfichier=='')
				 {
					$DonneesAnimateurs=array(
						'nom'=>$this->input->post('txtnom'),
						'presentation'=>$this->input->post('txtPresentations'),
						'site'=>$this->input->post('txtsite'),
					   );
				    $this->modeleAnimateur->ModifierAnimateur($DonneesAnimateurs,$id);  		
					redirect('/Admin/Accueil', 'refresh');
				 }

				 if(file_exists($dossier.$nomfichier))
				 {
					$DonneesAnimateurs=array(
						'nom'=>$this->input->post('txtnom'),
						'presentation'=>$this->input->post('txtPresentations'),
						'site'=>$this->input->post('txtsite'),
						'photo'=>$nomfichier
					   );
						$this->modeleAnimateur->ModifierAnimateur($DonneesAnimateurs,$id);  
						redirect('/Admin/Accueil', 'refresh');		
				 }
				 else{
					 if ( ! $this->upload->do_upload('txtImages'))
					 {
							 $error = $this->upload->display_errors();
		 
							 print_r($error);
					 }
					 else
					 {
							 $data = $this->upload->data();
							 $DonneesAnimateurs=array(
								'nom'=>$this->input->post('txtnom'),
								'presentation'=>$this->input->post('txtPresentations'),
								'site'=>$this->input->post('txtsite'),
								'photo'=>$nomfichier
							   );
						    $this->modeleAnimateur->ModifierAnimateur($DonneesAnimateurs,$id); 
							redirect('/Admin/Accueil', 'refresh');
					 }	
				 }	


		}

	}
	public function ModifierEmission()
	{
		if($this->input->post('btnEmission'))
		{
			$nomfichier=$_FILES['txtImages']['name']; 
			$dossier='/assets/images/';
			$id=$this->input->post('txtnoEmission');
           
				  if($nomfichier=='')
				 {
					$DonneesEmissions=array(
						'titre'=>$this->input->post('txtTitre'),
						'description'=>$this->input->post('txtDescription'),
					   );
				    $this->modeleEmission->ModifierEmission($DonneesEmissions,$id);  		
					redirect('/Admin/Accueil', 'refresh');
				 }




				 if(file_exists($dossier.$nomfichier))
				 {
					$DonneesEmissions=array(
						'titre'=>$this->input->post('txtTitre'),
						'description'=>$this->input->post('txtDescription')
					   );
						$this->modeleEmission->ModifierEmission($DonneesEmissions,$id);  		
				 }
				 else{
					 if ( ! $this->upload->do_upload('txtImages'))
					 {
							 $error =  $this->upload->display_errors();
		 
							 print_r($error);
					 }
					 else
					 {
							 $data = $this->upload->data();
							 $DonneesEmissions=array(
								'titre'=>$this->input->post('txtTitre'),
								'description'=>$this->input->post('txtDescription'),
								'image'=>$nomfichier
							   );
								$this->modeleEmission->ModifierEmission($DonneesEmissions,$id);  		
							 redirect('/Admin/Accueil', 'refresh');
					 }	
				 }	


		}
	}
	public function AfficheAnimateurs($id)
	{
		
		$data = $this->modeleAnimateur->RetournerAnimateur($id);
		echo json_encode($data);	
	}
   public function AfficheEmission($id)
   {
		$data = $this->modeleEmission->RetournerEmission($id);
		echo json_encode($data);
   }
   public function AfficheEvenement($id)
   {

   }
	private function afficher($page,$DonneesInjectees)
	{
		$this->load->view('Templates/HeaderAdmin',$DonneesInjectees);
		$this->load->view($page,$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
