
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jewellery extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Industries/Jewellery');
        $this->load->view('footer');

        
    }
}