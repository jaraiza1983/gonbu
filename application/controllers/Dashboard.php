<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * ????
 * 
 */

class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
	}

	/**
	 * ??? 
	 */
	public function index()
	{
		$this->require_min_level(1); //request user to be logged
		
		
		//Prepare $data for View
		
		//$data['breadcrumbs'] = $breadcrumbs;
		echo $this->blade->view()->make('dashboard.home');
		//echo "Hola esto es el dashboard...";
		
		//echo '<p>Welcome Home</p>';
		
	}
}
