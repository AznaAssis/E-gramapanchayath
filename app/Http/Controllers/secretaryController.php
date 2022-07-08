<?php

namespace App\Http\Controllers;

use App\Models\secretary;
use App\Models\gp;
use App\Models\usertable;
use App\Models\category;
use App\Models\birthcertificate;
use App\Models\deathcertificate;
use App\Models\marriagecertificate;
use App\Models\scheme;
use App\Models\schemeapplication;
use Illuminate\Http\Request;

class secretaryController extends Controller
{
    public function index()
    {
        $id = session('sess');
        $data['sec'] = secretary::where('id', $id)->get();
        return view('secretary.index', $data);
    }
    public function viewdetails()
    {
        $id = session('sess');
        $data['sec'] = secretary::where('id', $id)->get();
        $panchayth = secretary::where('id', $id)->value('panchayth');

        $data['gp'] = gp::where('name', $panchayth)->get();
        return view('secretary.viewgpdetails', $data);
    }
    public function viewcategory()
    {
        $id = session('sess');
        $data['sec'] = secretary::where('id', $id)->get();
        $panchayth = secretary::where('id', $id)->value('panchayth');
        $pid = gp::where('name', $panchayth)->value('id');
        $data['category'] = category::where('gpid', $pid)->get();
        return view('secretary.viewcategory ', $data);
    }
    public function addnews()
    {
        $id = session('sess');
        $data['sec'] = secretary::where('id', $id)->get();
        return view('secretary.addnews', $data);
    }
    public function viewapplicationsec()
    {
        $id = session('sess');
        $data['sec'] = secretary::where('id', $id)->get();
        $data['category'] = category::join('gps', 'gps.id', '=', 'categories.gpid')
            ->join('secretaries', 'secretaries.panchayth', '=', 'gps.name')
            ->where('secretaries.id', $id)
            ->select('categories.id', 'categories.category')
            ->get();
        return view('secretary.viewapplicationsec', $data);
    }
    public function viewsec($name)
    {
        $id = session('sess');
        if ($name == "birth certificate") {
            $data['sec'] = secretary::where('id', $id)->get();
            $data['birth'] = birthcertificate::join('gps', 'gps.id', '=', 'birthcertificates.gpid')
                ->join('secretaries', 'secretaries.panchayth', '=', 'gps.name')
                ->where('secretaries.id', $id)
                ->select('birthcertificates.id', 'birthcertificates.status', 'birthcertificates.userid')
                ->get();
            return view('secretary.birthview', $data);
        } elseif ($name == "death certificate") {
            $data['sec'] = secretary::where('id', $id)->get();
            $data['death'] = deathcertificate::join('gps', 'gps.id', '=', 'deathcertificates.gpid')
                ->join('secretaries', 'secretaries.panchayth', '=', 'gps.name')
                ->where('secretaries.id', $id)
                ->select('deathcertificates.id', 'deathcertificates.status', 'deathcertificates.userid')
                ->get();
            return view('secretary.deathview', $data);
        } elseif ($name == "marriage(common)" || $name == "marriage(Hindu)") {
            $data['sec'] = secretary::where('id', $id)->get();
            $data['marriage'] = marriagecertificate::join('gps', 'gps.id', '=', 'marriagecertificates.gpid')
                ->join('secretaries', 'secretaries.panchayth', '=', 'gps.name')
                ->where('secretaries.id', $id)
                ->select('marriagecertificates.id', 'marriagecertificates.mtype', 'marriagecertificates.status', 'marriagecertificates.userid')
                ->get();
            return view('secretary.marriageview', $data);
        } else {
            return redirect('/viewapplicationsec');
        }
    }
    public function verifym($id)
    {
        // echo $id;
        // exit();
        $data = ['status' => 'verified'];
        marriagecertificate::where('id', $id)->update($data);
        return redirect('/viewapplicationsec');
    }
    public function verifyb($id)
    {
        // echo $id;
        // exit();
        $data = ['status' => 'verified'];
        birthcertificate::where('id', $id)->update($data);
        return redirect('/viewapplicationsec');
    }
    public function verifyd($id)
    {
        // echo $id;
        // exit();
        $data = ['status' => 'verified'];
        deathcertificate::where('id', $id)->update($data);
        return redirect('/viewapplicationsec');
    }
    public function morebirth($id)
    {
        $sid = session('sess');
        $data['sec'] = secretary::where('id', $sid)->get();
        $data['birth'] = birthcertificate::where('id', $id)->get();
        return view('secretary.morebirth', $data);
    }
    public function moredeath($id)
    {
        $sid = session('sess');
        $data['sec'] = secretary::where('id', $sid)->get();
        $data['death'] = deathcertificate::where('id', $id)->get();
        return view('secretary.moredeath', $data);
    }
    public function moremarriage($id)
    {
        $sid = session('sess');
        $data['sec'] = secretary::where('id', $sid)->get();
        $data['marriage'] = marriagecertificate::where('id', $id)->get();
        return view('secretary.moremarriage', $data);
    }
    public function viewschemes()
    {
        $sid = session('sess');
        $data['sec'] = secretary::where('id', $sid)->get();
        $data['scheme'] = scheme::join('gps', 'gps.id', '=', 'schemes.panchayath_id')
            ->join('secretaries', 'secretaries.panchayth', '=', 'gps.name')
            ->where('secretaries.id', $sid)
            ->select('schemes.id', 'schemes.panchayath_id', 'schemes.name', 'schemes.about', 'schemes.amount', 'schemes.adate', 'schemes.enddate', 'schemes.status')
            ->get();
        return view('secretary.viewscheme', $data);
    }
    public function viewapplication($id)
    {
        $sid=session('sess');
        $data['sec'] = secretary::where('id', $sid)->get();
        $data['scheme'] = schemeapplication::join('schemes', 'schemes.id', '=', 'schemeapplications.schemeid')
            ->join('gps', 'gps.id', '=', 'schemes.panchayath_id')
            ->join('secretaries', 'secretaries.panchayth', '=', 'gps.name')
            ->where('secretaries.id', $sid)
            ->where('schemes.id',$id)
            ->where('schemeapplications.schemeid',$id)
            ->select('schemeapplications.id', 
            'schemeapplications.userid', 'schemeapplications.date', 'schemeapplications.status','schemes.name')
            ->get();
        return view('secretary.viewapplication',$data);

    }
    public function verifys($id)
    {
        // echo $id;
        // exit();
        $data = ['status' => 'verified'];
        schemeapplication::where('id', $id)->update($data);
        return redirect('/viewapplication');
    }
    public function viewusers()
    {
        $sid=session('sess');
        $data['sec'] = secretary::where('id', $sid)->get();
        $panchayth = secretary::where('id', $sid)->value('panchayth');
        $data['user']=usertable::where('panchayth',$panchayth)->get();
        return view('secretary.viewuser',$data);
    }
}
