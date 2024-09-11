
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('About/Careers');
        $this->load->view('footer');

        
    }
}