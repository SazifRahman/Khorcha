<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
    public function __construct(){

        $this->middleware('auth');

    }

    public function index() {

        return view('admin/dashboard/home');

    }
    public function add(){
        return view('admin.user.add');
    }
    public function all(){
        return view('admin.user.all');
    }

}

    