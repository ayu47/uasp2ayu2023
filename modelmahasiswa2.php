<?php namespace App\Models;

use CodeIgniter\Model;

class modelmahasiswa2 extends Model
{
    
	
	 public function getMahasiswa2()
    {
		$query = "SELECT mahasiswa.jk ,count(*) as jumlah, maktul.mata_kuliah,mahasiswa.status FROM mahasiswa LEFT JOIN maktul ON mahasiswa.id_matkul = maktul.id_matkul GROUP BY mahasiswa.jk,maktul.mata_kuliah,mahasiswa.status ORDER BY mahasiswa.jk ASC, mahasiswa.status ASC, maktul.mata_kuliah DESC";
		$query=$this->db->query($query);
        return $query->getResultArray();
    }


   
}

?>