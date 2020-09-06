<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;
class PageController extends Controller
{
    public function mainfun($value='')
    {
        $items=Item::all();
        //dd($items);
        $brands=Brand::all();
        $categories=Category::all();
    	return view('frontend.main',compact('items','brands','categories'));

    }
    public function brandfun($id)
    {
        $brands=Brand::find($id);
    	return view('frontend.brand',compact('brands'));
    }
    public function itemdetailfun($id)
    {
        $items= Item::find($id);
    	return view('frontend.itemdetail',compact('items'));
    }
    public function loginfun($value='')
    {
    	return view('frontend.login');
    }
    public function promotionfun($value='')
    {
    	return view('frontend.promotion');
    }
    public function registerfun($value='')
    {
        return view('frontend.register');
    }
    public function shoppingcartfun($value='')
    {
        return view('frontend.shoppingcart');
    }
    public function subcategoryfun($id)
    {
        $subcategory=Subcategory::find($id);

        $subcategories=Subcategory::all();
        return view('frontend.subcategory',compact('subcategory','subcategories'));
    }
}
