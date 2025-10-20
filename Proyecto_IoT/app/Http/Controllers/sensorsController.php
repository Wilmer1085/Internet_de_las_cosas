<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Department;


class SensorController extends Controller
{
    public function index()
    {
        $sensors = Sensor::with('Department.country')->paginate(10);
        return view('Sensor.index', compact('Sensor'));
    }

    public function create()
    {
        $departments = Department::orderBy('name')->get();
        return view('Sensor.create', compact('Department'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required',
            'code'          => 'required|unique:sensors,code',
            'abbrev'        => 'nullable',
            'id_department' => 'required|exists:departments,id',
            'status'        => 'nullable'
        ]);

        Sensor::create([
            'name'          => $data['name'],
            'code'          => $data['code'],
            'abbrev'        => $data['abbrev'] ?? null,
            'id_department' => $data['id_department'],
            'status'        => $request->boolean('status'),
        ]);

        return redirect()->route('Sensor.index')->with('ok', 'Sensor creado');
    }
}
