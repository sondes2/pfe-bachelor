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

Route::get('/','MyProfileController@showmain');

Route::get('/home', 'MyProfileController@showmain');


Route::get('/profile', 'MyProfileController@showmain')->name('profile_get');


Route::get('/myprofile', 'MyProfileController@get')->name('myprofil_get');
Route::post('/myprofile', 'MyProfileController@update')->name('myprofil_update');


Route::get('/Calendar','CalendarsController@aaa')->name('Calendar_get');
Route::post('/Calendar','CalendarsController@add')->name('Calendar.add');

Route::get('/page', function () {
    return view('pages.page');
});
Route::get('/NutritionPlan', function () {
    return view('pages.NutritionPlan');
});





Route::get('/Nutrition', function () {
    return view('pages.Nutrition');
})->name('Nutrition_get');




Route::get('/faq', function () {
    return view('pages.support.faq');
})->name('faq_get');


Route::get('/contact','ContactController@create')->name('contact_get');
Route::post('/contact','ContactController@store')->name('contact_getMail');







Route::get('/ListChallengs','ChallengsController@index')->name('list_challengs_get');
Route::resource('Challengs', 'ChallengsController');

Route::get('/Challengs','ChallengsController@getmy')->name('Challengs_get');


//menu
Route::get('/accueil', function () {
    return view('pages.accueil');
})->name('accueil_get');

Route::get('/Classes', function () {
    return view('pages.Classes');
})->name('Classes_get');

Route::get('/Planning', function () {
    return view('pages.Planning');
})->name('Planning_get');

Route::get('/Trainers', function () {
    return view('pages.Trainers');
})->name('trainers_get');

Route::get('/Users', function () {
    return view('pages.Users');
})->name('users_get');


Route::get('/usersliste','UsersController@api')->name('UsersApi');
Route::get('/trainersliste','TrainerController@api')->name('TrainerApi');
Route::get('/challengsliste','ChallengsController@api')->name('ChallengsApi');




//interMenu
Route::get('/foodList', function () {
    return view('pages.foodList');
})->name('foodList_get');
Route::get('/Leaderboard', function () {
    return view('pages.Leaderboard');
})->name('Leaderboard_get');

Route::get('/Achievements', function () {
    return view('pages.Achievements');
})->name('Achievements_get');

Route::get('/ProgressPictures', function () {
    return view('pages.ProgressPictures');
})->name('ProgressPictures_get');

Route::get('/ExerciseHistory', function () {
    return view('pages.ExerciseHistory');
})->name('ExerciseHistory_get');

Route::get('/WorkoutPlayer', function () {
    return view('pages.WorkoutPlayer');
})->name('WorkoutPlayer_get');



/*Route::prefix('admin')->group(function(){
Route::get('/','AdminController@index')->name('admin.index')->middleware('auth');//

});*/
Route::resource('Trainers', 'TrainerController');
Route::resource('Users', 'UsersController');


//Route::resource('Bodymetrics', 'BodymetricsController');
//Route::get('/Trainers/addNewTrainer','TrainerController@create')->name('TrainerCreate');
//Contact Sending_mails
//Route::get('/contact', 'ContactController@show');
Route::get('/bodyMetrics', 'BodymetricsController@index')->name('bodyMetrics_get');
Route::get('/bodyMetrics', 'BodymetricsController@create')->name('bodyMetricADD');
Route::post('/bodyMetrics', 'BodymetricsController@store')->name('bodyMetricADD');
Route::post('/challenge_sub', 'ChallengsController@sub')->name('challenge_sub');

Route::get('/Workout', 'WorkoutController@index')->name('workout_sub')->name('Workout_get');


Auth::routes();


/*Route::get('/home', 'HomeController@index')->name('home');
/**************** messages*******************/
Route::get('/Messages','MessagesController@index')->name('Messages_get');
Route::post('/getmsgbody','MessagesController@getmsgbody');
Route::post('/send_msg','MessagesController@send_msg')->name('send_msg');



/*******************************************/