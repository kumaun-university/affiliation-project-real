<?php
//use Symfony\Component\Routing\Annotation\Route;

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
    return view('pages.welcome');
});



//Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/apply-form', 'AffiliationFormController');
Route::get('/test', 'HomeController@test')->name('test');

Route::prefix('_admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('alf');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('alf.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.fgtpwd.form');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.fgtpwd.email');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.pwd.update');

    Route::get('/newRequest', 'NewRequestController@index')->name('admin.newrequest');
    Route::post('activeuser/{user_id}',['as' => 'admin.newrequest.active', 'uses' => 'NewRequestController@activateUser']);
});