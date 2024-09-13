
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_Media extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/Social_Media');
        $this->load->view('footer');

        
    }
}