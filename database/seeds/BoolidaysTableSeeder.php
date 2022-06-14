<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Booliday;

class BoolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $newHoliday= new Booliday();

            $newHoliday->title=$faker->company();
            $newHoliday->destination=$faker->country();
            $newHoliday->description=$faker->paragraph(5,true);
            $newHoliday->stay=$faker->numberBetween(2,30);
            $newHoliday->pricePerDay=$faker->randomFloat(1, 100, 10000);
            $newHoliday->image_url=$faker->imageUrl(360, 360, 'country', true);

            $newHoliday->save();
        }
        
    }
}
