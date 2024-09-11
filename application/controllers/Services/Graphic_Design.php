
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Graphic_Design extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/Graphic_Design');
        $this->load->view('footer');

        
    }
}