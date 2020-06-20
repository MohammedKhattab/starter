<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('Delete','Insert');
    }
    public  function Delete(){
        return "delete";
    }

    public function  Insert(){
        return  "insert";
    }

    public function Modify(){
        return "Modify";
    }
    public function Update(){
        return "Update";
    }
}
