
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Case_studies extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Portfolio/Case_studies');
        $this->load->view('footer');

        
    }
}