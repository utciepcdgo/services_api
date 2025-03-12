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
            ['name' => 'AGUASCALIENTES', 'abbreviation' => 'AGS', 'shield' => 'https://'],
            ['name' => 'BAJA CALIFORNIA', 'abbreviation' => 'BC', 'shield' => 'https://'],
            ['name' => 'BAJA CALIFORNIA SUR', 'abbreviation' => 'BCS', 'shield' => 'https://'],
            ['name' => 'CAMPECHE', 'abbreviation' => 'CAMP', 'shield' => 'https://'],
            ['name' => 'COAHUILA', 'abbreviation' => 'COAH', 'shield' => 'https://'],
            ['name' => 'COLIMA', 'abbreviation' => 'COL', 'shield' => 'https://'],
            ['name' => 'CHIAPAS', 'abbreviation' => 'CHIS', 'shield' => 'https://'],
            ['name' => 'CHIHUAHUA', 'abbreviation' => 'CHIH', 'shield' => 'https://'],
            ['name' => 'CIUDAD DE MÉXICO', 'abbreviation' => 'CDMX', 'shield' => 'https://'],
            ['name' => 'DURANGO', 'abbreviation' => 'DGO', 'shield' => 'https://'],
            ['name' => 'GUANAJUATO', 'abbreviation' => 'GTO', 'shield' => 'https://'],
            ['name' => 'GUERRERO', 'abbreviation' => 'GRO', 'shield' => 'https://'],
            ['name' => 'HIDALGO', 'abbreviation' => 'HGO', 'shield' => 'https://'],
            ['name' => 'JALISCO', 'abbreviation' => 'JAL', 'shield' => 'https://'],
            ['name' => 'ESTADO DE MÉXICO', 'abbreviation' => 'MEX', 'shield' => 'https://'],
            ['name' => 'MICHOACÁN', 'abbreviation' => 'MICH', 'shield' => 'https://'],
            ['name' => 'MORELOS', 'abbreviation' => 'MOR', 'shield' => 'https://'],
            ['name' => 'NAYARIT', 'abbreviation' => 'NAY', 'shield' => 'https://'],
            ['name' => 'NUEVO LEÓN', 'abbreviation' => 'NL', 'shield' => 'https://'],
            ['name' => 'OAXACA', 'abbreviation' => 'OAX', 'shield' => 'https://'],
            ['name' => 'PUEBLA', 'abbreviation' => 'PUE', 'shield' => 'https://'],
            ['name' => 'QUERÉTARO', 'abbreviation' => 'QRO', 'shield' => 'https://'],
            ['name' => 'QUINTANA ROO', 'abbreviation' => 'QROO', 'shield' => 'https://'],
            ['name' => 'SAN LUIS POTOSÍ', 'abbreviation' => 'SLP', 'shield' => 'https://'],
            ['name' => 'SINALOA', 'abbreviation' => 'SIN', 'shield' => 'https://'],
            ['name' => 'SONORA', 'abbreviation' => 'SON', 'shield' => 'https://'],
            ['name' => 'TABASCO', 'abbreviation' => 'TAB', 'shield' => 'https://'],
            ['name' => 'TAMAULIPAS', 'abbreviation' => 'TAMPS', 'shield' => 'https://'],
            ['name' => 'TLAXCALA', 'abbreviation' => 'TLAX', 'shield' => 'https://'],
            ['name' => 'VERACRUZ', 'abbreviation' => 'VER', 'shield' => 'https://'],
            ['name' => 'YUCATÁN', 'abbreviation' => 'YUC', 'shield' => 'https://'],
            ['name' => 'ZACATECAS', 'abbreviation' => 'ZAC', 'shield' => 'https://'],
        ];

        foreach ($states as $state) {
            State::create($state);
        }

        $this->call([
            // Seeders for municipalities
            MunicipalitiesSeeder::class,

            // Seeders for postal codes
//            AGSSeeder::class,
//            BCSeeder::class,
//            BCSSeeder::class,
//            CAMPSeeder::class,
//            COAHSeeder::class,
//            COLSeeder::class,
//            CHISSeeder::class,
//            CHIHSeeder::class,
//            CDMXSeeder::class,
//            DGOSeeder::class,
//            GTOSeeder::class,
//            GROSeeder::class,
//            HGOSeeder::class,
//            JALSeeder::class,
//            MEXSeeder::class,
//            MICHSeeder::class,
//            MORSeeder::class,
//            NAYSeeder::class,
//            NLSeeder::class,
//            OAXSeeder::class,
//            PUESeeder::class,
//            QROSeeder::class,
//            QROOSeeder::class,
//            SLPSeeder::class,
//            SINSeeder::class,
//            SONSeeder::class,
//            TABSeeder::class,
//            TAMPSSeeder::class,
//            TLAXSeeder::class,
//            VERSeeder::class,
//            YUCSeeder::class,
//            ZACSeeder::class,
        ]);
    }
}
