<?php
/*
 * Author: Rafael Konrath

 * Assignment: BScH Code Igniter MVC Web service, Digital Skills Academy

 * Student ID: STU-00001214 * Date : 2017/05/08

 * Ref: N/A

 */

if(! defined('BASEPATH')) exit('No direct script access allowed');

class APIWeatherModel extends CI_Model {

    /**
    * Method constructor
    *
    * @return	void
    */
    public function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    /**
  	 * get_cityByName
  	 *
  	 * Allows to access database table base on
     * city_name parameter
     * loaded data and return structure
  	 *
  	 * @param	string	$city_name
     * @return object array
  	 */
    public function get_cityByName($city_name) {

       /*
        * Set Query binding based on join between city and conditions for only match record
        * where the $city_name parameter is found
        */
        $query = "SELECT * FROM city JOIN conditions ON conditions.id_city=city.id where city.name = ?";

       /*
        * Fetch the records base on $query binding variable
        * to avoid sql injection
        */
        $fetch_city = $this->db->query($query, $city_name);

       /*
        * Validate the number of rows if greater
        * than zero
        */
        if($fetch_city->num_rows() > 0) {
          /*
           * Set all arrays variables
           */
            $cityList_array["city"] = array();
            $city_array = array();
            $conditions_array = array();

            /*
             * For each result record returned
             * on fetch_city it will populate the
             * array variables
             */
            foreach ($fetch_city->result() as $row_city) {
              /*
               * Set the city_array with data from
               * city table
               */
                $city_array['name'] = $row_city->name;
                $city_array['flag'] = $row_city->flag;
                /*
                 * Set zero values on the array city_array every time
                 * on the loop only for each record on fetch_city
                 */
                $city_array['condition'] = array();

                /*
                 * Set the conditions_array with data from
                 * conditions table
                 */
                $conditions_array['temp'] = $row_city->temp;
                $conditions_array['humidity'] = $row_city->humidity;
                $conditions_array['visibility'] = $row_city->visibility;
                $conditions_array['icon'] = $row_city->icon;

                /*
                 * Push $conditions_array to the city array data
                 * $city_array
                 */
                array_push($city_array['condition'],$conditions_array);

                /*
                 * Push $city_array to the city main array data
                 * $cityList_array
                 */
                array_push($cityList_array["city"],$city_array);

            }
            /*
             * Return the object array
             * $cityList_array to the Controller
             */
            return $cityList_array;

        } else {
          /*
           * Whether $fetch_city->num_rows() is zero
           * It will return false to the Controller
           */
          return false;
        }

    }


    /**
  	 * Public
     *
     * get_city
  	 *
  	 * Allows to access database table base on
     * all records loaded data and return structure
  	 *
  	 * @return object array
  	 */
    public function get_city(){

       /*
        * Set Query based on join between city and conditions for each city records
        */
        $query = "SELECT * FROM city JOIN conditions ON conditions.id_city=city.id";

      /*
       * Fetch the records base on $query variable
       */
        $fetch_city = $this->db->query($query);

       /*
        * Validate the number of rows if greater
        * than zero
        */
        if($fetch_city->num_rows() > 0) {
          /*
           * Set all arrays variables
           */
            $cityList_array["city"] = array();
            $city_array = array();
            $conditions_array = array();

            /*
             * For each result record returned
             * on fetch_city it will populate the
             * array variables
             */
            foreach ($fetch_city->result() as $row_city) {
              /*
               * Set the city_array with data from
               * city table
               */
                $city_array['name'] = $row_city->name;
                $city_array['flag'] = $row_city->flag;
                /*
                 * Set zero values on the array city_array every time
                 * on the loop only for each record on fetch_city
                 */
                $city_array['condition'] = array();

                /*
                 * Set the conditions_array with data from
                 * conditions table
                 */
                $conditions_array['temp'] = $row_city->temp;
                $conditions_array['humidity'] = $row_city->humidity;
                $conditions_array['visibility'] = $row_city->visibility;
                $conditions_array['icon'] = $row_city->icon;

                /*
                 * Push $conditions_array to the city array data
                 * $city_array
                 */
                array_push($city_array['condition'],$conditions_array);

                /*
                 * Push $city_array to the city main array data
                 * $cityList_array
                 */
                array_push($cityList_array["city"],$city_array);

            }
            /*
             * Return the object array
             * $cityList_array to the Controller
             */
            return $cityList_array;

        } else {
          /*
           * Whether $fetch_city->num_rows() is zero
           * It will return false to the Controller
           */
          return false;
      }

    }
}
