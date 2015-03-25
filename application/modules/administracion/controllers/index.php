
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
    public function usuarios()
    {
        $this->load->view('usuarios');
    }
    public function clientes()
    {
        $this->load->view('clientes');
    }
    public function proveedores()
    {
        $this->load->view('proveedores');
    }
    public function productos()
    {
        $this->load->view('productos');
    }
    public function materiales()
    {
        $this->load->view('materiales');
    }
}
