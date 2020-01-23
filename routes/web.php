<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/login', 'HomeController@index')->name('home');

//Route::get('post','PostController@all_post');
//
//Route::get('admin','AdminController@index');

//Logout
Route::get('/logout','AdminController@logout');

Route::get('/', function () {
    return view('admin.admin_login');
});

//////////////When i view only student modal login page////////////

//Route::get('/', function () {
//    return view('student.student_login');
//});


//////////////When i view front page,student & admin modal login page////////////
Route::get('/', function () {
    return view('welcome');
});

//Route::post('/adminLogin','AdminController@dashboard');

//Admin login
    Route::match(['get', 'post'], '/admin', 'AdminController@adminLogin');
    Route::match(['get', 'post'], '/dashboard', 'AdminController@dashboard');
//Student (allStudent)
    Route::match(['get', 'post'], '/allStudent/all_student', 'allStudentController@allStudent');
    Route::match(['get', 'post'], '/allStudent/add_student', 'addStudentController@addStudent');
    Route::post('/saveStudent', 'addStudentController@saveStudent');
    Route::match(['get', 'post'], '/allStudent/tution_fee', 'tutionFeeController@tutionFee');

//course
    Route::match(['get', 'post'], '/ba', 'baController@ba');
    Route::match(['get', 'post'], '/bba', 'bbaController@bba');
    Route::match(['get', 'post'], '/bsc', 'bscController@bsc');
    Route::match(['get', 'post'], '/bss', 'bssController@bss');
    Route::match(['get', 'post'], '/cse', 'cseController@cse');
    Route::match(['get', 'post'], '/allTeacher', 'teacherController@allTeacher')->name('allTeacher');


//CRUD for Student
    Route::get('/studentDelete/{student_id}', 'allStudentController@studentDelete');
    Route::get('/viewStudent/{student_id}', 'allStudentController@viewStudent');
    Route::get('/studentEdit/{student_id}', 'allStudentController@studentEdit');
    Route::post('/studentUpdate/{student_id}', 'allStudentController@studentUpdate');

//Teachers
    Route::get('/addTeacher', 'teacherController@addTeacher')->name('/addTeacher');
    Route::post('/saveTeacher', 'teacherController@saveTeacher');
    Route::match(['get', 'post'], '/teachers/all_teacher', 'teacherController@allTeacher');
    Route::get('/teacherDelete/{id}', 'teacherController@delTeacher');


//User Login
Route::post('/userLogin','StudentController@userLogin');

//student Dashboard
Route::match(['get','post'],'/student-dashboard','StudentController@index');
Route::get('/setting','StudentController@setting');
Route::get('/profile','StudentController@profile');
Route::post('/update','StudentController@update');

////////////////////////////////////Student Results option//////////////////////////////////
Route::get('/result','ChildController@index');
Route::match(['get','post'],'/students/create','ChildController@create');
Route::match(['get','post'],'/students/edit/{student_id}','ChildController@editStudent');
Route::post('/update/{update}','ChildController@update');
Route::match(['get','post'],'/students/delete/{student_id}','ChildController@destroy');
//result
Route::match(['get','post'],'/students/{student_id}/add-result','ChildController@addResult')
    ->name('student.result.create');
Route::match(['get','post'],'/students/{student_id}/view-result','ChildController@viewResult')
    ->name('student.result.view');

//Subject

Route::get('/subjects','subjectController@index');
Route::match(['get','post'],'/subjects/add-subject','SubjectController@addSubject');
Route::match(['get','post'],'/subjects/edit-subject/{id}','SubjectController@editSubject');
Route::match(['get','post'],'/subjects/delete-subject/{id}','SubjectController@deleteSubject');

///////////////End of result option/////////////

//Facebook Login
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

