<?php

// This should have the basics

class OptionsHttpController extends \BaseController {

	protected $repo;

	public function __construct()
	{
		$this->repo = App::make('opt.repo');
	}

	public function repo()
	{
		return $this->repo;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->repo->all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return $this->repo->model();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$posted_resouce = Input::only('key', 'value', 'title');

		try {
			return $option = $this->repo->model()->create($posted_resouce);
		}
		catch (\Exception $e) {
			return $e->getMessage();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->repo->getByID($id);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return $this->repo->getByID($id);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		try
		{
			$option = $this->repo->model()->whereId($id)->firstOrFail();
			$posted_resource = Input::only('value', 'title');
			$option->update($posted_option);
			//foreach ($posted_option as $attribute => $value) $option->{$attribute} = $value;
			$option->save();
			return $option;
		}
		catch (\Exception $e)
		{
			//return $this->handleException($e);
			return $e->getMessage();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
