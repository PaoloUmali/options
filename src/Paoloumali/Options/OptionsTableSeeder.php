<?php namespace Paoloumali\Options;

use Seeder, DB, Config;

class OptionsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('options')->delete();

		Option::create(array(
			'key' => 'settings.groups', 'value' => ['tpl', 'userman'], 'title' => 'Configurable Settings'
		));

		// for paoloumali/templating
		Option::create(array(
			'key' => 'tpl', 'value' => Config::get('tpl::config'), 'title' => 'Templating'
		));

		// from paoloumali/user-management
		Option::create(array(
			'key' => 'userman', 'value' => Config::get('userman::config'), 'title' => 'User Management'
		));
	}

}
