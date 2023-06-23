<?php namespace App\Models;

use CodeIgniter\Model;

class modelmahasiswa extends Model
{
    
	
	 public function getMahasiswa()
    {
		$query = "SELECT mahasiswa.jk, count(*) as jumlah, maktul.mata_kuliah FROM mahasiswa LEFT JOIN maktul on maktul.id_matkul = mahasiswa.id_matkul 
GROUP BY mahasiswa.jk, maktul.mata_kuliah
ORDER BY mahasiswa.jk Asc, maktul.mata_kuliah desc";
		$query=$this->db->query($query);
        return $query->getResultArray();
    }


   
}

?>