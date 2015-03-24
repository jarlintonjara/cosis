
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends MX_Controller
{
    
    public function __construct()
    {
        
        parent::__construct();

        
    }
    
    public function index()
    {
        $this->load->view('index');
    }
    
    public function ingreso()
    {
        $this->load->view('kardexin');
    }
    
    public function salida()
    {
        $this->load->view('kardexou');
    }

    public function detalle()
    {
        $this->load->view('kardexdet');
    }
    
    
    
}

