<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(!Auth::check()) return View::make('error')->with('error','You have to be logged in before you can access your user profile. Thanks!');
		else return View::make('user.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        if(Input::get('password') != Input::get('password_confirm')) return View::make('user.create')->with('error', 'Passwords do not match');
		try {
            $user = new User();
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->admin = 0;
            $user->superuser = 0;
            $user->last_login = time();
            $user->save();

            if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
                return Redirect::route('home.index');
            }
            else {
                return View::make('error')->with('error', 'Account  ' . Input::get('email') . ' created but failed to log in. Please try logging in. If error continues, contact segfault.developer@yahoo.com with details. Thanks!');
            }
        }catch(Exception $e) {
            return View::make('user.create')->with('error', 'ERROR: ' . $e->getMessage() . ' at line ' . $e->getLine());
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
        if(!Auth::check()) return View::make('error')->with('error','You have to be logged in before you can edit your user profile. Thanks!');
        else return View::make('user.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        try {
            $user = User::find(Auth::id());
            $user->email = Input::get('email');
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->save();
            return View::make('user.edit')->with('msg', 'Updated profile successfully!');
        }catch(Exception $e) {
            return View::make()->with('error', 'ERROR: ' . $e->withMessage() . ' at line ' . $e->getLine());
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
