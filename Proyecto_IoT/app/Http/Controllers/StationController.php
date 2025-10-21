<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\City; // 👈 Asegúrate de importar City
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index()
    {
        $stations = Station::with('city')->get();
        return view('stations.index', compact('stations'));
    }

    public function create()
    {
        $cities = City::all();
        return view('stations.create', compact('cities'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Station $station)
    {
        //
    }

    public function edit(Station $station)
    {
        //
    }

    public function update(Request $request, Station $station)
    {
        //
    }

    public function destroy(Station $station)
    {
        //
    }
}
