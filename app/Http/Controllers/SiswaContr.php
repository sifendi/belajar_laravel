<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaContr extends Controller{
    
    public function index(){
    	// return "Halo ini adalah method index, dalam controller Siswa";
    	$nama ="afendi";
    	$alamat ="bondowoso";
    	$hobby =["sepakbola","futsal","badminton","tidur"];
    	// return view ('biodata_siswa',['nama' =>$nama , 'alamat' =>$alamat]);
    	return view ('biodata_siswa',['nama' =>$nama , 'alamat' =>$alamat , 'hobby' => $hobby]);
    }

}
