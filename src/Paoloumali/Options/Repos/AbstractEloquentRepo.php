<?php	namespace	Paoloumali\Options\Repos;

abstract	class	AbstractEloquentRepo{

	/**
		*	@var	Common handler for model exceptions
		*/
	public	function	handleException($e)
	{
		return $e->getMessage();
	}

	/**
		*	@var	Model
		*/
	protected	$model;

	/**
		*	Common model getter
		*
		*	@return	Illuminate\Database\Eloquent\Model
		*/
	public	function	model()
	{
		return $this->model;
	}

	/**
		*	Return all models as collection
		*
		*	@return	Illuminate\Database\Eloquent\Collection
		*/
	public	function	all()
	{
		return $this->model()->all();
	}

	/**
		*	Find	an	entity	by	id
		*
		*	@param	int	$id
		*	@return	Illuminate\Database\Eloquent\Model
		*/
	public	function	getById($id)
	{
		try
		{
			return	$this->model()->whereId($id)->firstOrFail();
		}
		catch (\Exception $e)
		{
			return $this->handleException($e);
		}
	}

}