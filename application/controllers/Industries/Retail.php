
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retail extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Industries/Retail');
        $this->load->view('footer');

        
    }
}