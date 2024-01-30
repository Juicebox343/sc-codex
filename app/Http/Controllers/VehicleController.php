<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index(): View
    {
        $vehicles = Vehicle::orderBy('name')->get();
   
        return view('partials.card-favorite', compact('vehicles'));
    }
}
