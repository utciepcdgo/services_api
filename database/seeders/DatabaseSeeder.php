<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\PostalCodes\AGSSeeder;
use Database\Seeders\PostalCodes\BCSeeder;
use Database\Seeders\PostalCodes\BCSSeeder;
use Database\Seeders\PostalCodes\CAMPSeeder;
use Database\Seeders\PostalCodes\CDMXSeeder;
use Database\Seeders\PostalCodes\CHIHSeeder;
use Database\Seeders\PostalCodes\CHISSeeder;
use Database\Seeders\PostalCodes\COAHSeeder;
use Database\Seeders\PostalCodes\COLSeeder;
use Database\Seeders\PostalCodes\DGOSeeder;
use Database\Seeders\PostalCodes\GROSeeder;
use Database\Seeders\PostalCodes\GTOSeeder;
use Database\Seeders\PostalCodes\HGOSeeder;
use Database\Seeders\PostalCodes\JALSeeder;
use Database\Seeders\PostalCodes\MEXSeeder;
use Database\Seeders\PostalCodes\MICHSeeder;
use Database\Seeders\PostalCodes\MORSeeder;
use Database\Seeders\PostalCodes\NAYSeeder;
use Database\Seeders\PostalCodes\NLSeeder;
use Database\Seeders\PostalCodes\OAXSeeder;
use Database\Seeders\PostalCodes\PUESeeder;
use Database\Seeders\PostalCodes\QROOSeeder;
use Database\Seeders\PostalCodes\QROSeeder;
use Database\Seeders\PostalCodes\SINSeeder;
use Database\Seeders\PostalCodes\SLPSeeder;
use Database\Seeders\PostalCodes\SONSeeder;
use Database\Seeders\PostalCodes\TABSeeder;
use Database\Seeders\PostalCodes\TAMPSSeeder;
use Database\Seeders\PostalCodes\TLAXSeeder;
use Database\Seeders\PostalCodes\VERSeeder;
use Database\Seeders\PostalCodes\YUCSeeder;
use Database\Seeders\PostalCodes\ZACSeeder;
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

        $this->call([
            // Seeders for municipalities
            MunicipalitiesSeeder::class,

            // Seeders for postal codes
            AGSSeeder::class,
            BCSeeder::class,
            BCSSeeder::class,
            CAMPSeeder::class,
            COAHSeeder::class,
            COLSeeder::class,
            CHISSeeder::class,
            CHIHSeeder::class,
            CDMXSeeder::class,
            DGOSeeder::class,
            GTOSeeder::class,
            GROSeeder::class,
            HGOSeeder::class,
            JALSeeder::class,
            MEXSeeder::class,
            MICHSeeder::class,
            MORSeeder::class,
            NAYSeeder::class,
            NLSeeder::class,
            OAXSeeder::class,
            PUESeeder::class,
            QROSeeder::class,
            QROOSeeder::class,
            SLPSeeder::class,
            SINSeeder::class,
            SONSeeder::class,
            TABSeeder::class,
            TAMPSSeeder::class,
            TLAXSeeder::class,
            VERSeeder::class,
            YUCSeeder::class,
            ZACSeeder::class,
        ]);
    }
}
