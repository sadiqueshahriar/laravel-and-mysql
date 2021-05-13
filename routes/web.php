 <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('demo2.welcome');
});

//Route::resource('new',NewController::class);
//Route::get('registration','UserController@UserForm');

// //
Route::post('submits',[UserController::class,'UserForm'])->name('submits');

Route::get('temp',function(){
	return view('main');
});

Route::get('admin',function(){
	return view('index');
});

Route::get('master',function(){
	return view('master');
});

Route::get('nav',function(){
	return view('navbar');
});

Route::get('userlist',[UserController::class,'index'])->name('userlist');

Route::get('master',function(){
	return view('master');
});

Route::get('test',[ProductController::class,'index']);

Route::get('test/{name}/{id}',[ProductController::class,'show'])->where([

	'name'=>'[a-z]+',
	'id'=>'[0-9]+'
]);

Route::get('test1',[UserController::class,'new'])->name('home');

//edit root
Route::get('edit/{id}',[UserController::class,'edit'])->name('edit');
//update
Route::post('update/{id}',[UserController::class,'update'])->name('update');
//delete
Route::get('delete/{id}',[UserController::class,'destory'])->name('delete');


//form validation
Route::get('testing',[UserController::class,'validation'])->name('testing');

//registration 
//Route::get('user-registration',[LoginController::class,'index'])->name('user-registration');


//user-login routes:

Route::get('loginform',[LoginController::class,'login'])->name('loginform');

Route::get('postLogin',[LoginController::class,'postLogin'])->name('postLogin');

//all-users list table
Route::get('all-userlist',[LoginController::class,'userlist'])->name('all-userlist');

//create role
Route::get('createRole',[LoginController::class,'createRole'])->name('createRole');
//post role
Route::post('postRole',[LoginController::class,'postRole'])->name('postRole');

//role-list table
Route::get('all-role',[LoginController::class,'rolelist'])->name('all-role');

//set-role
Route::get('role-set',[LoginController::class,'roleset'])->name('role-set');

Route::post('postrole-set',[LoginController::class,'postSetRole'])->name('postrole-set');

//create category
Route::get('createCategory',[LoginController::class,'createCategory'])->name('createCategory');
Route::post('postCategory',[LoginController::class,'postCategory'])->name('postCategory');

//category table list
Route::get('categorylist',[LoginController::class,'Categorylist'])->name('Categorylist');

//create product item
Route::get('product-form',[LoginController::class,'createProduct'])->name('product-form');
//post product
Route::post('post/Product',[LoginController::class,'postProduct'])->name('post/Product');
//product list
Route::get('productlist',[LoginController::class,'productlist'])->name('productlist');


//student management
Route::get('student',[StudentController::class,'index'])->name('student');

//insert student
Route::get('registrations',[StudentController::class,'studentRegistration'])->name('registrations');
Route::post('insert',[StudentController::class,'insert'])->name('insert');
//student list
Route::get('student-list',[StudentController::class,'studentList'])->name('student-list');
//update student
Route::get('editstudent/{id}',[StudentController::class,'editStudent'])->name('editstudent');

Route::post('updatestudent/{id}',[StudentController::class,'updateStudents'])->name('updatestudent');
Route::get('student-delete/{id}',[StudentController::class,'delete'])->name('student-delete');

























Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
