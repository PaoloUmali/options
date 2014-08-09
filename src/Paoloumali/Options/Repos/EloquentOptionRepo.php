<?php	namespace	Paoloumali\Options\Repos;

use Paoloumali\Options\OptionModel;

class	EloquentOptionRepo	extends AbstractEloquentRepo implements	OptionRepoIface{

	/**
		*	@var	Model
		*/
	protected	$model;

	/**
		*	Constructor
		*/
	public	function	__construct(OptionModel	$model)
	{
			$this->model	=	$model;
	}
}