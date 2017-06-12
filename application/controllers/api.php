<?php

/*
 * Author: Rafael Konrath

 * Assignment: BScH Code Igniter MVC Web service, Digital Skills Academy

 * Student ID: STU-00001214 * Date : 2017/05/08

 * Ref: N/A

 */


defined('BASEPATH') OR exit('No direct script access allowed');

/**
* API Class
*
* Loads framework components.
*
*/
class API extends Weather_Controller {

  /**
  * Method constructor
  *
  * @return	void
  */
  public function __construct(){
     /*
      * Call the Model constructor
      */
      parent::__construct();
  }

 /**
  * Index Page for this controller.
  *
  * API index
  *
  * @return void
  */
	public function index() {

        $this->load->model('APIWeatherModel');

        $json_data = $this->APIWeatherModel->get_city();

        if($json_data) {
            $data = array (
                'json_data' => $json_data
            );

            $this->load->view('APIWeatherView',$data);
        } else {
            $data = array (
                'json_data' => 'Success:False'
            );
            $this->load->view('APIWeatherView',$data);
        }
    }

   /**
    * city
    *
    * Load the model APIWeatherModel
    *
    * Calls the model method get_cityByName by $name
    *
    * @param	string	$name
    * @return void
    */
    public function city($name=NULL) {

      if($name) {
          /*
           * Load the model Class
           */
           $this->load->model('APIWeatherModel');

           /*
            * Load the model Class and save the result
            * on $json_data
            */
            $json_data = $this->APIWeatherModel->get_cityByName($name);

           /*
            * Validate the $json_data return
            *
            */
            if($json_data) {
               /*
                * Save $json_data into array to print
                * on the view as json format
                */
                $data = array (
                    'json_data' => $json_data
                );
                /*
                 * Load the view and pass $data as parameter
                 */
                $this->load->view('APIWeatherView',$data);
            } else {
               /*
                * In case $json_data is false
                * It will create a return array
                * to print as json format
                */
                $data = array (
                    'json_data' => 'Success:False'
                );
                /*
                 * Load the view and pass $data as parameter
                 */
                $this->load->view('APIWeatherView',$data);
            }
        } else {
          /*
           * In case $name is NULL
           * It will create a return array
           * to print as json format
           */
           $data = array (
               'json_data' => 'Success:False'
           );
           /*
            * Load the view and pass $data as parameter
            */
           $this->load->view('APIWeatherView',$data);
        }
 	  }
}
