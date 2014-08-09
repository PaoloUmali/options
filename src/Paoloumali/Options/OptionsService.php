<?php namespace Paoloumali\Options;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Option extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'options';

	protected  $primaryKey = 'key';

}
