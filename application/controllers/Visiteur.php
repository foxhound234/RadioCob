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
		$this->load->view('Templates/Header');
		$this->load->view('Visiteur/Accueil',$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
