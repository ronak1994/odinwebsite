
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospitality extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Industries/Hospitality');
        $this->load->view('footer');

        
    }
}