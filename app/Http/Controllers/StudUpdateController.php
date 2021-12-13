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

    public function destroy($id) {
      DB::delete('delete from student where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
}
