
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aestheics_AI extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Products/Aestheics_AI');
        $this->load->view('footer');

        
    }
}