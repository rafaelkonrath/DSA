<?php

/*
 * Author: Rafael Konrath

 * Assignment: BScH Code Igniter MVC Web service, Digital Skills Academy

 * Student ID: STU-00001214 * Date : 2017/05/08

 * Ref: N/A

 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Set Header
 *
 * Lets you set a server header which will be sent with the final output.
 *
 * To avoid ajax error "No Access-Control-Allow-Origin header is present on the requested resource."
 * header('Access-Control-Allow-Origin:*')
 *
 */
$this->output
        ->set_status_header(200)
        ->set_header('Access-Control-Allow-Origin:*')
        ->set_content_type('application/json','utf-8')
        ->set_output(json_encode($json_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));


?>
