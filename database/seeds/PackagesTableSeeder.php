<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $package = new Package();
            $package->Nome = $faker->city();
            $package->Descrizione = $faker->paragraph(4);
            $package->Prezzo = $faker->randomFloat(2, 100, 10000);
            $package->N°_persone = $faker->randomDigitNot(0);
            $package->giorni = $faker->numberBetween(2, 31);
            $package->Volo_incluso = $faker->boolean();
            $package->save();
        }
        
    }
}
