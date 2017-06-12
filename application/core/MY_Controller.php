<?php

/*
 * Author: Rafael Konrath

 * Assignment: BScH Code Igniter MVC Web service, Digital Skills Academy

 * Student ID: STU-00001214 * Date : 2017/05/08

 * Ref: N/A

 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Weather_Controller Class
 *
 * Loads framework components.
 *
 */


class Weather_Controller extends CI_Controller {

  /**
  * Method constructor
  *
  * @return	void
  */
  public function __construct()
  {
    /*
     * Call the Model constructor
     */
    parent::__construct();

    /*
     * Load the helper url to load base_url() on view/teamplates/weather.php(CSS/JS/IMAGES)
     */
    $this->load->helper('url');

    /*
     * Load the framework databse libraries instead configure via autoload.php
     */
    $this->load->database();

  }

}
