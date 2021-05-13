<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Student;


class StudentController extends Controller
{
    public function dddinsert(){
      // $student= new Student;
    //    $student->name="sss";
    //    $student->roll="01";
    //    $student->save();
//all student list
   //$student =Student::all();
  // var_dump($student);

  //student update
 // Student::where('id','=',1)->update(['name'=>'shuvo','roll'=>'02']);
  //delete
 // Student::where('id','=',1)->delete();
    }

    public function index(){
        return view('student.master-student');

    }
    public function studentRegistration(){
        return view('student.student-registration');

    }

    public function insert(Request $request){

      //check validation
      $this->validate($request,[

        'student_name'      =>        'required|string|max:10',
        'registration'      =>        'required|max:20',
        'department'        =>        'required|string|max:10',
        'info'              =>        'nullable|max:220'

      ]);

      //insert data into student table
        $student= new Student;
        $student->student_name = $request->student_name;
        $student->registration = $request->registration;
        $student->department = $request->department;
        $student->info = $request->info;
        $student->save();
      ///  echo 'data save done';
      return redirect('/student-list'); 
    }

      public function studentList(){
         $studentlist =Student::all();
        return view('student.student-list')->with('studentlist',$studentlist);
    }

    public function editStudent($id){
      $student =Student::find($id);
        return view('student.edit-student')->with('student',$student);
    }

    public function updateStudents(Request $request,$id){

        $student =Student::find($id);
      // $student= new Student;

        
        $student->student_name = $request->student_name;
        $student->registration = $request->registration;
        $student->department = $request->department;
        $student->info = $request->info;
        $student->save();

        //echo 'data update done';
        return redirect('/student-list'); 
    }
  
    public function delete($id){
         $student =Student::find($id);
         $student->delete();
          return redirect('/student-list'); 
        

    }



    








    
}
