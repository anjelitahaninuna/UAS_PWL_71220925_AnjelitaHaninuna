<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ParfumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) 
        {
            DB::table('parfums')->insert([
            'namaParfum' =>$faker->words(4, true),
            'merek' =>$faker->word(),
            'jenisAroma' =>$faker->words(2,true),
            'volume_ml' => $faker->numberBetween(0, 100),
            'harga' => $faker->numberBetween(),
            'stok' => $faker->numberBetween(0, 100),
            'deskripsi' =>$faker->text(),
            'gambar' => $faker->word(),
        ]);
    }
}
}