<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\admin;
use App\models\usertable;
use App\models\gp;
use App\models\secretary;
class indexController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    public function userregisteration()
    {
        $data['gp']=gp::get();
        return view('userregisteration',$data);
    }
    public function useraction(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $password=$req->input('password');
        $username=$req->input('username');
        $gender=$req->input('gender');
        $yob=$req->input('yob');
        $age=$req->input('age');
        $nationality=$req->input('nationality');
        $state=$req->input('state');
        $district=$req->input('district');
        $panchayth=$req->input('panchayth');
        $housename=$req->input('housename');
        $streetaddress=$req->input('streetaddress');
        $pfname=$req->input('pfname');
        $pincode=$req->input('pincode');
        $job=$req->input('job');
        $wards=$req->input('wards');
        $marital_status=$req->input('marital_status');
        
        $data=['name'=>$name,
        'email'=>$email,
        'phno'=>$phno,
        'username'=>$username,
        'gender'=>$gender,
        'password'=>$password,
        'yob'=>$yob,
        'age'=>$age,
        'nationality'=>$nationality,
        'state'=>$state,
        'panchayth'=>$panchayth,
        'housename'=>$housename,
        'wards'=>$wards,
        'streetaddress'=>$streetaddress,
        'district'=>$district,
        'pfname'=>$pfname,
        'pincode'=>$pincode,
        'job'=>$job,
        'marital_status'=>$marital_status];
        usertable::insert($data);
        return redirect('/userlogin');
    }
    public function about()
    {
        return view('about');
    }
    public function userlogin()
    {
        return view('userlogin');
    }
    public function adminlogin()
    {
        return view('adminlogin');
    }
    public function slogin()
    {
        return view('secretarylogin');
    }
    public function gplogin()
    {
        return view('gplogin');
    }
    public function userloginaction(Request $req)
    {
        $username=$req->input('username');
        $password= $req->input('password');
        $data=usertable::where('username',$username)->where('password',$password)->first();
        if(isset($data))
        {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/userindex');
        }
        else
        {
                return redirect('/userlogin');
        }
    }
    public function adminloginaction(Request $req)
    {
        $username=$req->input('username');
        $password= $req->input('password');
        $data=admin::where('username',$username)->where('password',$password)->first();
        if(isset($data))
        {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/adminindex');
        }
        else
        {
                return redirect('/adminlogin');
        }
    }
    public function secretaryloginaction(Request $req)
    {
        $username=$req->input('username');
        $password= $req->input('password');
        $data=secretary::where('username',$username)->where('password',$password)->first();
        if(isset($data))
        {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/sindex');
        }
        else
        {
                return redirect('/slogin');
        }
    }
    public function gploginaction(Request $req)
    {
        $username=$req->input('username');
        $password= $req->input('password');
        $data=gp::where('username',$username)->where('password',$password)->first();
        if(isset($data))
        {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/gp/gpindex');
        }
        else
        {
                return redirect('/gplogin');
        }
    }
    public function contact()
    {
        return view('contact');
    }
    public function viewpanchayath()
    {
        $data['gp']=gp::get();
        return view('viewpanchayath',$data);
    }
    public function logout()
    {
        return redirect('/');
    }

}
