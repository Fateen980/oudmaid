<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FeedController extends Controller
{




    public function index()
    {
 
        $feeds =  DB::table('feeds')->paginate(15);


        return view('feed', ['feeds' => $feeds ]);


    }
}
