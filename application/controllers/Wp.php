<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Wp extends RestController {


public function __construct()
{
        parent::__construct();
        $this->load->model('wp_model');

        
}


 }