<?php

namespace App\Http\Controllers;

use App\Models\secretary;
use App\Models\gp;
use App\Models\usertable;
use App\Models\category;
use Illuminate\Http\Request;

class secretaryController extends Controller
{
    public function index()
    {
        $id=session('sess');
        $data['sec']=secretary::where('id',$id)->get();
        return view('secretary.index',$data);
        
    }
    public function viewdetails ()
    {
        $id=session('sess');
        $data['sec']=secretary::where('id',$id)->get();
        $panchayth=secretary::where('id',$id)->value('panchayth');
        
        $data['gp']=gp::where('name',$panchayth)->get();
        return view('secretary.viewgpdetails',$data);
    }
    public function viewusers()
    {
        return view('secretary.viewusers');
    }
    public function viewcategory()
    {
        $id=session('sess');
        $data['sec']=secretary::where('id',$id)->get();
        $panchayth=secretary::where('id',$id)->value('panchayth');
        $pid=gp::where('name',$panchayth)->value('id');
        $data['category']=category::where('gpid',$pid)->get();
        return view('secretary.viewcategory ',$data);
    }
    public function addnews()
    {
        $id=session('sess');
        $data['sec']=secretary::where('id',$id)->get();
        return view('secretary.addnews',$data);
    }
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
