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

		OptionModel::create(array(
			'key' => 'settings.groups', 'value' => ['tpl', 'userman'], 'title' => 'Configurable Settings'
		));

		// for paoloumali/templating
		OptionModel::create(array(
			'key' => 'tpl', 'value' => Config::get('tpl::config'), 'title' => 'Templating'
		));

		// from paoloumali/user-management
		OptionModel::create(array(
			'key' => 'userman', 'value' => Config::get('userman::config'), 'title' => 'User Management'
		));
	}

}
