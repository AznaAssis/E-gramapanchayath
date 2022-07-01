<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\gp;
use App\models\secretary;
use App\models\usertable;
class adminController extends Controller
{
   
    public function index()
    {
        return view('admin.index');
        
    }
    public function viewgramapanchayath ()
    {
        $data['gp']=gp::get();
        return view('admin.viewgramapanchayath',$data);
    }
    public function addgaramapanchayath()
    {
        return view('admin.addgaramapanchayath');
    }
    public function addgpaction(Request $req)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $password=$req->input('password');
        $username=$req->input('username');
        $state=$req->input('state');
        $district=$req->input('district');
        $bp=$req->input('bp');
        $taluk=$req->input('taluk');
        $wards=$req->input('wards');
        $population=$req->input('population');
        $schools=$req->input('schools');
        $hospitals=$req->input('hospitals');
        $gpimage=$req->file('gpimage');
        // echo $gpimage;
        // exit();
        $filename=$gpimage->getClientOriginalName();
        $gpimage->move(public_path().'\gp',$filename);
        $data=['name'=>$name,
        'email'=>$email,
        'phno'=>$phno,
        'username'=>$username,
        'bp'=>$bp,
        'password'=>$password,
        'taluk'=>$taluk,
        'population'=>$population,
        'state'=>$state,
        'wards'=>$wards,
        'schools'=>$schools,
        'district'=>$district,
        'hospitals'=>$hospitals,
        'gpimage'=>$filename];
        gp::insert($data);
        return redirect('/addgaramapanchayath');
    }
    public function editgp($id)
    {
        $data['gp']=gp::where('id',$id)->get();;
        return view('admin.editgp',$data);
    }
    public function editgpaction(Request $req,$id)
    {
        $name=$req->input('name');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $password=$req->input('password');
        $username=$req->input('username');
        $state=$req->input('state');
        $district=$req->input('district');
        $bp=$req->input('bp');
        $taluk=$req->input('taluk');
        $wards=$req->input('wards');
        $population=$req->input('population');
        $schools=$req->input('schools');
        $hospitals=$req->input('hospitals');
        $gpimage=$req->file('gpimage');
        if($gpimage=="")
        {
            $data=['name'=>$name,
        'email'=>$email,
        'phno'=>$phno,
        'username'=>$username,
        'bp'=>$bp,
        'password'=>$password,
        'taluk'=>$taluk,
        'population'=>$population,
        'state'=>$state,
        'wards'=>$wards,
        'schools'=>$schools,
        'district'=>$district,
        'hospitals'=>$hospitals,];
        }
        else{
        $filename=$gpimage->getClientOriginalName();
        $gpimage->move(public_path().'\gp',$filename);
        $data=['name'=>$name,
        'email'=>$email,
        'phno'=>$phno,
        'username'=>$username,
        'bp'=>$bp,
        'password'=>$password,
        'taluk'=>$taluk,
        'population'=>$population,
        'state'=>$state,
        'wards'=>$wards,
        'schools'=>$schools,
        'district'=>$district,
        'hospitals'=>$hospitals,
        'gpimage'=>$filename];
        }
        gp::where('id',$id)->update($data);;
        return redirect('/viewgramapanchayath');
    }
    public function deletegp($id)
    {   
        gp::where('id',$id)->delete();
        return redirect('/viewgramapanchayath');
    }
    public function addsecretary()
    {
        $data['gp']=gp::get();
        return view('admin.addsecretary',$data);
    }
    public function addsecretaryaction(Request $req)
    {
        $name=$req->input('name');
        $panchayth=$req->input('panchayth');
        $email=$req->input('email');
        $phno=$req->input('phno');
        $password=$req->input('password');
        $username=$req->input('username');
        $data=['name'=>$name,
        'email'=>$email,
        'phno'=>$phno,
        'username'=>$username,
        'panchayth'=>$panchayth,
        'password'=>$password,
        ];
        secretary::insert($data);
        return redirect('/viewsecretary');
    }
    public function viewsecretary()
    {
       $data['secretary']=secretary::get();
        return view('admin.viewsecretary',$data);
    }
    public function deletesecretary($id)
    {   
        secretary::where('id',$id)->delete();
        return redirect('/viewsecretary');
    }
    public function manageloans()
    {
        return view('admin.manageloans');
    }
    public function viewapplications()
    {
        return view('admin.viewapplications');
    }
    public function viewfeedback()
    {
        return view('admin.viewfeedback');
    }
    public function viewloans()
    {
        return view('admin.viewloans');
    }
    public function viewservices()
    {
        return view('admin.viewservices');
    }
    public function viewusers()
    {
        $data['user']=usertable::get();
        return view('admin.viewusers',$data);
    }
    public function viewcertificates ()
    {
        return view('admin.viewcertificates');
    }
    public function viewcomplaints ()
    {
        return view('admin.viewcomplaints');
    }
}