<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('student')){
            return view('studentDash');
        }elseif(Auth::user()->hasRole('doctor')){
            return view('doctorDash');
        }elseif(Auth::user()->hasRole('admin')){
            return view('adminDash');
        }
    }
    
    public function stuProfile(){
        if(Auth::user()->hasRole('student')){
            return view('studentProfile');
    }}
    public function getDr(){
        if(Auth::user()->hasRole('admin')){
            return view('Doctors');
    }}

    public function addDr(){
        if(Auth::user()->hasRole('admin')){
            return view('addDr');
    }}

    public function getSt(){
        if(Auth::user()->hasRole('admin')){
            return view('Students');
    }}

    public function getCo(){
        if(Auth::user()->hasRole('admin')){
            return view('Courses');
    }}

    public function addCo(){
        if(Auth::user()->hasRole('admin')){
            return view('addCourses');
    }}

    public function getUsers(){
        if(Auth::user()->hasRole('admin')){
            return view('Users');
    }}

    public function addUsers(){
        if(Auth::user()->hasRole('admin')){
            return view('addUsers');
    }}

    public function getPermission(){
        if(Auth::user()->hasRole('admin')){
            return view('Permissions');
    }}

    public function getRoles(){
        if(Auth::user()->hasRole('admin')){
            return view('Roles');
    }}

    
    public function logout () {
        auth()->logout();
        
        return redirect('/');
    }
}
