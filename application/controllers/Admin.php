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
	private function afficher($page,$DonneesInjectees)
	{
		$this->load->view('Templates/Header');
		$this->load->view($page,$DonneesInjectees);
		$this->load->view('Templates/pieddepage');
	}
}
