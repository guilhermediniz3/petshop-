<?php

namespace App\Controllers;

class Client extends BaseController
{
	public function index()
	{
		$this->Client_model = (new \App\Models\Client_model());
        $Client_data = $this->Client_model->client();
		return view('client/list_client', [
            'data' => $Client_data
        ]);
	}
	public function addClient()
	{
		return view('client/add_client');
	}
	public function editClient()
		{
		return view('client/edit_client');
	}

}