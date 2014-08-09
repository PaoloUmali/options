<?php namespace Paoloumali\Options;

class Opt {

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
}
