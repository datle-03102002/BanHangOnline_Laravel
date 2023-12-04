<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryControllers extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function getCategoryById($id){
        return view("Admin.Category.Edit",['id'=>$id]);
    }
}
