<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
   	
    	$users = User::all();
    	//return "$users";
    	return view("index")->with('users', $users);
    }

    public function getUser($id){
    	$user = User::find($id);
    	return $user;
    }
}
