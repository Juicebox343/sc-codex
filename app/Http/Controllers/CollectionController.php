<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{



    public function index()
    {
        $collections = Collection::all();
        return view('base', compact('collections'));
    }

    public function show($slug)
    {
          $collection = Collection::find($slug);
          return view('single-collection', compact('collection'));

    }
}
