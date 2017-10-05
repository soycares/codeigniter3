<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home {

	private $ci;
	
	public function __construct()
	{
		$this->ci = $get_instance();
		!$this->ci->load->library('session') ? $this->ci->load->library('session') : false;
		!$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;
	}
	
	public function check_login()
	{
		// solo validar login para paginas de administracion
		$pagina = substr($this->ci->uri_string(),0,5);
		if ($pagina == 'admin' && !$this->ci->session->userdata('admin_usuario'))
		{
			redirect(base_url('admin/login'));
		}
	}

	public function estadisticas()
	{
		// solo validar login para paginas de administracion
		$pagina = substr($this->ci->uri_string(),0,5);
		
		$data = array('fecha' => 'now()',
			'ip' => $_SERVER['REMOTE_ADDR'],
			'pagina' => $pagina);
		$this->ci->db->insert('log_accesos',$data);
	}
}
?>