<?php

namespace App\Http\Controllers;
use App\Models\FeedBackModel;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('index');
    }

    public function eductionSec(){
        return view('EducationPort');
    }

    public function skillsSec(){
        return view('SkillsPort');
    }

    public function certificationSec(){
        return view('CertificationPort');
    }

    public function internshipSec(){
        return view('InternshipPort');
    }

    public function projectSec(){
        return view('Projects');
    }

    public function contactSec(){
        return view('ContactPort');
    }

    public function storeData(Request $req){
        
        $req->validate([
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'phn' => 'required',
        'msg' =>'required'
        ]);
        
        
        $feedObj = new FeedBackModel;
        $feedObj->fname = $req->fname;
        $feedObj->lname = $req->lname;
        $feedObj->email = $req->email;
        $feedObj->phone_number = $req->phn;
        $feedObj->gender = $req->gender;
        $feedObj->message = $req->msg;
        $feedObj->save();
        return redirect('/Contact-me');


    }
}
