<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Model{
    public function helloWorld(){
        $arr = array(
            "name"      => "Hellen Paramita",
            "job_title" => "Chief Information Officer",
            "email"     => "hellen.p@manellen.com",
            "company"   => "Manellen"
        );
        return $arr;
    }
    
    public function fetchUsers(){
        $data = $this->db->query('select * from users');
        return $data->result();
    }
    
    public function insertUser($data){
        return $this->db->insert('users', $data);
    }
}