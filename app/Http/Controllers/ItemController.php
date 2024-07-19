<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
//import return type View
use Illuminate\View\View;

class ItemController extends Controller
{

   //

   /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $item = Barang::latest()->paginate(10);

        //render view with products
        return view('item.index', compact('item'));
    }
}
