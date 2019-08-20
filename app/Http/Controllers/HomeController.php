<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $agency         =  DB::table('users')->where('id' , Auth::id())->first();
        $activeMaids    =  DB::table('maids')->where('isActive',0)->where('agency_id',$agency->agency_id)->count();
        $activeNoMaids  =  DB::table('maids')->where('isActive',1)->where('agency_id',$agency->agency_id)->count();
        $maids          =  DB::table('maids')->orderBy('updated_at', 'desc')->where('agency_id',$agency->agency_id)->paginate(8);

        
        return view('home',['maids' => $maids , 'activeMaids' => $activeMaids , 'activeNoMaids' => $activeNoMaids]);
    }
}
