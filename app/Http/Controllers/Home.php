<?php

namespace App\Http\Controllers;

use App\Mhome;
use App\Msoal;
use App\Musertest;
use App\room;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'nama' => null
        );
        return view('page/registrasi', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

     //$room_code = room::find(1)->value('kode');

   // if ($request->kode == $room_code) {
            
        $messages = [
            'required' => 'Isi sesuai petunjuk',
            'numeric' => 'attribute wajib dengan nomor atau angka',
            'email' => 'attribute wajib menggunakan format email',
            'exists' => 'room kode salah'
           
        ];

       /* $request->validate([
            'nama'=>'required',
            'usia'=>'required|numeric',
            'email'=>'required|email',
            'j_kel'=>'required',
            'kode' =>'required', Rule::exists('room')->where(function ($query) {
                                $query->where('id', 1);
        })
          
        ], $messages);*/

        Validator::make($request->all(), [
            'nama'=>'required',
            'usia'=>'required|numeric',
            'email'=>'required|email',
            'j_kel'=>'required',
            'kode' => [
                    'required',
                    Rule::exists('room')->where(function ($query) {
                        $query->where('id', 1);
                    }),

                ],
        ],$messages)->validate();



        $soal = Msoal::all();
        
        $data = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'soal' => $soal
        );

        return view('page/test', $data); 


       // }

   // else {
           
    
   // };


        

      
    }

    // postest

    public function postest(Request $request){

        $data = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'dm' => $request->Dm,
            'im' => $request->Im,
            'sm' => $request->Sm,
            'cm' => $request->Cm,
            'bm' => $request->Bm,  
            'dl' => $request->Dl,
            'il' => $request->Il,
            'sl' => $request->Sl,
            'cl' => $request->Cl,
            'bl' => $request->Bl,
        );



        $param = array(
            'nama' => $request->nama,
            'usia' => $request->usia,
            'email' => $request->email,
            'j_kel' => $request->j_kel,
            'dm' => $request->Dm,
            'im' => $request->Im,
            'sm' => $request->Sm,
            'cm' => $request->Cm,
            'bm' => $request->Bm,
            'dl' => $request->Dl,
            'il' => $request->Il,
            'sl' => $request->Sl,
            'cl' => $request->Cl,
            'bl' => $request->Bl
        );

        Musertest::create($param);

        return view('page/done', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mhome  $mhome
     * @return \Illuminate\Http\Response
     */
}
