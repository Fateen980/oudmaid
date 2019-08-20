<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Maid;
use App\Traits\UploadTrait;
use Intervention\Image\ImageManagerStatic as Image;
use Merujan99\LaravelVideoEmbed\Providers\LaravelVideoEmbedServiceProvider as LaravelVideoEmbed;


class MaidController extends Controller
{
    
    use UploadTrait;

    

    public function index()
    {
        $maids    =  DB::table('maids')->orderBy('updated_at', 'desc')->paginate(8);
        $agencies =  DB::table('agencies')->paginate(8);
        $feeds    =  DB::table('feeds')->get();

        $agencyCount    =  DB::table('agencies')->count();


        return view('page', ['maids' => $maids , 'agencies' => $agencies , 'feeds' => $feeds , 'agencyCount' => $agencyCount]);


    }



    public function add(Request $request)  {

            // Form validation



            $validator = Validator::make($request->all(), [
                'name'              =>  'required',
                'profile_image'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'numberofchildren'  =>  'required',
                'introduction'      =>  'required',
                'nationality'       =>  'required|not_in:-1',
                'education'         =>  'required|not_in:-1',
                'language'          =>  'required|not_in:-1',
                'age'               =>  'required|not_in:-1',
                'mStatus'           =>  'required|not_in:-1',
                'religion'          =>  'required|not_in:-1',
                'duty'              =>  'required|not_in:-1'
            ]);


            if ($validator->fails()) {
                return redirect('add')
                            ->withErrors($validator)
                            ->withInput();
            }


            if ($request->has('profile_image')) {

               
                // Get image file
                $image       = $request->file('profile_image');
                $filename    = $image->getClientOriginalName();  
                // Make a image name based on user name and current timestamp
                $name = str_slug($request->input('name')).'_'.time();
                // Define folder path
                $folder = '/img/maid/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath

                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(100, 125);
                $image_resize->save(public_path('img/maid/' .$filename));
                $profile_image = 'img/maid/' .$filename;

                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(250, 300);
                $image_resize->save(public_path('img/maid/real/' .$filename));

                $realPath      = 'img/maid/real/' .$filename;
            }



            //return  $request->all();

            $agency         =  DB::table('users')->where('id' , Auth::id())->first();
            $activeMaids    =  DB::table('maids')->where('isActive',0)->where('agency_id',$agency->agency_id)->count();
            $activeNoMaids  =  DB::table('maids')->where('isActive',1)->where('agency_id',$agency->agency_id)->count();
            $maids          =  DB::table('maids')->orderBy('updated_at', 'desc')->where('agency_id',$agency->agency_id)->paginate(8);
         
            if(is_null($request->input('offDays'))) 
            $offDays = 0;
            else
            $offDays = 1;

            $maid = new Maid;
            $maid->name            = $request->input('name');
            $maid->type            = $request->input('maidType');
            $maid->eduction        = $request->input('education');
            $maid->nationality     = $request->input('nationality');
            $maid->age             = $request->input('age');
            $maid->mStatus         = $request->input('mStatus');
            $maid->refCode         = 100; 
            $maid->language        = $request->input('language');
            $maid->religion        = $request->input('religion');
            $maid->duty            = $request->input('duty');
            $maid->offDays         = $offDays;
            $maid->path            = $profile_image;
            $maid->realPath        = $realPath;
            $maid->introduction    = $request->input('introduction');
            $maid->agency_id       = $agency->agency_id;
            $maid->website         = $request->input('website');
            $maid->numberChildren  = $request->input('numberofchildren');
            $maid->expectedSalary  = $request->input('salary');
            $maid->height          = $request->input('height');
            $maid->weight          = $request->input('weight');
            $maid->isActive        = 0;
          

            $maid->save();

            $maids =  DB::table('maids')->orderBy('updated_at', 'desc')->paginate(8);
            return view('home', ['maids' => $maids  , 'activeMaids' => $activeMaids , 'activeNoMaids' => $activeNoMaids ]);

    }



    public function delete ($id = -1) {

        $deletedRows = Maid::where('id',$id)->delete();
        
        $agency         =  DB::table('users')->where('id' , Auth::id())->first();
        $activeMaids    =  DB::table('maids')->where('isActive',0)->where('agency_id',$agency->agency_id)->count();
        $activeNoMaids  =  DB::table('maids')->where('isActive',1)->where('agency_id',$agency->agency_id)->count();
        $maids          =  DB::table('maids')->orderBy('updated_at', 'desc')->where('agency_id',$agency->agency_id)->paginate(8);
        return view('home',['deleted' => $deletedRows ,  'maids' => $maids  , 'activeMaids' => $activeMaids , 'activeNoMaids' => $activeNoMaids ]);


    }


  public function profile($id = -1) {


 
    $maids    =  DB::table('maids')->where('id' , $id)->get();
    $agencies =  DB::table('agencies')->get();


    //URL to be used for embed generation
    $url = "https://www.youtube.com/watch?v=8eK-5ivYb3o";

    //Optional array of website names, if present any websites not in the array will result in false being returned by the parser
    $whitelist = ['YouTube', 'Vimeo'];

    //Optional parameters to be appended to embed
    $params = [
        'autoplay' => 1,
        'loop' => 1
    ];

    //Optional attributes for embed container
    $attributes = [
    'type' => null,
    'class' => 'iframe-class',
    'data-html5-parameter' => true
    ];



    return view('maid', ['maids' => $maids , 'agencies' => $agencies ]);

  }



