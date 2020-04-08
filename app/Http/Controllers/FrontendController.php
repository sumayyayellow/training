<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\GroupWork;
use App\Myclass;
use App\Mysection;
use App\Myshift;
use Illuminate\Http\Request;
use DB;
use Session;

class FrontendController extends Controller
{

    public function home(){
        
        
            \Artisan::call('cache:clear');
  \Artisan::call('config:clear');
  \Artisan::call('config:cache');
  \Artisan::call('view:clear');
  //return 'cleared';
       

        return view('site.home');
    }
    
    


}
