
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_Marketing extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/Performance_Marketing');
        $this->load->view('footer');

        
    }
}