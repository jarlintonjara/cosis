
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Usuarios extends MX_Controller
{
    
    public function __construct()
    {
        
        parent::__construct();
        
    }
    
    public function index()
    {
        $this->load->view('clientes');
    }
    public function usuarios()
    {
        $this->load->view('clientes/crear');
    }
}