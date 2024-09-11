
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_Maintenance extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/Website_Maintenance');
        $this->load->view('footer');

        
    }
}