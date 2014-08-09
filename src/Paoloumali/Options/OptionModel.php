<?php namespace Paoloumali\Options;

use Eloquent;

class OptionModel extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'options';

	protected $primaryKey = 'id';

	protected $guarded = array('id');

	// getter, always decode back to array
	public function getValueAttribute($value)
	{
		return json_decode($value);
		//return unserialize($value);
	}

	// setter, always encode as json
	public function setValueAttribute($value)
	{
		return $this->attributes['value'] = json_encode($value);
		//return $this->attributes['value'] = serialize($value);
	}


}
