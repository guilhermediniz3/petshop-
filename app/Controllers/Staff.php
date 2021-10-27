<?php

namespace App\Controllers;

class Staff extends BaseController
{
	public function index()
	{
		return view('staff/list_staff');
	}

	public function addStaff()
	{
    return view('staff/add_staff');


	}
	public function editStaff()
	{
    return view('staff/edit_staff');


	} 


}
