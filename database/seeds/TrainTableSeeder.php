<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

use Faker\Generator;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        for($i = 0; $i <10; $i++){
            $train = new Train();

            $train->agency = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->dateTimeThisMonth();
            $train->arrival_date = $faker->dateTimeThisMonth();
            $train->train_num = $faker->randomNumber(5, true);
            $train->carriages = $faker->randomNumber(2, false);
            $train->is_on_schedule = $faker->boolean();
            $train->is_deleted = $faker->boolean();

            $train->save();
        }
    }
}
