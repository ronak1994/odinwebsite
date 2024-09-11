
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manufacturing extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Industries/Manufacturing');
        $this->load->view('footer');

        
    }
}