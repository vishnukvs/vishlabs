<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/',function(){
	return View::make('home');
});
Route::get('/about',function(){
	return View::make('about');
});
Route::get('/contact',function(){
		return View::make('contact');
});
Route::post('contact', function()
{
$data = Input::all();
$rules = array(
'subject' => 'required',
'messages' => 'required'
);

$validator = Validator::make($data, $rules);

if($validator->fails()) {
return Redirect::to('contact')->withErrors($validator)->withInput();
}
$emailContent = array(
		'subject'=>$data['subject'],
		'messages'=>$data['messages']
		);
	Mail::send('emails.contactemail', $emailContent, function($message)
	{
		$message->to('vishnu@burbtech.com.au','Learning Laravel Support')
		->subject('Contact via Our Contact Form');
	});

	return 'Your Message has been Sent successfully';
});

Route::get('contact',function(){
	return View::make('contact');
});


	
