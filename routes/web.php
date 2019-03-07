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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/','CensusController@index');
Route::post('/InsertData','CensusController@store');
Route::get('/ListData','CensusController@Allhouse')->name('all.ListData');
Route::get('/DelCensus/{id}','CensusController@showCensus');
Route::get('/editCensus/{id}','CensusController@editCensus');
Route::post('/update-census/{id}','CensusController@updateDataCensus');


//degigtared table 
//Route::get('/degignated_person/{id}','traineecontroller@degignated_person');
Route::get('/degignated_person','traineecontroller@index')->name('add.degignated_person');
Route::post('/InsertData_new','traineecontroller@store');
Route::get('/all_data','traineecontroller@Allperson')->name('all.data');
Route::get('/Del-dperson/{id}','traineecontroller@showPerson');
Route::get('/edit-dperson/{id}','traineecontroller@editPerson');
Route::post('/update-dperson/{id}','traineecontroller@updateDataPerson');

//course route 
Route::get('/add_course','coursecontroller@index')->name('add.course');
Route::post('/InsertData_course','coursecontroller@store');
Route::get('/list_course','coursecontroller@Allcourse')->name('list_course');
Route::get('/Del-course/{id}','coursecontroller@showCourse');
Route::get('/edit-course/{id}','coursecontroller@editCourse');
Route::post('/update-course/{id}','coursecontroller@updateDataCourse');


