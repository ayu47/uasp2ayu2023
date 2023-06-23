<?php
namespace App\Controllers;
use App\Models\modelmahasiswa1;

class mahasiswa1 extends BaseController
{
    function __construct(){
		$this->modelmahasiswa1 = new modelmahasiswa1();
	}
	public function index()
	{
	    $data['mahasiswa1'] = $this->modelmahasiswa1->getmahasiswa1();
		
		return view('mahasiswa1', $data);
	}
}	
?>