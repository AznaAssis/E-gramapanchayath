<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\gp;
use App\models\secretary;
use App\models\usertable;

class gpController extends Controller
{
    
    public function index()
    {
        return view('gp.gpindex');
    }
    public function viewdetails()
    {
        $id=session('sess');
        $data['gp']=gp::where('id',$id)->get();
       return view('gp.viewdetails',$data);
    }
    public function viewsecretary()
    {
        $id=session('sess');
        // echo $id;
        // exit();
        $panchayth=gp::where('id',$id)->value('name');
        // echo $panchayth;
        // exit();
        $data['gp']=secretary::where('panchayth',$panchayth)->get();
        return view('gp.viewsecretary',$data);
    }
    public function viewapplication()
    {
        return view('gp.viewapplication');
    }
    public function addcatecategory()
    {
        return view('gp.addcatecategory');
    }
    public function addcataction(Request $req)
    {
        $id=session('sess');
        $cat=$req->input('category');
        $data=['category'=>$cat,'gpid'=>$id];
        return redirect('/viewcategory');
    }
    public function viewcategory()
    {
        return view('gp.viewcategory');
    }
    public function manageloans()
    {
        return view('gp.manageloans');
    }
    public function viewloans()
    {
        return view('gp.viewloans');
    }


   
   
}
