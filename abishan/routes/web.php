<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// Laravel
Route::view('/','home');


// Route::get('/', function () {
//       return view('employee.employeeform');
//   });
// Route::get('/', function (Request $request) {
//       return view('home.input');
//   });

// Route::get('output', function (Request $request) {
//       return view('home.recieve',$request->all());    
     
//   });


// Route::post('employeedetail', function (Request $request) {
//     $data = [
//         'id' => $request->input('empid', 1),
//         'name' => $request->input('name', 'Abishan'),
//         'phone_no' => $request->input('tel', '0704567890'),
//         'nic' => $request->input('nic', '123456789V')
//     ];

//     return view('employee.employeedetail', ['details' => $data]);
//  });
// Route::post('employee-detail', function (Request $request) {
//     $id = $request->input('empid',1);
//     $name = $request->input('name', 'Abishan');
//     $phone_no = $request->input('tel', '0704567890');
//     $nic = $request->input('nic', '123456789V');

//     return view('employee.employee-detail', [
//         'id' => $id,
//         'name' => $name,
//         'phone_no' => $phone_no,
//         'nic' => $nic
//     ]);
// });

// Route::post('home', function (Request $request) {
//         dd($request->input('fname'), $request->input('lname'));
//         return 'posthome';
//   });
// Route::get('home', function () {
//       return 'gethome';
//   });
// Route::put('home', function () {
//       return 'puthome';
//   });
// Route::patch('home', function () {
//       return 'patchhome';
//   });
// Route::delete('home', function () {
//       return 'deletehome';
//   });
//   Route::get('get-form', function () {
//         return view('home.get-form');
//     });  
    
  //   Route::get('/', function () {
      
//       return view('welcome');
//   });
// Route::get('employeedetail/{id?}/{name?}/{phone_no?}/{nic?}', function (
//     $id = 1,
//     $name = 'Abishan',
//     $phone_no = '0704567890',
//     $nic = '123456789V'
// ) {
//     $data = [
//         'id' => $id,
//         'name' => $name,
//         'phone_no' => $phone_no,
//         'nic' => $nic
//     ];

//     return view('employee.employeedetail', ['details' => $data]);
// });
// Route::get("my-page/{name}", function ($name) {
//     return  "My name is ".$name;
    
// });

//  Route::get("emplo/{name}/{bgcolor}", function ($name) {
//      return view('home',["fname"=>$name]);   
// });
//  Route::get("my-page/{name}/{bgcolor}", function ($name) {
//      return view('home',["fname"=>$name]);   
// });
//  Route::get("my-page/{name}/{bgcolor}", function ($name,$bgcolor) {
//      return view('pages.'.$name,["color"=>$bgcolor]);   
// });
// Route::get('home', function () {
//      return view('home');
//  }
// );
// Route::get('contact', function () {
//     return view('pages.contact');
// });
// Route::get('photo', function () {
//     return view('pages.photo');
// });
//Route::view('/', 'welcome');
Route::view('home', 'home');
Route::view('about', 'pages.about');
Route::view('contact', 'pages.contact');
Route::view('photo', 'pages.photo');
Route::view('input', 'home.get-form');
Route::view('emplist', 'employee.employeelist');
?> 