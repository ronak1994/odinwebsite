
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client’s extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Portfolio/Client’s');
        $this->load->view('footer');

        
    }
}