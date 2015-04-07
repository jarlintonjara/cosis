<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class Kardex extends MX_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') == 'kardex')
		{
			redirect(base_url().'login/login');
		}
		$data['titulo'] = 'Bienvenido de nuevo ' .$this->session->userdata('perfil');
		$this->load->view('kardex/index',$data);
	}
}