
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Industries/Education');
        $this->load->view('footer');

        
    }
}