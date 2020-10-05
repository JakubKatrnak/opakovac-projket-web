<?php

if( ! defined('BASEPATH')) exit('No direct script access allowed');

class cetba_model extends CI_Model {

    public function get_menu_polozky(){
        
        $this->db->select('categorie, id_categorie');
		$this->db->from('menu');
        $this->db->order_by('idmenu');
        
        $query = $this->db->get();
        return $query->result();
    }

    public function get_stol_18_svetova(){
        
        $this->db->select('nazev_knihy, autor, prebal');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=1');
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();

    }

    public function get_stol_19_svetova(){
        
        $this->db->select('nazev_knihy, autor, prebal');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=2');
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();

    }

    public function get_stol_20_svetova(){
        
        $this->db->select('nazev_knihy, autor, prebal');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=3');
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();

    }

    public function get_stol_20_ceska(){
        
        $this->db->select('nazev_knihy, autor, prebal');
        $this->db->from('knihy');
        $this->db->where('obdobi_idobdobi=4');
        $this->db->order_by('id_knihy');
        
        $query = $this->db->get();
        return $query->result();

    }
}