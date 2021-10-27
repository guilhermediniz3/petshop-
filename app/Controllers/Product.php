<?php

namespace App\Controllers;

class Product extends BaseController
{
	public function index()
	{
		$this->Product_model = (new \App\Models\Product_model());
        $products_data = $this->Product_model->products();
		return view('product/list_product', [
            'data' => $products_data
        ]);
	}
	public function addPet()
	{
		return view('product/add_product');	
	}
	public function editPet()
		{
		return view('product/edit_product');
	}

}