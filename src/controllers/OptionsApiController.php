<?php

class OptionsApiController extends OptionsHttpController {

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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//get the inouts
		//Input::get('option');
		try {
			return $option = $this->repo->model()->create(array(
				'key' => 'tpl', 'value' => Config::get('tpl::config')
			));
		}
		catch (\Exception $e) {
			//return $this->handleException($e);
			//return $e->getMessage();
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
		//
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
			$posted_option = Input::only('value', 'title');
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
