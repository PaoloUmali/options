<?php
/*
Debugbar::info(Paoloumali\Options\Option::all());
Debugbar::info(Paoloumali\Options\Option::all()->toArray());
Debugbar::info(Paoloumali\Options\Option::all()->lists('key'));
*/


Debugbar::info(Opt::getAllOptions());
Route::get('opt', function()
{
	return View::make('opt::hello');
});

Route::controller('settings', 'Paoloumali\Options\SettingsController');

// for ajax
Route::resource('option', 'OptionApiController');