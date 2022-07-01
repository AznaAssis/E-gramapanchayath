<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\gp;
use App\models\secretary;
use App\models\usertable;
use App\models\category;
use App\models\scheme;

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
        category::insert($data);
        return redirect('/viewcategory');
    }
    public function viewcategory()
    {
        $id=session('sess');
        $data['category']=category::where('gpid',$id)->get();
        return view('gp.viewcategory',$data);
    }
    public function editcategory($id)
    {
        // $id=session('sess');
        $data['category']=category::where('id',$id)->get();
        return view('gp.editcategory',$data);
    }
    public function editcategoryaction(Request $req,$id)
    {
        $cat=$req->input('category');
        $data=['category'=>$cat];
        category::where('id',$id)->update($data);
        return redirect('/viewcategory');
    }
    public function deletecategory($id)
    {
        category::where('id',$id)->delete();
        return redirect('/viewcategory');
    }
    public function managescheme()
    {
        $id=session('sess');
        $data['scheme']=scheme::where('panchayath_id',$id)->get();
        return view('gp.managescheme',$data);
    }
    public function schmeaction(Request $req)
    {
        $pid=session('sess');
        $name=$req->input('name');
        $about=$req->input('about');
        $amount=$req->input('amount');
        $adate=$req->input('adate');
        $endate=$req->input('enddate');
        // echo $endate;
        // exit();
        $data=[
            'panchayath_id'=>$pid,
            'name'=>$name,
            'about'=>$about,
            'amount'=>$amount,
            'adate'=>$adate,
            'enddate'=>$endate,
            'status'=>"available"
        ];
        scheme::insert($data);
        return redirect('/gp/managescheme');
    }
    public function editscheme($id)
    {
        $data['scheme']=scheme::where('id',$id)->get();
        return view('gp.editscheme',$data);
    }
    public function editschemeaction(Request $req,$id)
    {
        // $pid=session('sess');
        $name=$req->input('name');
        $about=$req->input('about');
        $amount=$req->input('amount');
        $adate=$req->input('adate');
        $endate=$req->input('enddate');
        $data=[
            'name'=>$name,
            'about'=>$about,
            'amount'=>$amount,
            'adate'=>$adate,
            'enddate'=>$endate,
            'status'=>"available"
        ];
        scheme::where('id',$id)->update($data);
        return redirect('/gp/managescheme');
    }
    public function viewusers()
    {
        $id=session('sess');
        $panchayth=gp::where('id',$id)->value('name');
        $data['user']=usertable::where('panchayth',$panchayth)->get();
        return view('gp.viewusers',$data);
    }


   
   
}
