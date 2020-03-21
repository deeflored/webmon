<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$header_data = array(
			'title' 		=> 'Manage Users',
			'active_class'	=> 'Users'
		);
		$this->load->view('common/ua_header',$header_data);
		$this->load->view('users');
		$this->load->view('common/ua_footer');
	}
	public function role()
	{
		$header_data = array(
			'title' 		=> 'Manage Roles',
			'active_class'	=> 'Roles'
		);
		$this->load->view('common/ua_header',$header_data);
		$this->load->view('roles');
		$this->load->view('common/ua_footer');
	}
}
