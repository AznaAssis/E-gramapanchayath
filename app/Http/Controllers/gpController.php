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
        $id = session('sess');
        $data['gp'] = gp::where('id', $id)->get();
        return view('gp.viewdetails', $data);
    }
    public function secretary()
    {
        $id = session('sess');
        // echo $id;
        // exit();
        $panchayth = gp::where('id', $id)->value('name');
        // echo $panchayth;
        // exit();
        $data['gp'] = gp::where('id', $id)->get();
        $data['secretary'] = secretary::where('panchayth', $panchayth)->get();
        return view('gp.secretary', $data);
    }
    public function addsecretaryaction(Request $req)
    {
        $name = $req->input('name');
        $panchayth = $req->input('panchayth');
        $email = $req->input('email');
        $phno = $req->input('phno');
        $password = $req->input('password');
        $username = $req->input('username');
        $data = [
            'name' => $name,
            'email' => $email,
            'phno' => $phno,
            'username' => $username,
            'panchayth' => $panchayth,
            'password' => $password,
        ];
        secretary::insert($data);
        return redirect('/gp/secretary');
    }
    public function editsecretary(Request $req, $sid)
    {
        $id = session('sess');
        $data['gp'] = gp::where('id', $id)->get();
        $data['secretary'] = secretary::where('id', $sid)->get();
        return view('gp.editsecretary', $data);
    }
    public function editsecretaryaction(Request $req, $id)
    {
        $name = $req->input('name');
        $panchayth = $req->input('panchayth');
        $email = $req->input('email');
        $phno = $req->input('phno');
        $password = $req->input('password');
        $username = $req->input('username');
        $data = [
            'name' => $name,
            'email' => $email,
            'phno' => $phno,
            'username' => $username,
            'panchayth' => $panchayth,
            'password' => $password,
        ];
        secretary::where('id', $id)->update($data);
        return redirect('/gp/secretary');
    }
    public function deletesecretary($id)
    {
        secretary::where('id', $id)->delete();
        return redirect('/gp/secretary');
    }
    public function viewapplication()
    {
        return view('gp.viewapplication');
    }
    public function categoryaction(Request $req)
    {
        $id = session('sess');
        $cat = $req->input('category');
        $discription = $req->input('discription');
        $data = [
            'category' => $cat,
            'discription' => $discription,
            'gpid'=>$id
        ];
        category::insert($data);
        return redirect('/gp/category');
    }
    public function category()
    {
        $id = session('sess');
        $data['category'] = category::where('gpid', $id)->get();
        return view('gp.category', $data);
    }
    public function editcategory($id)
    {
        // $id=session('sess');
        $data['category'] = category::where('id', $id)->get();
        return view('gp.editcategory', $data);
    }
    public function editcategoryaction(Request $req, $id)
    {
        $cat = $req->input('category');
        $discription = $req->input('discription');
        $data = [
            'category' => $cat,
            'discription' => $discription
        ];
        category::where('id', $id)->update($data);
        return redirect('/gp/category');
    }
    public function deletecategory($id)
    {
        category::where('id', $id)->delete();
        return redirect('/gp/category');
    }
    public function deletescheme($id)
    {
        scheme::where('id', $id)->delete();
        return redirect('/gp/schemes');
    }
    public function scheme()
    {
        $id = session('sess');
        $data['scheme'] = scheme::where('panchayath_id', $id)->get();
        return view('gp.scheme', $data);
    }
    public function schmeaction(Request $req)
    {
        $pid = session('sess');
        $name = $req->input('name');
        $about = $req->input('about');
        $amount = $req->input('amount');
        $adate = $req->input('adate');
        $endate = $req->input('enddate');
        // echo $endate;
        // exit();
        $data = [
            'panchayath_id' => $pid,
            'name' => $name,
            'about' => $about,
            'amount' => $amount,
            'adate' => $adate,
            'enddate' => $endate,
            'status' => "available"
        ];
        scheme::insert($data);
        return redirect('/gp/schemes');
    }
    public function editscheme($id)
    {
        $data['scheme'] = scheme::where('id', $id)->get();
        return view('gp.editscheme', $data);
    }
    public function editschemeaction(Request $req, $id)
    {
        // $pid=session('sess');
        $name = $req->input('name');
        $about = $req->input('about');
        $amount = $req->input('amount');
        $adate = $req->input('adate');
        $endate = $req->input('enddate');
        $status = $req->input('status');
        $data = [
            'name' => $name,
            'about' => $about,
            'amount' => $amount,
            'adate' => $adate,
            'enddate' => $endate,
            'status' => $status
        ];
        scheme::where('id', $id)->update($data);
        return redirect('/gp/schemes');
    }
    public function viewusers()
    {
        $id = session('sess');
        $panchayth = gp::where('id', $id)->value('name');
        $data['user'] = usertable::where('panchayth', $panchayth)->get();
        return view('gp.viewusers', $data);
    }
    public function viewcertificate()
    {
        return view('gp.viewcertificate');
    }
    public function viewservices()
    {
        return view('gp.viewservices');
    }
}
