<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{

    public function registration(){
        

    }


    public function PostreRistration(){

        return view('registration.user-registration');



        
    }
    public function index(Request $request){

      return view('registration.user-registration');

            $username= $request->input('username');
            $fullname= $request->input('fullname');
            $birthday= $request->input('birthday');
            $email= $request->input('email');
            $phone= $request->input('phone');
            $image_url= $request->input('image_url');
            
            $pass= $request->input('pass');

          DB::insert('insert into registration(username,pass,image_url,PhoneNumber,email,birthday,fullname)values(?,?,?,?,?,?,?)',[$username,$pass,$fullname,$birthday,$email,$phone,$image_url]);

        // return redirect()->action([LoginController::class, 'login']);
        return view('user-login');
        
    }

    public function login(){

        return view('login.user-login');

    }
      public function postLogin(Request $request){

      
        


        //return view('login.user-login');
        //echo 'logged in';
      //  $username= $request->input('username');
        $pass= $request->input('pass');
      $Users= DB::select('select * from registration where pass=?',[$pass]);

      foreach($Users as $user){

        $get_username = $user->username;
        $Session_image = $user->fullname;

      }


     // var_dump($user);
     // exit();
      $count= count($Users);
    //   echo $count;
    //   exit();
    
      if($count==3){

        $request->session()->put('user',$get_username);
        $request->session()->put('img',$Session_image);

         // echo 'login success';
         return view('master');

      }
      else{
          //return redirect('user-login');
          // echo 'login  not success';
          $request->Session()->flash('invalid','password does not match');
           return redirect()->action([LoginController::class, 'login']);

      }
      
    }

    //all user lists
  public function userlist(){
 	$select = DB::select('select * from registration');
   return view ('users.user-list')->with('select',$select);
	}

  //create role
  public function createRole(){
 	$select = DB::select('select * from registration');
   return view ('users.createRole')->with('select',$select);
	}
  public function postRole(Request $request){

    $role= $request->input('role');
    $code= $request->input('rolecode');

     DB::insert('insert into role(role,rolecode)values(?,?)',[$role,$code]);

      //return view('master');
      $request->Session()->flash('role','Role Save Done');
       return redirect('/createRole'); 
  }

  public function rolelist(){
 	$rolelist = DB::select('select * from role');
   return view ('users.role-list')->with('rolelist',$rolelist);
	}
   public function roleset(){
      $select = DB::select('select * from registration');
      $roleset = DB::select('select * from role');
      return view ('users.role-set',['roleset'=>$roleset],['select'=>$select]);
	}


  //set post role
   public function postSetRole(Request $request){

     $role= $request->input('role');
    $users= $request->input('users');

   DB::update('update registration set role=? where id=?',[$role,$users]);

  // echo 'data save ';

      //return view('master');
      $request->Session()->flash('postrole','Role Set Done');
       return redirect('/role-set'); 
  }
//create category
   public function createCategory(){
 	$select = DB::select('select * from registration');
   return view ('category.create-category')->with('select',$select);
	}

  //post category

   public function postCategory(Request $request){

    $name= $request->input('name');
    $code= $request->input('code');

     DB::insert('insert into category(name,code)values(?,?)',[$name,$code]);

      //return view('master');
      $request->Session()->flash('category','Category Save Done');
       return redirect('/createCategory'); 
  }

  //category list
   public function Categorylist(){
 	$categorylist = DB::select('select * from category');
   return view ('category.categorylist')->with('categorylist',$categorylist);
	}

  //create product items
   public function createProduct(){
     $select = DB::select('select * from registration');
     // $roleset = DB::select('select * from role');
      $products = DB::select('select * from category');
      return view ('product.product-form',['products'=>$products],['select'=>$select]);
 
	}

  //post product
     public function postProduct(Request $request){

    $pname= $request->input('p_name');
    $pcode= $request->input('p_code');
    $purchase= $request->input('purchase');
    $sell= $request->input('sell');
    $quentity= $request->input('quentity');
  //  $image= $request->input('image');
    $category= $request->input('category');
    //image upload
      $image = $request->file('image')->getClientOriginalName().'<br>';
	  //show file extension
	   $ext = $request->file('image')->getClientOriginalExtension().'<br>';
	  //get real path
	   $path = $request->file('image')->getRealPath().'<br>';
	  //get size
	   $size = $request->file('image')->getSize().'<br>';
	  //get mime type
	   $mime_type = $request->file('image')->getMimeType().'<br>';
			//move files
			$image = $request->file('image')->getClientOriginalName();
			$destination = base_path().'/public/uploads/products';
			$image_link = '/uploads/products/'.$image;
			$request->file('image')->move($destination,$image);


     DB::insert('insert into product(p_name,p_code,purchase,sell,quentity,image,category_id)values(?,?,?,?,?,?,?)',[$pname,$pcode,$purchase,$sell,$quentity,$image_link,$category]);

    // echo 'data save done';
     $request->Session()->flash('product','product Save Done');
       return redirect('/product-form'); 
      
  }

  //product list

  public function productlist(){
 	$productlist = DB::select('select product.*,category.name as category_name from product join category on category.id=product.category_id');
   return view ('product.product-list')->with('productlist',$productlist);
	}




 



}
