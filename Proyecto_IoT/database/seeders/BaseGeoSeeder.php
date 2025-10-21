<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;     // ✅ <--- ESTA LÍNEA ES LA CLAVE
use Carbon\Carbon;
use App\Models\Country;
use App\Models\Department;
use App\Models\City;

class BaseGeoSeeder extends Seeder
{
    public function run()
    {
        // País
        $countryId = DB::table('countries')->insertGetId([
            'name' => 'Colombia',
            'code' => 'CO',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Departamentos
        $departments = [
            ['name' => 'Nariño', 'code' => 'NAR', 'id_country' => $countryId],
            ['name' => 'Cauca', 'code' => 'CAU', 'id_country' => $countryId],
        ];
        foreach ($departments as $d) {
            DB::table('departments')->insert(array_merge($d, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }

        // Ciudades
        $cities = [
            ['name' => 'Pasto', 'code' => 'PAS', 'id_department' => 1],
            ['name' => 'Ipiales', 'code' => 'IPI', 'id_department' => 1],
            ['name' => 'Tumaco', 'code' => 'TUM', 'id_department' => 1],
            ['name' => 'Popayán', 'code' => 'POP', 'id_department' => 2],
            ['name' => 'Santander de Quilichao', 'code' => 'SDQ', 'id_department' => 2],
        ];
        foreach ($cities as $c) {
            DB::table('cities')->insert(array_merge($c, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }
    }
}

