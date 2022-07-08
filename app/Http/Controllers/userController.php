<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\usertable;
use App\models\gp;
use App\models\scheme;
use App\models\category;
use App\models\schemeapplication;
use App\models\birthcertificate;
use App\models\deathcertificate;
use App\models\marriagecertificate;

class userController extends Controller
{

    public function userindex()
    {

        $id = session('sess');
        $data['user']=usertable::where('id',$id)->get();
        return view('user.userindex',$data);
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
        $userid = session('sess');
        $data['scheme'] = scheme::join('gps', 'gps.id', '=', 'schemes.panchayath_id')
            ->join('usertables', 'usertables.panchayth', '=', 'gps.name')
            ->where('usertables.id', $userid)
            ->where('schemes.id', $id)
            ->get();
        return view('user.readscheme', $data);
    }
    public function applyscheme($id)
    {
        $userid = session('sess');
        $data['scheme'] = scheme::where('id', $id)->get();
        $data['user'] = usertable::where('id', $userid)->get();
        return view('user.forms.schemeapplyform', $data);
    }
    public function schemeapllyaction(Request $req, $id)
    {
        $userid = session('sess');
        $date = $req->input('date');
        $data = [
            'schemeid' => $id,
            'userid' => $userid,
            'date' => $date
        ];
        schemeapplication::insert($data);
    }
    public function applycertificates($name)
    {
        if ($name == "birth certificate") {
            return view('user.forms.birthform');
        } elseif ($name == "death certificate") {
            return view('user.forms.deathform');
        } elseif ($name == "marriage(common)" || $name == "marriage(Hindu)") {
            return view('user.forms.marriageform');
        } else {
            return view('user.forms.commonform');
        }
    }
    public function birthcertificateaction(Request $req)
    {
        $id = session('sess');
        $panchayth = usertable::where('id', $id)->value('panchayth');
        $gpid = gp::where('name', $panchayth)->value('id');
        $childname = $req->input('cname');
        $fathernname = $req->input('fname');
        $mothername = $req->input('mname');
        $dob = $req->input('dob');
        $permenantaddress = $req->input('paddress');
        $currentaddress = $req->input('caddress');
        $gender = $req->input('gender');
        $birthplace = $req->input('birthplace');
        $applicationdate = $req->input('applicationdate');
        $bill = $req->file('bill');
        $filename = $bill->getClientOriginalName();
        $bill->move(public_path() . '\certificate', $filename);
        $data = [
            'gpid' => $gpid,
            'userid' => $id,
            'childnname' => $childname,
            'mothername' => $mothername,
            'fathernname' => $fathernname,
            'dob' => $dob,
            'permenantaddress' => $permenantaddress,
            'currentaddress' => $currentaddress,
            'gender' => $gender,
            'birthplace' => $birthplace,
            'applicationdate' => $applicationdate,
            'bill' => $filename
        ];
        birthcertificate::insert($data);
        return redirect('/view');
    }
    public function deathcertificateaction(Request $req)
    {
        $id = session('sess');
        $panchayth = usertable::where('id', $id)->value('panchayth');
        $gpid = gp::where('name', $panchayth)->value('id');
        $name = $req->input('name');
        $fathernname = $req->input('fname');
        $mothername = $req->input('mname');
        $dod = $req->input('dob');
        $gender = $req->input('gender');
        $applicationdate = $req->input('appdate');
        $bill = $req->file('bill');
        $filename = $bill->getClientOriginalName();
        $bill->move(public_path() . '\certificate', $filename);
        $rcard = $req->file('rcard');
        $filename2 = $rcard->getClientOriginalName();
        $rcard->move(public_path() . '\certificate', $filename2);
        $certificate = $req->file('certificate');
        $filename3 = $certificate->getClientOriginalName();
        $certificate->move(public_path() . '\certificate', $filename3);
        $data = [
            'gpid' => $gpid,
            'userid' => $id,
            'name' => $name,
            'mothername' => $mothername,
            'fathernname' => $fathernname,
            'dod' => $dod,
            'rcard' => $filename2,
            'certificate' => $filename3,
            'gender' => $gender,
            'applicationdate' => $applicationdate,
            'bill' => $filename
        ];
        deathcertificate::insert($data);
        return redirect('/view');
    }
    public function marrigecertificateaction(Request $req)
    {
        $id = session('sess');
        $panchayth = usertable::where('id', $id)->value('panchayth');
        $gpid = gp::where('name', $panchayth)->value('id');
        $hidproof = $req->file('hidproof');
        $filename = $hidproof->getClientOriginalName();
        $hidproof->move(public_path() . '\certificate', $filename);
        $widproof = $req->file('widproof');
        $filename1 = $widproof->getClientOriginalName();
        $widproof->move(public_path() . '\certificate', $filename1);
        $hphoto = $req->file('hphoto');
        $filename2 = $hphoto->getClientOriginalName();
        $hphoto->move(public_path() . '\certificate', $filename2);
        $wphoto = $req->file('wphoto');
        $filename3 = $wphoto->getClientOriginalName();
        $wphoto->move(public_path() . '\certificate', $filename3);
        $hname = $req->input('hname');
        $wname = $req->input('wname');
        $mtype = $req->input('mtype');
        $hrelegion = $req->input('hrelegion');
        $wrelegion = $req->input('wrelegion');
        $hcast = $req->input('hcast');
        $wcast = $req->input('wcast');
        $hage = $req->input('hage');
        $wage = $req->input('wage');
        $hoccupation = $req->input('hoccupation');
        $woccupation = $req->input('woccupation');
        $data = [
            'gpid' => $gpid,
            'mtype' => $mtype,
            'userid' => $id,
            'hname' => $hname,
            'wname' => $wname,
            'hphoto' => $filename2,
            'wphoto' => $filename3,
            'hrelegion' => $hrelegion,
            'wrelegion' => $wrelegion,
            'hcast' => $hcast,
            'wcast' => $wcast,
            'hage' => $hage,
            'wage' => $wage,
            'hoccupation' => $hoccupation,
            'woccupation' => $woccupation,
            'hidproof' => $filename,
            'widproof' => $filename1,
        ];
        marriagecertificate::insert($data);
        return redirect('/view');
    }
    public function viewusercertificate()
    {
        $id = session('sess');
        $data['certificate'] = category::join('gps', 'gps.id', '=', 'categories.gpid')
            ->join('usertables', 'usertables.panchayth', '=', 'gps.name')
            ->where('usertables.id', $id)
            ->select('categories.id', 'categories.category')->get();
        return view('user.viewcertificate', $data);
    }
    public function view($name)
    {
        $id = session('sess');
        if ($name == "birth certificate") {
            $data['birth']=birthcertificate::where('userid',$id)->get();
            return view('user.birthview',$data);
        } elseif ($name == "death certificate") {
            $data['death']=deathcertificate::where('userid',$id)->get();
            return view('user.deathview',$data);
        } elseif ($name == "marriage(common)") {
            $data['marriage']=marriagecertificate::where('userid',$id)->where('mtype',"common")->get();
            return view('user.marriageview',$data);
        }
        elseif ($name == "marriage(Hindu)") {
            $data['marriage']=marriagecertificate::where('userid',$id)->where('mtype',"hindu")->get();
            return view('user.marriageview',$data);
        } else {
            return redirect('/viewusercertificate');
        }
    }
}

