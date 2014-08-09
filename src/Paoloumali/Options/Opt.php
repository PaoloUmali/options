<?php namespace Paoloumali\Options;

class Opt {

	/**
		*	@var	Model
		*/
	protected	$repo;

	public function __construct(OptionRepo $repo)
	{
		$this->repo = $repo;
	}



	// cachedModels
	protected $cachedModels = array();


	// returns cached model
	public function getModel($primaryKey) {
		return isset($this->cachedModels[$primaryKey]) ? 
		$this->cachedModels[$primaryKey] : 
		$this->cachedModels[$primaryKey] = OptionModel::find($primaryKey);
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
		return OptionModel::all();
	}

	public function getAllSettingsGroup()
	{
		return OptionModel::all();
	}

	public function getSettings($key)
	{
		return OptionModel::where('key', $key)->firstOrFail();
	}

	public function getSettingsGroup($key)
	{
		return OptionModel::where('key', 'settings.group.'.$key)->firstOrFail();
	}

	public function getSettingsGroups()
	{
		return OptionModel::where('key', 'settings.groups')->firstOrFail()->value;
	}

	public function getConfigurableModels()
	{
		return $this->repo->model()->whereIn('key', $this->repo->model()->whereKey('settings.groups')->firstOrFail()->value)->get();
	}
}
