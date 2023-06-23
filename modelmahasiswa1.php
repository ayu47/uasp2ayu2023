<?php namespace App\Models;

use CodeIgniter\Model;

class modelmahasiswa1 extends Model
{
    
	
	 public function getMahasiswa1()
    {
		$query = "SELECT  sks,mata_kuliah from maktul ORDER BY sks ASC";
		$query=$this->db->query($query);
        return $query->getResultArray();
    }


   
}

?>