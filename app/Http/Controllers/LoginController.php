<?php

namespace App\Http\Controllers;
use App\Models\Logins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
 function show(){
    $data= logins::all();
    return view('Footer',['loginUsers'=>$data]);
 }

 function addData(Request $req)
 {

    $validated = $req->validate([
        'name' => 'required',
        'location' => 'required',
        'password' => 'required|min:8',
        'email' => 'required|email|unique:logins'
    ]);
    $adding= new logins;
    $adding->name=$req->name;
    $adding->location=$req->location;
    $adding->email=$req->email;
    $adding->password=$req->password;


    if( $validated)
    {
    echo "<script>";
    echo "alert('Success');";
    echo "</script>";
    $adding->save();
    }

 }

 function userLogin(Request $req)
 {
    $validate = $req->validate([

        'email' => 'required',
        'password' => 'required|min:8',

    ]);
    $password = $req->input('password');
    $emails=logins::where('email', $req->email)->first();
    if ($validate && $emails )
    {

     $user = logins::where('password', '=', $password)->first();
     if($user && $emails )
     {
        echo "<script>";
        echo "alert('Successfully logined ');";
        echo "</script>";

     }
     else{
      echo "<script>";
      echo "alert(' Credentials Fails ');";

      echo "</script>";
   }


    }

     }

    //  username fetch
 function profileShow($user){
$user=logins::find($user);

return view('/index',
[
'user'=> $user,
]);

 }

 }

