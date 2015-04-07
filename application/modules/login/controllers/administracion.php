<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class Administracion extends MX_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'administracion')
		{
			redirect(base_url().'login/login');
		}
		$data['titulo'] = 'Bienvenido Administrador';
		$this->load->view('panel/index',$data);
	}
}