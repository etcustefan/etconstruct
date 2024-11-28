<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'Cati metri patrati are cel mai mare apartament?',
            'answer'   => 'Apartamentele sunt de 52, 62 si 70 metri patrati.'
        ]);
        Faq::create([
            'question' => 'Unde se afla complexul?',
            'answer'   => 'Compelxul se afla pe Soseauia Valea Rediului Nr.161 Foloseste Google Maps pentru a ajunge mai rapid: https://maps.app.goo.gl/zccrBKJ7gBEVKufD8'
        ]);
        Faq::create([
            'question' => 'Cat la suta este avansul?',
            'answer'   => 'Avansul se face la incheierea antecontractului si va fi in valoare de 10% din valoarea totala a propietatii.'
        ]);
        Faq::create([
            'question' => 'Se poate face credit prima casa?',
            'answer'   => 'Sigur , se poate face orice fel de credit , in functie de ...'
        ]);
    }
}
