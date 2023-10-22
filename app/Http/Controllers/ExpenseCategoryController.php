<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller{

    public function __construct(){

        $this->middleware('auth'); }

    public function index(){

        return view('admin.user.all'); }

    public function add(){

        return view('admin.user.add'); }

    public function edit(){
        
        return view('admin.user.edit'); }
    
    public function view(){
        
        return view('admin.user.view'); }

    public function insert(){
        
        return view('admin.user.insert'); }

    public function update(){
        
        return view('admin.user.update'); }

    public function softdelete(){
        
        return view('admin.user.softdelete'); }

    public function restore(){
        
        return view('admin.user.restore'); }

    public function delete(){
        
        return view('admin.user.delete'); }
}
