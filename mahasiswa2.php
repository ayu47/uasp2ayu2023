<?php
namespace App\Controllers;
use App\Models\modelmahasiswa2;

class mahasiswa2 extends BaseController
{
    function __construct(){
		$this->modelmahasiswa2 = new modelmahasiswa2();
	}
	public function index()
	{
	    $data['mahasiswa2'] = $this->modelmahasiswa2->getmahasiswa2();
		
		return view('mahasiswa2', $data);
	}
}	
?>