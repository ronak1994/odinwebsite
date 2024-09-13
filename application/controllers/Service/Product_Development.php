
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Development extends CI_Controller {
    public function index() {
        $this->load->view('header');
        $this->load->view('Services/Product_Development');
        $this->load->view('footer');

        
    }
}