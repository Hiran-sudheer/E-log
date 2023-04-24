<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\PayloadModel;
use Carbon\Carbon;

class ElogController extends Controller
{
    

public function home(Request $req)
{
    $user=Auth::user();

    $now = Carbon::now();
    $StartDate = $now->startOfWeek()->format('Y-m-d');
    $EndDate = $now->endOfWeek()->format('Y-m-d');

    // echo $StartDate.' - '.$EndDate; exit;

    // $sql = "SELECT MAX(id) as id, DATE(login_time) as login_date, MIN(TIME(login_time)) as login_time, MAX(TIME(logout_time)) as logout_time
    // FROM `e-log-user-log-details`
    // WHERE (DATE(login_time) >= '".$StartDate."' AND DATE(login_time) <= '".$EndDate."') 
    // GROUP BY DATE(login_time)";
    // $reso = DB::select($sql);
    //  //print_r($reso); exit;
    // $LoginTimes = array();
    // foreach($reso as $k => $v)
    // {
    //     $LoginTimes[$v->login_date] = $v;
    // }
    // $data = array(
    //     'user'=>$user,
    //     'StartDate'=>$StartDate,
    //     'EndDate'=>$EndDate,    
    //     'LoginTimes'=>$LoginTimes,        
    // );
    // $a =  payloadModel::find([33]);
    // $b = json_decode($a);

    // print_r($b);
    // exit;

   $res = $this->get_result($user);
//    print_r($res);
//    exit;
   $week_data = $this->getweekdata($user);
    return view('e-log-home.e-log-home', ['user'=>$user , 'log_data'=>$res , 'week_data'=>$week_data,]);

}

public function get_result($user){

    // $query ="";
    // $query .= "SELECT  * from `payload`";
    // $query .= " WHERE  payload->>'$.user_id' as user_id ='" .$user->id . "'";
    // $query .= " AND (DATE(payload->>'$.login_time' as login_time)=CURDATE() OR DATE(payload->>'$.logout_time' as logout_time)=CURDATE())";
    // $query .= " ORDER BY id DESC ";
    // $query .= "LIMIT 1";

    // $query=" select id, 
    // payload->>'$.user_id' as user_id,
    // payload->>'$.login_time' as login_time,
    // payload->>'$.logout_time' as logout_time,
    // from payload";

    
    $query = "SELECT  * 
        from payload
        WHERE  payload->>'$.user_id'  ='" .$user->id . "' 
        AND (DATE(payload->>'$.login_time' )=CURDATE() OR DATE (payload->>'$.logout_time')=CURDATE())
        ORDER BY id DESC 
        LIMIT 1";


    $res = DB::select($query) ; 
    return $res;

}

public function getweekdata($user){

    // $query=" select id, 
    // payload->>'$.login_time' as login_time,
    // payload->>'$.logout_time' as logout_time,
    // payload->>'$.total_hours' as total_hours
    // from payload";




    $query ="";
    $query .= "SELECT  * , 
     ifnull(DAYNAME(payload->>'$.login_time'),DAYNAME(payload->>'$.logout_time' )) as DAY, 
     TIMESTAMP(payload->>'$.login_time') as login_time,TIMESTAMP(payload->>'$.logout_time' ) as logout_time ,(payload->>'$.total_hours')  as total_hours
     from payload
     
     WHERE  payload->>'$.user_id'  ='" .$user->id . "' ";

    // WHERE week(payload->>'$.login_time' )=week(now()) 
    // OR 
    // week(payload->>'$.logout_time' )=week(now())

    // $res = DB::select($query) ; 

    

    // $query=" SELECT 
    // Id, 
    // JSON_VALUE(payload,'$.login_time') AS login_time, 
    // JSON_VALUE(payload,'$.logout_time') AS logout_time 
    // FROM
    // payload";
    $res = DB::select($query) ; 
    // dd($res);
      return $res;
}



}
