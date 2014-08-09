<?php

class OptionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('options')->delete();

		$repo = App::make('OptionRepo');

		$repo->model()->create(array(
			'key' => 'settings.groups', 'value' => ['tpl', 'userman'], 'title' => 'Configurable Settings'
		));

		// for paoloumali/templating
		$repo->model()->create(array(
			'key' => 'tpl', 'value' => Config::get('tpl::config'), 'title' => 'Templating'
		));

		// from paoloumali/user-management
		$repo->model()->create(array(
			'key' => 'userman', 'value' => Config::get('userman::config'), 'title' => 'User Management'
		));
	}

}
