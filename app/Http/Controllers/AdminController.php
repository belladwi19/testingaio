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
    
    public function services(){
		  return view('admin.services');
    }
    
    public function services_add(){
		  return view('admin.services_add');
    }
}