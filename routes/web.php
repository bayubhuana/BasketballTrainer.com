<?php


Route::get('/', function () {return view('v_login');});
Route::get('Login',['uses'=>'Controller_Login@index','as'=>'Login'] );
Route::get('Profile',['uses'=>'Controller_Profile@index','as'=>'keProfile'] );
Route::get('Tutorial',['uses'=>'Controller_Tutorial@index','as'=>'KeTutorial'] );
Route::get('ProsesTrackRecord',['uses'=>'Controller_TrackRecord@ViewRecording','as'=>'KeTrackRecord']);
Route::get('TrackRecord',['uses'=>'Controller_TrackRecord@index','as'=>'TrackRecord']);
Route::get('Logout',['uses'=>'Controller_Login@prosesLogout','as'=>'Logout']);
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('Reset',['uses'=>'Controller_TrackRecord@reset','as'=>'Reset']);

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('image/{folder}/{filename}',['uses'=>'Controller_Image@getImage','as'=>'image'] );
Route::get('video/{folder}/{filename}',['uses'=>'Controller_VideoUser@getVideo','as'=>'video'] );

Route::get('Dribbling',['uses'=>'Controller_Dribbling@index','as'=>'keDribbling'] );
Route::post('RecordDribbling',['uses'=>'Controller_Dribbling@record','as'=>'RecordDribbling'] );

Route::get('Pivot',['uses'=>'Controller_Pivot@index','as'=>'kePivot'] );
Route::post('RecordPivot',['uses'=>'Controller_Pivot@record','as'=>'RecordPivot'] );

Route::get('Passing&Catching',['uses'=>'Controller_Passing_Catching@index','as'=>'kePassing'] );
Route::post('RecordPassing',['uses'=>'Controller_Passing_Catching@record','as'=>'RecordPassing'] );

Route::get('Rebound',['uses'=>'Controller_Rebound@index','as'=>'keRebound'] );
Route::post('RecordRebound',['uses'=>'Controller_Rebound@record','as'=>'RecordRebound'] );

Route::get('Shooting',['uses'=>'Controller_Shooting@index','as'=>'keShooting'] );
Route::post('RecordShooting',['uses'=>'Controller_Shooting@record','as'=>'RecordShooting'] );

Route::get('Rule',['uses'=>'Controller_Rule@index','as'=>'keRule'] );

Route::get('VideoTutorial',['uses'=>'Controller_Video@index','as'=>'keVideoTutorial'] );
Route::get('uploadvideo',['uses'=>'Controller_Video@v_UploadVideo','as'=>'keUploadVideo'] );
Route::post('Uploadingvideo',['uses'=>'Controller_Video@UploadingVideo','as'=>'UploadingVideo'] );

Route::get('register',['uses'=>'Controll_Register@index','as'=>'keregister'] );
Route::get('cobaregister',['uses'=>'Controll_Register@keindex','as'=>'cobakeregister'] );
// Route::get('Basketballtrainer/register', 'Controll_Register@index')->name('keRegister');
Route::post('prosesRegister',['uses'=>'Controll_Register@prosesRegister','as'=>'prosesRegister'] );
Route::post('prosesLogin',['uses'=>'Controller_Login@prosesLogin','as'=>'prosesLogin'] );

Route::get('Dribble/Latihan',['uses'=>'Controller_Dribbling@Latihan','as'=>'LatihanDribbling'] );
//Route::get('caralogin',['uses'=>'Controller_Loginbagus@fungsilogin','as'=>'loginbagus']);
?>
