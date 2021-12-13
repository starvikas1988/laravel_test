<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;

class StudInsertController extends Controller
{
    public function insertform() {
      return view('stud_create');
    }
	
    public function insert(Request $request) {
     //  dd($request);
      if($request->has("stud_name","stud_email","stud_subject","stud_message"))
      {
        $name         = $request->input('stud_name');
        $stud_email   = $request->input('stud_email');
        $stud_subject = $request->input('stud_subject');
        $stud_message = $request->input('stud_message');
        $datetime     = $request->input('datetime');
      }
      else
      {
        $message="Please enter the name/Try again";
      }
      
      DB::insert('insert into student (name,email,subject,message,datetime) values(?,?,?,?,?)',[$name,$stud_email,$stud_subject,$stud_message,$datetime]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
