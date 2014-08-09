<?php

Route::get('opt', function()
{
	return View::make('opt::hello');
});

Route::controller('settings', 'Paoloumali\Options\SettingsController');

// for ajax
Route::resource('option', 'OptionResourceController');