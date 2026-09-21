<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function insertUser(Request $req){
            DB::table('users')->insert([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password)

            ]);

                return redirect('/');

    }

    public function ShowUser(){
        $users = DB::table('users')->paginate(2)->fragment('user');
        return view('/user',['userData' => $users]);
    }

    public function deleteUser($id){
    
    DB::table('users')
    ->where('id',$id)
    ->delete();
    
     return redirect('/');

    }

    public function editUser($id){
       $users =  DB::table('users')->where('id',$id)->get();
       return view('/single',['singleUser' => $users]);
    }
   
   public function showUpdate($id){
    $users = DB::table('users')->where('id',$id)->get();
    return view('update_user',['data' => $users]);
   }
    
   public function updateUser(Request $req,$id){

      DB::table('users')->where('id',$id)->update([
        'name' => $req->name,
        'email' => $req->email,
      ]);

      return redirect('/');
   }
   

}
