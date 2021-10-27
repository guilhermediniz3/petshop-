<?php

namespace App\Controllers;

class Pet extends BaseController
{
	public function index()
	{
		return view('pet/list_pet');
	}

	public function addPet()
	{
    return view('pet/add_pet');


	}
	public function editPet()
	{
    return view('pet/edit_pet');


	}


}
