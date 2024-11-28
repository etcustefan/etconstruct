<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Apartment::create([
            'title' => 'Penthouse Luxul la superlativ',
            'description' => 'Cu spații ample, ferestre panoramice, terasă privată cu vedere spectaculoasă și dotări exclusiviste, penthouse-ul redefinește eleganța și confortul pentru cei care apreciază calitatea premium.',
            'type' => '3-bedroom',
            'square_meters' => 78,
            'rooms' => 3,
            'company_id'=> 1,
            'image_path'=> 'test'
        ]);
        Apartment::create([
            'title' => 'Apartament cu 2 camere Confort și funcționalitate',
            'description' => 'Perfect pentru cupluri sau familii mici, acest apartament oferă un living luminos, un dormitor spațios, o bucătărie modernă și un balcon cu vedere la lac, ideal pentru momente de relaxare.',
            'type' => '2-bedroom',
            'square_meters' => 58,
            'rooms' => 2,
            'company_id'=> 1,
            'image_path'=> 'test'
        ]);
        Apartment::create([
            'title' => 'Apartament cu 3 camere Confort și funcționalitate',
            'description' => 'Potrivit pentru familii, include un living generos, două dormitoare, o bucătărie deschisă, două băi și o terasă cu priveliște panoramică. Design modern și finisaje de',
            'type' => '3-bedroom',
            'square_meters' => 68,
            'rooms' => 3,
            'company_id'=> 1,
            'image_path'=> 'test'
        ]);
    }
}
