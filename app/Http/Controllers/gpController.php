<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\gp;
use App\models\secretary;
use App\models\usertable;
use App\models\category;
use App\models\scheme;
use App\models\schemeapplication;
use App\models\birthcertificate;
use App\models\marriagecertificate;
use App\models\deathcertificate;

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
            'gpid' => $id
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
    public function viewscheme($id)
    {
        $gpid = session('sess');
        $data['scheme'] = schemeapplication::join('schemes', 'schemes.id', '=', 'schemeapplications.schemeid')
            ->join('gps', 'gps.id', '=', 'schemes.panchayath_id')
            ->where('gps.id', $gpid)
            ->where('schemes.id', $id)
            ->where('schemeapplications.schemeid', $id)
            ->select(
                'schemeapplications.id',
                'schemeapplications.userid',
                'schemeapplications.date',
                'schemeapplications.status',
                'schemes.name'
            )
            ->get();
        return view('gp.viewscheme', $data);
    }
    public function viewcertificate($name)
    {
        $id = session('sess');
        if ($name == "birth certificate") {
            $data['birth'] = birthcertificate::join('gps', 'gps.id', '=', 'birthcertificates.gpid')
                ->where('gps.id', $id)
                ->select('birthcertificates.id', 'birthcertificates.status', 'birthcertificates.userid')
                ->get();
            return view('gp.birthview', $data);
        } elseif ($name == "death certificate") {
            $data['sec'] = secretary::where('id', $id)->get();
            $data['death'] = deathcertificate::join('gps', 'gps.id', '=', 'deathcertificates.gpid')
                ->where('gps.id', $id)
                ->select('deathcertificates.id', 'deathcertificates.status', 'deathcertificates.userid')
                ->get();
            return view('gp.deathview', $data);
        } elseif ($name == "marriage(common)" || $name == "marriage(Hindu)") {
            $data['sec'] = secretary::where('id', $id)->get();
            $data['marriage'] = marriagecertificate::join('gps', 'gps.id', '=', 'marriagecertificates.gpid')
                ->where('gps.id', $id)
                ->select('marriagecertificates.id', 'marriagecertificates.mtype', 'marriagecertificates.status', 'marriagecertificates.userid')
                ->get();
            return view('gp.marriageview', $data);
        } else {
            return redirect('/gp/category');
        }
    }
    public function approvem($id)
    {
        // echo $id;
        // exit();
        $data = ['status' => 'approve'];
        marriagecertificate::where('id', $id)->update($data);
        return redirect('/gp/category');
    }
    public function approveb($id)
    {
        // echo $id;
        // exit();
        $data = ['status' => 'approve'];
        birthcertificate::where('id', $id)->update($data);
        return redirect('/gp/category');
    }
    public function approved($id)
    {
        // echo $id;
        // exit();
        $data = ['status' => 'approve'];
        deathcertificate::where('id', $id)->update($data);
        return redirect('/gp/category');
    }
}
