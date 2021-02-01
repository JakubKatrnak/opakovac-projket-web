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
    $data['error'] = "Přidej knížku";

$this->load->view('layout/'.$header, $data);
$this->load->view('content/pridej_knihu', $data);
$this->load->view('layout/paticka');

}

public function uloz_knihu(){

  $header = "hlavicka";

  if (!$this->ion_auth->logged_in())
  {
    $header = "hlavicka";
  }
  else
  $header = "hlavicka_logged_in"; 
  
  $this->form_validation->set_rules('nazev_knihy', 'Název Knihy', 'required');
  $this->form_validation->set_rules('autor', 'Autor', 'required');
  $this->form_validation->set_rules('prebal', 'Přebal', 'required', 'valid_url');
  
  if ($this->form_validation->run() == FALSE)
  {
    $data['error'] = "Ujistěte se, že jsou všechna pole vyplněná a jedná se o platnout url adresu u přebalu knihy!";
  }
  else
  {
    $n=$this->input->post('nazev_knihy');
    $a=$this->input->post('autor');
    $c=$this->input->post('prebal');
    $p=$this->input->post('obdobi_idobdobi');
    
    $que=$this->db->query("insert into knihy (nazev_knihy, autor, prebal, obdobi_idobdobi) values(?, ?, ?, ?)", [$n, $a, $c, $p]);

    $data['error'] = "Knížka přídána!"; 
  }

  $data['polozky'] = $this->cetba_model->get_menu_polozky();

  $this->load->view('layout/'.$header, $data);
  $this->load->view('content/pridej_knihu', $data);
  $this->load->view('layout/paticka');

}

}
