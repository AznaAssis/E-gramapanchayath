<?php

namespace App\Http\Controllers;

use App\Models\secretary;
use Illuminate\Http\Request;

class secretaryController extends Controller
{
    public function index()
    {
        return view('secretary.index');
        
    }
    // public function viewgramapanchayath ()
    // {
    //     return view('admin.viewgramapanchayath');
    // }
    // public function addgaramapanchayath()
    // {
    //     return view('admin.addgaramapanchayath');
    // }
    // public function addsecretary()
    // {
    //     return view('admin.addsecretary');
    // }
    // public function viewsecretary()
    // {
    //     return view('admin.viewsecretary');
    // }
    // public function manageloans()
    // {
    //     return view('admin.manageloans');
    // }
    // public function viewapplications()
    // {
    //     return view('admin.viewapplications');
    // }
    // public function viewfeedback()
    // {
    //     return view('admin.viewfeedback');
    // }
    // public function viewloans()
    // {
    //     return view('admin.viewloans');
    // }
    // public function viewservices()
    // {
    //     return view('admin.viewservices');
    // }
    // public function viewusers()
    // {
    //     return view('admin.viewusers');
    // }
    // public function viewcertificates ()
    // {
    //     return view('admin.viewcertificates');
    // }
    // public function viewcomplaints ()
    // {
    //     return view('admin.viewcomplaints');
    // }
}
