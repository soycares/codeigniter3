<?php if (!defined( 'BASEPATH')) exit('No direct script access allowed'); 
class Seguridad
{
	private $ci;
	public function __construct()
	{
		$this->ci =& get_instance();
		!$this->ci->load->library('session') ? $this->ci->load->library('session') : false;
		!$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;
	}	
 
	public function check_login()
	{
            $url = uri_string();
            $admin = substr($url,0,5);
            if ($admin == "admin" && !$this->ci->session->userdata('admin_usuario') && $admin != false && $url != "admin/login") {
                redirect("admin/login");
            }
	}
}
?>