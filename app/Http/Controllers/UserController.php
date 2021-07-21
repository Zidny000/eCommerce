<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use App\Verify;
use App\Mail\SendMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
        public function userregister(){





            $this->validate(request(),[
               'name' => 'required | alpha_dash',
                'email' => 'required | email | unique:users,email',
                'password' => 'required | min:5 | confirmed'
            ]);



           User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password'=> bcrypt(request('password') ),
                'type' => 'user'

            ]);

            if(Auth::attempt(['email'=>request('email') , 'password' => request('password'), 'type' => 'user' ])){
                return redirect('/index');
            }


        }


        public function userlogin(){
            $this->validate(request(),[
                'email' => 'required',
                'password' => 'required'
            ]);

           
            if(Auth::attempt(['email'=>request('email') , 'password' => request('password') , 'type' => 'user' ])){
                return redirect('/index');
            }
            elseif (Auth::attempt(['email'=>request('email') , 'password' => request('password') , 'type' => 'admin' ])){
               
                return redirect('/admin/adminDashboard');
            }
            elseif (Auth::attempt(['email'=>request('email') , 'password' => request('password') , 'type' => 'mod' ])){
                return redirect('/admin/adminDashboard');
            }
            else{
                return redirect()->back()->with('error','Credentials does not match');

            }
        }

        public function logout(){
            Auth::logout();
            return redirect('/index');
        }


        public function reset(){

            $result = User::where('email',\request('email'))->get();



            if(count($result) == 1){

                $result = $result->first()->id;


                $token = Verify::create([
                    'token' => md5(rand()),
                    'user_id' => $result

                ]);



            }



            Mail::to(request('email'))->send( new SendMail($token->token) );
            return view('reset');


        }

        public function remake(){
            $this->validate(request(),[
                    'token' => 'required',
                    'password' => 'required | min:5 | confirmed'
                ]);

            $result = Verify::where('token',request('token'))->get();

            $result = $result->first()->user_id;
            User::find($result)->update([
                'password' => bcrypt(\request('password'))
            ]);

            Verify::where('token',request('token'))->delete();

            return redirect('/');



        }

        public function message(){

            Message::create([
                'email' => \request('email'),
                'message' => \request('message')
            ]);

            return redirect()->back();
        }

        public function messageDelete($id){
            Message::find($id)->delete();
            return redirect()->back();
        }
}
