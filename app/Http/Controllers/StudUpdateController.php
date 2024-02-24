<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudUpdateController extends Controller
{
   public function index() {
   		$users = DB::select('select * from student');
   		return view('stud_edit_view',['users'=>$users]);
   }
   public function show($id) {
      $users = DB::select('select * from student where id = ?',[$id]);
      return view('stud_update',['users'=>$users]);
   }

     public function showEditForm($id)
    {
        $user = DB::selectOne('select * from student where id = ?', [$id]);
        return view('stud_edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $name = $request->input('stud_name');
        $email = $request->input('stud_email');
        $subject = $request->input('stud_subject');
        $message = $request->input('stud_message');
        $datetime = $request->input('datetime');

        DB::update('update student set stud_name = ?, stud_email = ?, stud_subject = ?, stud_message = ?, datetime = ? where id = ?', [$name, $email, $subject, $message, $datetime, $id]);

        echo "Record updated successfully.<br/>";
        echo '<a href="/edit-records">Click Here</a> to go back.';
    }


    public function destroy($id) {
      DB::delete('delete from student where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
}
