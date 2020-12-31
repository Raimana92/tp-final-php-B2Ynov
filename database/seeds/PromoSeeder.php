<?php

use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        DB::table('promos')->insert(
            [
                [
                    'Nom' => 'B1', 
                    'Spécialité' => 'Informatique',
                ]
            ]
        );
        factory(Promo::class, 25)->create()->each(function ($promo) {
            $promo->save();           
        });
    }
}
