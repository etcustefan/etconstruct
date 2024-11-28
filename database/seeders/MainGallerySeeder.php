<?php

namespace Database\Seeders;

use App\Models\MainGallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MainGallery::create([
            'image_path' =>'test',
            'video_path' =>  'test',
            'heading_text' => 'Apartamentul visurilor tale',
            'text' => "Complex rezidențial situat pe malul lacului, <br> oferind apartamente moderne, finisaje de lux, panoramă spectaculoasă și un stil de viață exclusivist.",
            'button_text' => 'Solicita o oferta',
            'button_action' => 'requestQuote',
        ]);
        MainGallery::create([
            'image_path' =>'test',
            'video_path' =>  'test',
            'text' => "Descoperă eleganța unui complex rezidențial cu vedere la lac. <br> Apartamente spațioase, finisaje rafinate și o atmosferă de relaxare absolută.",
            'button_text' => 'Apartamente Randate 3D',
            'button_action' => 'randare3d',
        ]);
        MainGallery::create([
            'image_path' =>'test',
            'video_path' =>  'test',
            'text' => "We help small startups grow from idea to millions of users. we can also <br>automate your marketing and customer service.",
            'button_text' => 'Get Started Now',
            'button_action' => '',
        ]);
    }
}
