<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemListController extends Controller
{
	public function index()
    {
		return Item::with('category')->get();
    }
}
