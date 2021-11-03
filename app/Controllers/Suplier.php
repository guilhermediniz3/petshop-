<?php

namespace App\Controllers;

class Suplier extends BaseController
{
	public function index()
	{
		$this->Suplier_model = (new \App\Models\Suplier_model());
        $Suplier_data = $this->Suplier_model->suplier();
		return view('suplier/list_suplier', [
            'data' => $Suplier_data
        ]);
	}
	public function addSuplier()
	{
		return view('suplier/add_suplier');
	}
	public function editSuplier()
		{
		return view('suplier/edit_suplier');
	}

}