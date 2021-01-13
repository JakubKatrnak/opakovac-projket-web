<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class cetba_controller extends CI_Controller {
        function  __construct(){
            parent :: __construct();
            $this->load->model('cetba_model');            
        }


public function stol_18_svetova() {

    $header = "hlavicka";

    if (!$this->ion_auth->logged_in())
    {
      $header = "hlavicka";
    }
    else
    $header = "hlavicka_logged_in"; 

    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_18_s'] = $this->cetba_model->get_stol_18_svetova();

    $this->load->view('layout/'.$header, $data);
    $this->load->view('content/stol_18_svetova', $data);
    $this->load->view('layout/paticka');

}
public function stol_19_svetova() {

    $header = "hlavicka";

    if (!$this->ion_auth->logged_in())
    {
      $header = "hlavicka";
    }
    else
    $header = "hlavicka_logged_in"; 
    
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_19_s'] = $this->cetba_model->get_stol_19_svetova();

$this->load->view('layout/'.$header, $data);
$this->load->view('content/stol_19_svetova', $data);
$this->load->view('layout/paticka');

}
public function stol_20_svetova() {

    $header = "hlavicka";

    if (!$this->ion_auth->logged_in())
    {
      $header = "hlavicka";
    }
    else
    $header = "hlavicka_logged_in"; 
    
    
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_20_s'] = $this->cetba_model->get_stol_20_svetova();

$this->load->view('layout/'.$header, $data);
$this->load->view('content/stol_20_svetova', $data);
$this->load->view('layout/paticka');
}

public function stol_20_ceska() {

    $header = "hlavicka";

    if (!$this->ion_auth->logged_in())
    {
      $header = "hlavicka";
    }
    else
    $header = "hlavicka_logged_in"; 
    
    
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();
    $data['knihy_20_c'] = $this->cetba_model->get_stol_20_ceska();

$this->load->view('layout/'.$header, $data);
$this->load->view('content/stol_20_ceska', $data);
$this->load->view('layout/paticka');

}

public function pridej_knihu() {

    $header = "hlavicka";

    if (!$this->ion_auth->logged_in())
    {
      $header = "hlavicka";
    }
    else
    $header = "hlavicka_logged_in"; 
    
    
    
    $data['polozky'] = $this->cetba_model->get_menu_polozky();

$this->load->view('layout/'.$header, $data);
$this->load->view('content/pridej_knihu');
$this->load->view('layout/paticka');

}
}
