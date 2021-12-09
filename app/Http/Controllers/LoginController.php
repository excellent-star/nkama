<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Mail\ForgotPassword;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

      public function login(){

           return view('user.login');
      }

      public function forgot_password(){

            return view('user.forgot_password');
      }


      public function change_password(Request $request){

           $email = $request->email;
           $token = $request->token;

           return view('user.change_password',['email'=>$email,'token'=>$token]);

      }

      public function saveuser(Request $request){


             $validator = Validator::make($request->all(),[

                    'email'=>'required|email|unique:users|max:100',
                    'phone'=>'required',
                    'password'=>'required|min:6|max:50',
                    'confirm_password'=>'required|min:6|same:password'
             ],[

                     'confirm_password.same' =>'Password did not match !',
                     'confirm_password.required' =>'comfirm password is  required !'
             ]);

             if($validator->fails()){

                    return response()->json([

                            'status'=>400,
                            'messages'=>$validator->getMessageBag()
                    ]);
             }else{

                 $user = new User();
                 $user->email = $request->email;
                 $user->phone = $request->phone;
                 $user->password= Hash::make($request->password);

                 $user->save();

                 $linktologin = '<a class="text-success" href="/login">Click here</a>';

                 return response()->json([

                        'status'=>200,
                        'messages'=>'Registered Successfully, you can login now   '.$linktologin.'  !'
                 ]);


             }

      }


      public function loginuser(Request $request){



                $validator = Validator::make($request->all(),[

                       'email'=>'required|email|max:100',
                       'password'=>'required|min:6|max:50'
                ]);

                if($validator->fails()){

                            return response()->json([

                                'status'=>400,
                                'messages'=>$validator->getMessageBag()
                        ]);

                }else{

                       $user = User::where('email',$request->email)->first();

                       if($user){

                                if(Hash::check($request->password,$user->password)){

                                    $request->session()->put('loggedInUser',$user->id);

                                     return response()->json([

                                         'status'=>200,
                                          'messages'=>'success'
                                     ]);

                                }else{


                                    return response()->json([

                                        'status'=>401,
                                         'messages'=>'E-mail or passord is incorrect'
                                    ]);


                                }
                       }else{

                        return response()->json([

                            'status'=>401,
                             'messages'=>'User not found'
                        ]);


                       }
                }


      }



      public function logout(){

                if(session()->has('loggedInUser')){

                        session()->pull('loggedInUser');
                        return redirect('/')->with('message_home_page','Signed out successfully.');
                }else{

                     return back();
                }
      }







      // handle forgot password ajax request


      public function forgot_password_post(Request $request){

           $validator = Validator::make($request->all(),[

                  'email' =>'required|email|max:100'
           ]);


           if($validator->fails()){

                     return response()->json([

                           'status'=>400,
                            'messages'=>$validator->getMessageBag()
                     ]);
           }else{

                     $token = Str::uuid();
                     $user = DB::table('users')->where('email',$request->email)->first();

                     $details =[


                        'body' =>route('change-password',['email'=>$request->email,'token' =>$token])

                     ];

                     if($user){

                          User::where('email',$request->email)->update([

                                'token' =>$token,
                                'token_expire'=>Carbon::now()->addMinutes(10)->toDateTimeString()
                          ]);

                          Mail::to($request->email)->send(new ForgotPassword($details));

                          return response()->json([

                                 'status'=>200,
                                 'messages'=>'Reset password link has been sent to your e-mail'
                          ]);
                     }else{


                            return response()->json([

                                'status'=>401,
                                'messages'=>'This e-mail is not registered with us !'
                        ]);


                     }

           }


      }




      // handle reset password ajax request

      public function reset_password_run(Request $request){


               $validator = Validator::make($request->all(),[

                      'npassword'=>'required|min:6|max:50',
                      'cpassword'=>'required|min:6|max:50|same:npassword'
               ],[

                        'cpassword.same'=>'Password did not match !'
               ]);

               if($validator->fails()){

                    return response()->json([

                             'status'=>400,
                             'messages'=>$validator->getMessageBag()
                    ]);
               }else{




                     $user = DB::table('users')->where('email',$request->email)->whereNotNull('token')->where('token',$request->token)->where('token_expire','>',Carbon::now())->exists();

                    //  dd($user);

                     if($user){

                          User::where('email',$request->email)->update([

                               'password' =>Hash::make($request->npassword),
                               'token'=>null,
                               'token_expire'=>null
                          ]);


                          return response()->json([

                            'status'=>200,
                            'messages'=>'New password updated !&nbsp;<a href="/login">Login Now <a>'
                           ]);
                     }else{

                        return response()->json([

                            'status'=>401,
                            'messages'=>'Reset link expired! Request for a new reset passord link !'
                           ]);
                     }

               }


      }






}
// end of class