    public function show($search = -1 ,Request $request) {


            //return $request->all();
            $newMaidsCount      = DB::table('maids')->where('type','1')->count();
            $transferMaidsCount = DB::table('maids')->where('type','2')->count();
            $exMaidsCount       = DB::table('maids')->where('type','3')->count();
            $englishMaidsCount  = DB::table('maids')->where('language','1')->count();
            $mandarinMaidsCount = DB::table('maids')->where('language','2')->count();
            $newMaidsCount      = DB::table('maids')->where('type','1')->count();



            $FilipinoCount        = DB::table('maids')->where('nationality','1')->count();
            $IndonesianCount      = DB::table('maids')->where('nationality','2')->count();
            $MyanmeseCount        = DB::table('maids')->where('nationality','3')->count();
            $IndianCount          = DB::table('maids')->where('nationality','4')->count();
            $linkaCount           = DB::table('maids')->where('nationality','5')->count();
            $CambodianCount       = DB::table('maids')->where('nationality','6')->count();
            $BangladeshiCount     = DB::table('maids')->where('nationality','7')->count();
            


            $maidTypeWHERE = array('type','<>',0);
         if(request('maidType') !== NULL) 
            $maidTypeWHERE = array('type','=',request('maidType'));
  


                $nationalityWHERE = $nationalityWHERE = array('nationality','<>',0);
            if(request('nationality') !== NULL && request('nationality')  != -1)
                $nationalityWHERE = array('nationality','=',request('nationality'));



                $educationWHERE = array('eduction','<>',0); 
            if(request('education') !== NULL && request('education') != -1)
                $educationWHERE = array('eduction','=',request('education'));
 


                $languageWHERE  = array('language','<>',0); 
            if(request('language') !== NULL && request('language') != -1)
                $languageWHERE = array('language' , '=', request('language'));


                $ageWHERE = array('age' , '<>' , 0);
            if(request('age') !== NULL && request('age') != -1)
                $ageWHERE = array('age' , '=' , request('age'));


                $mStatusWHERE = array('mStatus' , '<>' , 0);
            if(request('mStatus') !== NULL && request('mStatus') != -1)
                $mStatusWHERE = array('mStatus' , '=' , request('mStatus'));

            


         if($search != -1) {



                switch($search){


                    case 1  : $WHERE = array(); break;
                    case 2  : $WHERE = array('language' => 1); break;
                    case 3  : $WHERE = array('language' => 2); break;
                    case 4  : $WHERE = array(); break;
                    case 5  : $WHERE = array('type' => 1); break;
                    case 6  : $WHERE = array('type' => 2); break;
                    case 7  : $WHERE = array('type' => 3); break;
                    case 8  : $WHERE = array('nationality' => 1); break;
                    case 9  : $WHERE = array('nationality' => 2); break;
                    case 10 : $WHERE = array('nationality' => 3); break;
                    case 11 : $WHERE = array('nationality' => 4); break;
                    case 12 : $WHERE = array('nationality' => 5); break;
                    case 13 : $WHERE = array('nationality' => 6); break;
                    case 14 : $WHERE = array('nationality' => 7); break;
                    case 15 : $WHERE = array('nationality' => 8); break;
                    case 16 : $WHERE = array('nationality' => 9); break;
                    case 17 : $WHERE = array('nationality' => 10); break;
                    case 18 : $WHERE = array('nationality' => 11); break;
                    default : $WHERE = ''     ;break;

                }

                
         }



    

        

         //dd($maidTypeWHERE , $nationalityWHERE , $educationWHERE , $ageWHERE , $mStatusWHERE , $languageWHERE);die;

        if(! empty($WHERE)) {

            $maids    =  DB::table('maids')->where($WHERE)->paginate(8);
        }
        else
            $maids    =  DB::table('maids')->where([$maidTypeWHERE , $nationalityWHERE , $educationWHERE , $ageWHERE , $mStatusWHERE , $languageWHERE])
                                           ->orderBy('updated_at', 'desc')
                                           ->paginate(8);



        return view('search',
                             ['maids' => $maids , 
                              'newMaidsCount' => $newMaidsCount , 
                              'transferMaidsCount' => $transferMaidsCount,
                              'exMaidsCount' => $exMaidsCount,
                              'englishMaidsCount' => $englishMaidsCount,
                              'mandarinMaidsCount' => $mandarinMaidsCount,
                              'FilipinoCount' => $FilipinoCount,
                              'IndonesianCount' => $IndonesianCount,
                              'MyanmeseCount'   => $MyanmeseCount,
                              'IndianCount'     => $IndianCount,
                              'linkaCount'      => $linkaCount,
                              'CambodianCount'       => $CambodianCount,
                              'BangladeshiCount'    => $BangladeshiCount
                              ]);



    }



}
