
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('About/Company');
        $this->load->view('footer');

        
    }
}