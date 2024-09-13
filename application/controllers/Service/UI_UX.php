
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UI_UX extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/UI_UX');
        $this->load->view('footer');

        
    }
}