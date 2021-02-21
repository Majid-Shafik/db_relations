<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    public function index($id){
        $dept=Department::where('id',$id)->first();
        return "This is insaid UserControllare ". $dept->users;
        //return response($dept);
    }
}
