<?php
   defined('BASEPATH') OR exit('NO direct script access allowed');
   class Welcome extends CI_Controller {
      function Welcome(){
          parent::__construct();

          $this->load->helper('url');
      }
	   public function index()
      {
         $this->load->view('welcome');
      }
   }