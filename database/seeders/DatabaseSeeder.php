<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $states = [
            ['name' => 'Aguascalientes', 'abbreviation' => 'AGS', 'shield' => ''],
            ['name' => 'Baja California', 'abbreviation' => 'BC', 'shield' => ''],
            ['name' => 'Baja California Sur', 'abbreviation' => 'BCS', 'shield' => ''],
            ['name' => 'Campeche', 'abbreviation' => 'CAMP', 'shield' => ''],
            ['name' => 'Coahuila', 'abbreviation' => 'COAH', 'shield' => ''],
            ['name' => 'Colima', 'abbreviation' => 'COL', 'shield' => ''],
            ['name' => 'Chiapas', 'abbreviation' => 'CHIS', 'shield' => ''],
            ['name' => 'Chihuahua', 'abbreviation' => 'CHIH', 'shield' => ''],
            ['name' => 'Ciudad de México', 'abbreviation' => 'CDMX', 'shield' => ''],
            ['name' => 'Durango', 'abbreviation' => 'DGO', 'shield' => ''],
            ['name' => 'Guanajuato', 'abbreviation' => 'GTO', 'shield' => ''],
            ['name' => 'Guerrero', 'abbreviation' => 'GRO', 'shield' => ''],
            ['name' => 'Hidalgo', 'abbreviation' => 'HGO', 'shield' => ''],
            ['name' => 'Jalisco', 'abbreviation' => 'JAL', 'shield' => ''],
            ['name' => 'Estado de México', 'abbreviation' => 'MEX', 'shield' => ''],
            ['name' => 'Michoacán', 'abbreviation' => 'MICH', 'shield' => ''],
            ['name' => 'Morelos', 'abbreviation' => 'MOR', 'shield' => ''],
            ['name' => 'Nayarit', 'abbreviation' => 'NAY', 'shield' => ''],
            ['name' => 'Nuevo León', 'abbreviation' => 'NL', 'shield' => ''],
            ['name' => 'Oaxaca', 'abbreviation' => 'OAX', 'shield' => ''],
            ['name' => 'Puebla', 'abbreviation' => 'PUE', 'shield' => ''],
            ['name' => 'Querétaro', 'abbreviation' => 'QRO', 'shield' => ''],
            ['name' => 'Quintana Roo', 'abbreviation' => 'QROO', 'shield' => ''],
            ['name' => 'San Luis Potosí', 'abbreviation' => 'SLP', 'shield' => ''],
            ['name' => 'Sinaloa', 'abbreviation' => 'SIN', 'shield' => ''],
            ['name' => 'Sonora', 'abbreviation' => 'SON', 'shield' => ''],
            ['name' => 'Tabasco', 'abbreviation' => 'TAB', 'shield' => ''],
            ['name' => 'Tamaulipas', 'abbreviation' => 'TAMPS', 'shield' => ''],
            ['name' => 'Tlaxcala', 'abbreviation' => 'TLAX', 'shield' => ''],
            ['name' => 'Veracruz', 'abbreviation' => 'VER', 'shield' => ''],
            ['name' => 'Yucatán', 'abbreviation' => 'YUC', 'shield' => ''],
            ['name' => 'Zacatecas', 'abbreviation' => 'ZAC', 'shield' => ''],
        ];

        foreach ($states as $state) {
            State::create($state);
        }

        $this->call(MunicipalitiesSeeder::class);
    }
}
