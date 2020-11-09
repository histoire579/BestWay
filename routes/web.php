<?php

use App\Models\Compte;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/typeComptes',[
    'uses'=>'TypeCompte\RoleController@index',
    'as'=>'typeComptes'
  ]);

Route::post('/typeCompte/store',[
    'uses'=>'TypeCompte\RoleController@store',
    'as'=>'typeCompte.store'
 ]);

 Route::post('/compte/store',[
    'uses'=>'Compte\CompteController@store',
    'as'=>'compte.store'
 ]);

 Route::get('/comptes',[
    'uses'=>'Compte\CompteController@index',
    'as'=>'comptes'
  ]);

  //Route::get('users/{id}/{pass}','UtilisateurController@liste');

  Route::get('/comptes/login',[
    'uses'=>'Compte\LoginController@index',
    'as'=>'login'
  ]);

  Route::post('/comptes/connexion',[
    'uses'=>'Compte\LoginController@connection',
    'as'=>'connexion'
  ]);


