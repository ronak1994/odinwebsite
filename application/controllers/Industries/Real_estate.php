
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Real_estate extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Industries/Real_estate');
        $this->load->view('footer');

        
    }
}