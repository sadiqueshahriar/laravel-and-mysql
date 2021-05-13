<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
	public function index(){
	$select = DB::select('select * from registration');
   return view ('users.user-list')->with('select',$select);
	}	
		
    public function UserForm(Request $request){	
		if($request->hasFile('image')){
		//show orginal file name
	  echo $image = $request->file('image')->getClientOriginalName().'<br>';
	  //show file extension
	  echo $ext = $request->file('image')->getClientOriginalExtension().'<br>';
	  //get real path
	  echo $path = $request->file('image')->getRealPath().'<br>';
	  //get size
	  echo $size = $request->file('image')->getSize().'<br>';
	  //get mime type
	  echo $mime_type = $request->file('image')->getMimeType().'<br>';
			//move files
			$image = $request->file('image')->getClientOriginalName();
			$destination = base_path().'/public/uploads/users';
			$image_link = '/public/uploads/users/'.$image;
			$request->file('image')->move($destination,$image);

	     	//$name = $request->input('fname');
		//$name1= $request->input('name');
		//$img = $request->input('image');
		//echo $name;
		//echo $name1;
		// DB::insert('insert into registration(email,pass,image_url)values(?,?,?)',[$name,$name1,$image_link]);
		//$request->session()->put('msg','data save done');
		
		//echo 'insert done';
		//return redirect()->action([UserController::class, 'index']);

	  
		}
		// else{
		// 	echo 'not selected';
		// }
		// $name = $request->input('fname');
		// $name1= $request->input('lname');
		// //echo $name;
		// //echo $name1;
		// DB::insert('insert into registration(email,pass)values(?,?)',[$name,$name1]);
		// //$r	
		
		// //echo 'insert done';
		// return redirect()->action([UserController::class, 'index']);
		
		
	}
	public function new(){
		//print_r(route('home'));
		
		return view('main');
		
	}
	public function edit($id){
	//	echo "edit page ".$id;
		$select = DB::select('select * from registration where id=?',[$id]);
		//var_dump($select);
		//exit();
		return view('edit')->with('select',$select);
	}
	public function update(Request $request,$id){
		$name = $request->input('fname');
		$name1= $request->input('lname');
		//echo $name;
		//echo $name1;
		DB::update('update registration set email=?,pass=? where id=?',[$name,$name1,$id]);
		//echo "data update done";
		return redirect()->action([UserController::class, 'index']);
		
	}
	public function destory($id){
		//echo $id;
		//DB::delete('delete u where  = ?', ['John'])
		DB::delete('delete from registration where id = ?', ['$id']);
		//echo 'data delete done';
		return redirect()->action([UserController::class, 'index']);

	}
	public function validation(){
		return view('demo.form');
	}
	   
}
