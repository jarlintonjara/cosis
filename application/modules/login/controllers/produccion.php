<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class Produccion extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'produccion')
		{
			redirect(base_url().'login/login');
		}
		$data['titulo'] = 'Bienvenido a la web '.$this->session->userdata('perfil');
		$this->load->view('produccion/index',$data);
	}
}