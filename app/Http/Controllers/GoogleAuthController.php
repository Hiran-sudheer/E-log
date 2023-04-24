<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
// use App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use DB;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {
        /*try{
            $google_user=Socialite::driver('google')->user();
            $user=User::where('google_id',$google_user->getId())->first();
            if(!$user)
            {
                $new_user=User::firstOrNew([
                    'name'=>$google_user->getName(),
                    'email'=>$google_user->getEmail(),
                    'google_id'=>$google_user->getId()
                ]);
                Auth::login($new_user);
                return redirect()->intended('dashboard');
            }
            else{
                Auth::login($user);
                return redirect()->intended('dashboard');
            }
       /* }catch(\Throwable $th){
            dd('Something went wrong'.$th->getMessage());
        }*/
        // $res = DB::table('users')
        // ->updateOrInsert(
        // ['email'=>$user->email,'name'=>$user->name   ],
        // ['remember_token'=>$user->token , 'password'=>$user->token]
        // );
        $data=Socialite::driver('google')->user();
        //dd($data);
        $user = User::firstOrNew(['email'=>$data->email,'name'=>$data->name ]);
        $user->remember_token = $data->token ; 
        $user->password = $data->token;
        // $user->profile_image=$data->avatar;
        $user->profile_image=$data->avatar;
        $user->save();
        

        if($user){
      
                Auth::login($user);
                // dd($user);
                return redirect('e-log-home');
        }
    
    }
    
}

