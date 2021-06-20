<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
		  return view('admin.index');
    }
    
    public function login(){
		  return view('admin.login');
    }
    
    public function register(){
		  return view('admin.register');
    }
    
    public function forgot(){
		  return view('admin.forgot');
    }
    
    public function recoverpassword(){
		  return view('admin.forgot');
    }
    
    public function todo(){
		  return view('admin.todo');
    }
    
    public function projects(){
		  return view('admin.projects');
    }
    
    public function project_add(){
		  return view('admin.project_add');
    }
    
    public function project_edit(){
		  return view('admin.project_edit');
    }
    
    public function project_detail(){
		  return view('admin.project_detail');
	  }
}
