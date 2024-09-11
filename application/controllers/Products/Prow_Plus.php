
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prow_Plus extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Products/Prow_Plus');
        $this->load->view('footer');

        
    }
}