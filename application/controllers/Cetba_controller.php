<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class cetba_controller extends CI_Controller {
        function  __construct(){
            parent :: __construct();
            $this->load->model('cetba_model');            
        }

    
          

public function stol_18_svetova() {
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_18_s'] = $this->cetba_model->get_stol_18_svetova();

    $this->load->view('layout/hlavicka', $data);
    $this->load->view('content/stol_18_svetova', $data);
    $this->load->view('layout/paticka');

}
public function stol_19_svetova() {
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_19_s'] = $this->cetba_model->get_stol_19_svetova();

$this->load->view('layout/hlavicka', $data);
$this->load->view('content/stol_19_svetova', $data);
$this->load->view('layout/paticka');

}
public function stol_20_svetova() {
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_20_s'] = $this->cetba_model->get_stol_20_svetova();

$this->load->view('layout/hlavicka', $data);
$this->load->view('content/stol_20_svetova', $data);
$this->load->view('layout/paticka');
}

public function stol_20_ceska() {
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_20_c'] = $this->cetba_model->get_stol_20_ceska();

$this->load->view('layout/hlavicka', $data);
$this->load->view('content/stol_20_ceska', $data);
$this->load->view('layout/paticka');

}
}
