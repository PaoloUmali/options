<?php namespace Paoloumali\Options;

use View, BaseController;

class SettingsController extends BaseController {

	public function getIndex($key = null)
	{
		return View::make('opt::settings');
	}

	public function getUpdate()
	{
		return 'updating';
	}

	public function putUpdate($key, $id)
	{
		return 'updating';
	}

}
