<?php

namespace App\Controllers;

class Role extends BaseController
{
	public function index()
	{
		return view('role/list_role');
	}

	public function addrole()
	{
    return view('role/add_role');


	}
	public function editSrole()
	{
    return view('role/edit_role');


	} 


}
