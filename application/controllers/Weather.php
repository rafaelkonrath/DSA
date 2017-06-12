<?php

/*
 * Author: Rafael Konrath

 * Assignment: BScH Code Igniter MVC Web service, Digital Skills Academy

 * Student ID: STU-00001214 * Date : 2017/05/08

 * Ref: N/A

 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Weather extends Weather_Controller {

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
		/*
		 * Load the main view
		 */
		$this->load->view('templates/weather');
	}

}
