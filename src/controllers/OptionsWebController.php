<?php

class OptionsWebController extends OptionsHttpController {

	public function getIndex($key = null)
	{
		$data = [
			'option_models' => Opt::getConfigurableModels()
		];
		return View::make('opt::settings', $data);
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
