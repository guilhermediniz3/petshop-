<?php

namespace App\Controllers;

class User extends BaseController
{
	public function index()
	{
		return view('user/list_user');
	}

	public function addUser()
	{
    return view('user/add_user');


	}
	public function editUser()
	{
    return view('user/edit_user');


	}


}
