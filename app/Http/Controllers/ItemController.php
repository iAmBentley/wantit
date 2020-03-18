<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
		$items = Item::with('category')->paginate(9);
		$categories = Category::where('is_active', 1)->get();

		return view('items.index', compact('categories', 'items'));
	}
	
    public function create()
    {
        return view('items.create');
	}
	
    public function store(Request $request)
    {
        //
	}
	
    public function show($id)
    {
        return view('items.show');
	}
	
    public function edit(Item $item)
    {
		$categories = Category::where('is_active', 1)->get();
        return view('items.edit', compact('categories', 'item'));
	}
	
    public function update(Request $request, $id)
    {
        //
	}
	
    public function destroy($id)
    {
        //
    }
}