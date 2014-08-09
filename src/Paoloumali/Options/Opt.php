<?php namespace Paoloumali\Options;

class Opt {

	/**
		*	@var	Model
		*/
	protected	$repo;

	public function __construct(Repositories\OptionRepository $repo)
	{
		$this->repo = $repo;
	}



	// cachedModels
	protected $cachedModels = array();


	// returns cached model
	public function getModel($primaryKey) {
		return isset($this->cachedModels[$primaryKey]) ? 
		$this->cachedModels[$primaryKey] : 
		$this->cachedModels[$primaryKey] = Option::find($primaryKey);
	}

	public function getValue($primaryKey) {
		return $this->getModel($primaryKey)->value;
	}

	public function getModelInJson($primaryKey) {
		return json_encode($this->getModel($primaryKey), JSON_PRETTY_PRINT);
	}
	public function getValueInJson($primaryKey) {
		return json_encode($this->getValue($primaryKey), JSON_PRETTY_PRINT);
	}

	public function getAllOptions()
	{
		return Option::all();
	}

	public function getAllSettingsGroup()
	{
		return Option::all();
	}

	public function getSettings($key)
	{
		return Option::where('key', $key)->firstOrFail();
	}

	public function getSettingsGroup($key)
	{
		return Option::where('key', 'settings.group.'.$key)->firstOrFail();
	}

	public function getSettingsGroups()
	{
		return Option::where('key', 'settings.groups')->firstOrFail()->value;
	}
}
