<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\eloguserlogdetails;
use App\Models\PayloadModel;

class ApiController extends Controller
{
    
public function loggg(Request $req){
  
  $user_id =$req->user_id;
  $login_logout_f=$req->login_logout_f;
  $log_id = $req->log_id;
  
  $login_time = $req->login_time;
  $total_hours = 0;
  $now = Carbon::now(); 

  // $rec['user_id'] = $user_id;

if($login_time != '' || $login_time != null){
   
}


        if($login_logout_f === "LogIn"){
            
            $rec['logout_time'] = '';

            $rec['login_time'] = date("Y-m-d H:i:s");
            $rec['total_hours'] = 0;
        
        }else{
            //  $a = DB::table('payload')->select('payload')->where('id',$log_id)->get();
            // $rec['login_time'] = json_decode($a['login_time'])  ;
            $re = payloadModel::find($log_id);
            $payload1 = json_decode($re['payload'],true);
            $rec['login_time'] = $payload1['login_time'];
            $rec['logout_time'] = date("Y-m-d H:i:s");

            $login_date  = Carbon::parse($rec['login_time']);
            $total_hours = $now->diffInHours($login_date);
            $rec['total_hours'] = $total_hours;
             
        }

        $rec['user_id'] = $user_id;
        $rec['log_id'] = $log_id;

        // $res = DB::table('e-log-user-log-details')->insert($rec);
 
        $payload=$rec;
        $payload=json_encode($payload);

    // $res = DB::table('e-log-user-log-details')
    $rec['payload']=$payload;
            
    $res = payloadModel::updateOrCreate(
        ['id' => $log_id],
        $rec
    );
        
        $res = payloadModel::find($res->id);

        $user= User::find($user_id);

        $user_log_data = isset($this->get_result($user)[0])?$this->get_result($user)[0]:'';

  return [$res , $rec , $user_log_data ];

}
// public function totalhour(){
//     $login=UserLog::select('login_time')->where('user_id','1')->value('login_time');
//     $logout=UserLog::select('logout_time')->where('user_id','23')->value('logout_time');
    
//     $to = Carbon::createFromFormat('Y-m-d H:s:i',  $login);

//     $from = Carbon::createFromFormat('Y-m-d H:s:i', $logout);

  

//   $diff_in_hours = $to->diffInHours($from);
//   dd($diff_in_hours);
    // $users=Api::find($id); 
    // $users->update([
       
       
    
    //     'name'=>request('name'),
    //     'email'=> request('email'),
    //    'password'=> request('password'), 
     
// }

public function get_result($user){

    $query ="";
    $query .= "SELECT  * from payload
     WHERE  payload->>'$.user_id'  ='" .$user->id . "'
     AND (DATE(login_time)=CURDATE() OR DATE(logout_time)=CURDATE())
     ORDER BY id DESC 
     LIMIT 1";

    $res = DB::select($query) ; 
    return $res;

}

}

