<?php

class ArmyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		try {
            $army = new Army();
            $army->user_id = Auth::user()->id;
            $army->name = Input::get('a');
            $army->army_type = (int) (ArmyType::where('name','=',Input::get('d'))->first()->id);
            $army->total_points = Input::get('b');
            $army->used_points = Input::get('c');
            $army->save();
            $id = $army->id;
            return [1,'Army information saved successfully... Loading builder!',$id];
        }catch(Exception $e) {
            return [0,'ERROR: ' . $e->getMessage() . ' at line ' . $e->getLine()];
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
		//
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
		//
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
