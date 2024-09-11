
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chargesol extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Products/Chargesol');
        $this->load->view('footer');

        
    }
}