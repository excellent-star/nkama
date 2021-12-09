<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubmitPropertyController extends Controller
{
    //

      public function index(){

                // $countries = Http::get('https://gist.githubusercontent.com/manishtiwari25/0fa055ee14f29ee6a7654d50af20f095/raw/ad7e579ebc6904b9cecd02a8c582d95253cfc4cf/country_state.json')->collect();

                if(session()->has('loggedInUser')){

                    return view('user.submit-property');
                }else{

                    return view('user.submit-property')->with('message_submit_page','you must log in before adding a property');
                }

      }


}
