
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_App extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/Mobile_App');
        $this->load->view('footer');

        
    }
}