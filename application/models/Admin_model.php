<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_products(){
        $response= file_get_contents('http://localhost/wptest/wp-json/wp/v2/categories?_fields=name');
        return $response;
      
    }

}

  
   
 
