<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/home	');
	}

	public function test()
	{
echo"ola mundo";


	}
	public function cadastrar()
	{
echo"cadastrar";


	}

	public function editar()
	{

		echo"cadastro atualizado";
	}
}
