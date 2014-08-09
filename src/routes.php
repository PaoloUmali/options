<?php
/*
Debugbar::info(Paoloumali\Options\Option::all());
Debugbar::info(Paoloumali\Options\Option::all()->toArray());
Debugbar::info(Paoloumali\Options\Option::all()->lists('key'));
*/


Debugbar::info(App::make('OptionRepo'));

Debugbar::info(app('opt.model'));
Debugbar::info(App::make('OptionModel'));
Debugbar::info(app('opt.model') == App::make('OptionModel'));

Route::get('opt', function()
{
	return View::make('opt::hello');
});

Route::get('getSettings', 'OptionApiController@index');

Route::controller('settings', 'Paoloumali\Options\SettingsController');

// for ajax
Route::resource('option', 'OptionApiController');

