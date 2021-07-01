<?php

use Illuminate\Support\Facades\Route;

//test
use Illuminate\Http\Request;

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

Route::middleware(['casAuth'])->group(function () {
    

    Route::get('/sso/login', function () {
        
        return 'sso-login:login successfull!!';
    })->name('sso-login');

    Route::get('/user/profile', function (Request $request) {
        
        //$ssoAttributes = cas()->getAttributes();
        $ssoUser = $request->session()->get('cas_user');
        $ssoAttributes = $request->session()->get('cas_attributes');
        return 'Admin-profile: login successfull!! <br />
        			<pre> '
        			. var_dump($ssoAttributes) .
        			'</pre>';
    });
});


Route::get('/sso/logout', function(){ 
	        
	        cas()->logout(); 
	    }
	);


Route::get('/test/view/example', function () {

	return view('test_view', ['name' => 'PacoPepe']);
	
});
