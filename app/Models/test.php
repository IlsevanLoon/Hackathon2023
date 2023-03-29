<?php
namespace App\Models;

use CodeIgniter\Model;

class test extends Model
{
    public function get(){
        return $this->db->query("SELECT * FROM `posts`")->getResult();
    }
}