<?php	namespace	Paoloumali\Options\Repos;

abstract	class	AbstractEloquentRepo{

	/**
		*	Return	all	users
		*
		*	@return	Illuminate\Database\Eloquent\Collection
		*/
	public	function	all()
	{
		return $this->model->all();
	}

	/**
		*	Find	an	entity	by	id
		*
		*	@param	int	$id
		*	@return	Illuminate\Database\Eloquent\Model
		*/
	public	function	getById($id)
	{
		return	$this->model->find($id);
	}
}