<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\usertable;
use App\models\gp;
use App\models\scheme;
use App\models\category;
use App\models\schemeapplication;


class userController extends Controller
{

    public function userindex()
    {
        return view('user.userindex');
    }
    public function editprofile()
    {
        $id = session('sess');
        $data['gp'] = usertable::join('gps', 'gps.name', '=', 'usertables.panchayth')
            ->where('usertables.id', $id)
            ->get();
        $data['user'] = usertable::where('id', $id)->get();
        return view('user.editprofile', $data);
    }
    public function editprofileaction(Request $req)
    {
        $id = session('sess');
        $name = $req->input('name');
        $email = $req->input('email');
        $phno = $req->input('phno');
        $password = $req->input('password');
        $username = $req->input('username');
        $nationality = $req->input('nationality');
        $state = $req->input('state');
        $district = $req->input('district');
        $panchayth = $req->input('panchayth');
        $housename = $req->input('housename');
        $streetaddress = $req->input('streetaddress');
        $pfname = $req->input('pfname');
        $pincode = $req->input('pincode');
        $job = $req->input('job');
        $wards = $req->input('wards');
        // echo $wards;
        // exit();
        $marital_status = $req->input('marital_status');

        $data = [
            'name' => $name,
            'email' => $email,
            'phno' => $phno,
            'username' => $username,
            'password' => $password,
            'nationality' => $nationality,
            'state' => $state,
            'panchayth' => $panchayth,
            'housename' => $housename,
            'wards' => $wards,
            'streetaddress' => $streetaddress,
            'district' => $district,
            'pfname' => $pfname,
            'pincode' => $pincode,
            'job' => $job,
            'marital_status' => $marital_status
        ];
        usertable::where('id', $id)->update($data);
        return redirect('/userindex');
    }
    public function viewpanchayath()
    {
        $id = session('sess');
        $data['gp'] = usertable::join('gps', 'gps.name', '=', 'usertables.panchayth')
            ->where('usertables.id', $id)
            ->get();
        return view('user.viewpanchayath', $data);
    }
    public function schemesandcertificate()
    {
        $id = session('sess');
        $data['scheme'] = scheme::join('gps', 'gps.id', '=', 'schemes.panchayath_id')
            ->join('usertables', 'usertables.panchayth', '=', 'gps.name')
            ->where('usertables.id', $id)
            ->select('schemes.id', 'schemes.name', 'schemes.amount')->get();
        $data['certificate'] = category::join('gps', 'gps.id', '=', 'categories.gpid')
            ->join('usertables', 'usertables.panchayth', '=', 'gps.name')
            ->where('usertables.id', $id)
            ->select('categories.id', 'categories.category', 'categories.discription')->get();
        return view('user.schemesandcertificate', $data);
    }
    public function readscheme($id)
    {
        $userid=session('sess');
        $data['scheme'] = scheme::join('gps', 'gps.id', '=', 'schemes.panchayath_id')
            ->join('usertables', 'usertables.panchayth', '=', 'gps.name')
            ->where('usertables.id', $userid)
            ->where('schemes.id', $id)
            ->get();
        return view('user.readscheme',$data);
    }
    public function applyscheme($id)
    {
        $userid=session('sess');
        $data['scheme']=scheme::where('id',$id)->get();
        $data['user']=usertable::where('id',$userid)->get();
        return view('user.forms.schemeapplyform',$data);
    }
    public function schemeapllyaction(Request $req, $id)
    {
        $userid=session('sess');
        $date=$req->input('date');
        $data=[
            'schemeid'=>$id,
            'userid'=>$userid,
            'date'=>$date
        ];
        schemeapplication::insert($data);
    }
    public function applycertificates($name)
    {
        if($name=="birth certificate")
        {
            return view('user.forms.birthform');
        }
        elseif($name=="death certificate")
        {
            return view('user.forms.deathform');
        }
        elseif($name=="marriage(common)"||$name=="marriage(Hindu)")
        {
            return view('user.forms.marriageform');
        }
        else
        {
            return view('user.forms.commonform');
        }
    }
    public function view()
    {
        return view('user.viewcertificate');
    }
}
