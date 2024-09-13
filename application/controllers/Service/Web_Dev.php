
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Dev extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/Web_Dev');
        $this->load->view('footer');

        
    }
}