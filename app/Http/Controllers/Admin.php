<?php

namespace App\Http\Controllers;

use App\Mnomor;
use App\Musertest;
use App\room;
use imluminate\Http\Request;

class Admin extends Controller
{
    public function index(){

    	$nomor = Mnomor::get();
    	$data = array(
    		'no' => $nomor
    	);

    	return view('admin/home'); 
    }

    public function usertest(){
    	$hasil = Musertest::get();
    	$data = array(
    		'hasil' => $hasil
    	);

    	return view('admin/usertest', $data);
    }


    public function showroom(){
        $hasil = room::get();
        $data = array(
            'hasil' => $hasil
        );

        return view('admin.room', compact('hasil'));
       // return view('adlin/room', $data);
    }

    public function lihathasil($musertest){
    	$hasim = Musertest::where('id', $musertest)->get();

    	foreach($hasim as $data){
        	$array = json_decode($data, true);
        };

        $mptype=array();

        $mostarray = array($array['dm'],$array['im'],$array['sm'],$array['cm']);
 
        rsort($mostarray);
        
        for ($x = 0; $x < 2;) {

            switch($mostarray[$x]) {

            case $array['dm'] :
                if ($array['dm'] <= 24 && $array['dm'] >= 13) {
                    $mptype[] = "D";
                    $x = 2;

                } elseif ($array['dm'] <= 12 && $array['dm'] >= 9 ) {                
                   $mptype[] = "D";
                    $x++;
                } 
                elseif ($array['dm'] <= 8 && $array['dm'] >= 5 ) {                
                    $mptype[] = "D";
                    $x++;
                } 
                elseif ($array['dm'] <= 4 && $array['dm'] >= 3 ) {                
                   $mptype[] = "D";
                    $x++;
                } 
                elseif ($array['dm'] <= 2 && $array['dm'] >= 1 ) {                
                   $mptype[] = "D";
                    $x++;
                } else {
                    break;
                };
            break;
            
            case $array['im'] :
                if ($array['im'] <= 24 && $array['im'] >= 10) {
                    $mptype[] = "I";
                    $x = 2;
                } elseif ($array['im'] <= 9 && $array['im'] >= 6 ) {                
                    $mptype[] = "I";
                    $x++;
                } elseif ($array['im'] <= 5 && $array['im'] >= 3 ) {                
                   $mptype[] = "I";
                    $x++;
                } elseif ($array['im'] <= 2 && $array['im'] >= 2 ) {                
                    $mptype[] = "I";
                    $x++;
                } elseif ($array['im'] <= 1 && $array['im'] >= 0 ) {                
                    $mptype[] = "I";
                    $x++;
                } else {
                    break;
                };


            break;

            case $array['sm'] :
                if ($array['sm'] <= 24 && $array['sm'] >= 12) {
                   $mptype[] = "S";
                    $x = 2;
                } elseif ($array['sm'] <= 11 && $array['sm'] >= 8 ) {                
                   $mptype[] = "S";
                    $x++;
                } elseif ($array['sm'] <= 7 && $array['sm'] >= 5 ) {                
                   $mptype[] = "S";
                    $x++;
                } elseif ($array['sm'] <= 4 && $array['sm'] >= 3 ) {                
                    $mptype[] = "S";
                    $x++;
                } elseif ($array['sm'] <= 2 && $array['sm'] >= 0 ) {                
                   $mptype[] = "S";
                    $x++;
                } else {
                    break;
                };
            break;

            case $array['cm'] :
                if ($array['cm'] <= 24 && $array['cm'] >= 12) {
                    $mptype[] = "C";
                    $x = 2;
                } elseif ($array['cm'] <= 11 && $array['cm'] >= 8 ) {                
                    $mptype[] = "C";
                    $x++;
                } elseif ($array['cm'] <= 7 && $array['cm'] >= 5 ) {                
                     $mptype[] = "C";
                    $x++;
                } elseif ($array['cm'] <= 4 && $array['cm'] >= 3 ) {                
                     $mptype[] = "C";
                    $x++;
                } elseif ($array['cm'] <= 2 && $array['cm'] >= 0 ) {                
                    $mptype[] = "C";
                    $x++;
                } else{
                    break;
                };
            break;
            };   

     
    } 
       

       
   
        $lptype = array();

        $leastarray = array($array['dl'],$array['il'],$array['sl'],$array['cl']);

        rsort($leastarray);
 
 for ($x = 0; $x < 2;) { 
       switch($leastarray[$x]) {

            case $array['dl'] :
                if ($array['dl'] <= 24 && $array['dl'] >= 13) {
                    $lptype[] = "D";
                    $x = 2;

                } elseif ($array['dl'] <= 12 && $array['dl'] >= 9 ) {                
                   $lptype[] = "D";
                    $x++;
                } 
                elseif ($array['dl'] <= 8 && $array['dl'] >= 5 ) {                
                    $lptype[] = "D";
                    $x++;
                } 
                elseif ($array['dl'] <= 4 && $array['dl'] >= 3 ) {                
                   $lptype[] = "D";
                    $x++;
                } 
                elseif ($array['dl'] <= 2 && $array['dl'] >= 1 ) {                
                   $lptype[] = "D";
                    $x++;
                } else {
                    break;
                };
            break;
            
            case $array['il'] :
                if ($array['il'] <= 24 && $array['il'] >= 10) {
                    $lptype[] = "I";
                    $x = 2;
                } elseif ($array['il'] <= 9 && $array['il'] >= 6 ) {                
                    $lptype[] = "I";
                    $x++;
                } elseif ($array['il'] <= 5 && $array['il'] >= 3 ) {                
                   $lptype[] = "I";
                    $x++;
                } elseif ($array['il'] <= 2 && $array['il'] >= 2 ) {                
                    $lptype[] = "I";
                    $x++;
                } elseif ($array['il'] <= 1 && $array['il'] >= 0 ) {                
                    $lptype[] = "I";
                    $x++;
                } else {
                    break;
                };


            break;

            case $array['sl'] :
                if ($array['sl'] <= 24 && $array['sl'] >= 12) {
                   $lptype[] = "S";
                    $x = 2;
                } elseif ($array['sl'] <= 11 && $array['sl'] >= 8 ) {                
                   $lptype[] = "S";
                    $x++;
                } elseif ($array['sl'] <= 7 && $array['sl'] >= 5 ) {                
                   $lptype[] = "S";
                    $x++;
                } elseif ($array['sl'] <= 4 && $array['sl'] >= 3 ) {                
                    $lptype[] = "S";
                    $x++;
                } elseif ($array['sl'] <= 2 && $array['sl'] >= 0 ) {                
                   $lptype[] = "S";
                    $x++;
                } else {
                    break;
                };
            break;

            case $array['cl'] :
                if ($array['cl'] <= 24 && $array['cl'] >= 12) {
                    $lptype[] = "C";
                    $x = 2;
                } elseif ($array['cl'] <= 11 && $array['cl'] >= 8 ) {                
                    $lptype[] = "C";
                    $x++;
                } elseif ($array['cl'] <= 7 && $array['cl'] >= 5 ) {                
                     $lptype[] = "C";
                    $x++;
                } elseif ($array['cl'] <= 4 && $array['cl'] >= 3 ) {                
                     $lptype[] = "C";
                    $x++;
                } elseif ($array['cl'] <= 2 && $array['cl'] >= 0 ) {                
                    $lptype[] = "C";
                    $x++;
                } else{
                    break;
                };
            break;

            };   
    }

    	$data = array(
    		'nama' => $array['nama'],
            'usia' => $array['usia'],
            'email' => $array['email'],
            'j_kel' => $array['j_kel'],
            'dm' => $array['dm'],
            'im' => $array['im'],
            'sm' => $array['sm'],
            'cm' => $array['cm'],
            'bm' => $array['bm'],
            'dl' => $array['dl'],
            'il' => $array['il'],
            'sl' => $array['sl'],
            'cl' => $array['cl'],
            'bl' => $array['bl'],
            'mptype' => $mptype,
            'lptype' => $lptype,
    	);
    	return view('page/postest', $data);
    }
}
