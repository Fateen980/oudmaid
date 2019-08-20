<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AgencyController extends Controller
{

    public function index()
    {
 
        $agencies =  DB::table('agencies')->paginate(15);


        return view('agency', ['agencies' => $agencies ]);


    }


    public function profile($id) {

        $agency =  DB::table('agencies')->where('id',$id)->get();
       
        return view('agencyProfile', ['agencies' => $agency ]);


    }


    public function join() {


        return view('agencyJoin');

    }




}
