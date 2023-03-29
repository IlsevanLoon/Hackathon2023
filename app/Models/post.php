<?php
namespace App\Models;

use CodeIgniter\Model;

class post extends Model
{
    public function get_all(){
        return $this->db->query("SELECT * FROM `posts`")->getResult();
    }
}