<?php
class Login_model extends CI_Model{
    
    public function check_login($usuario,$password){       
        return $this->db->query("select  * from usuarios where  usuario='$usuario' and password='$password'");
    }
    
}