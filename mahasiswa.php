<?php
namespace App\Controllers;
use App\Models\modelmahasiswa;

class mahasiswa extends BaseController
{
    function __construct(){
		$this->modelmahasiswa = new modelmahasiswa();
	}
	public function index()
	{
	    $data['mahasiswa'] = $this->modelmahasiswa->getmahasiswa();
		
		return view('mahasiswa', $data);
	}
}	
?>