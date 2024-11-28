<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'business_name' => 'Etconstruct Project Design SRL',
            'construction_name' => 'Lake View Residence',
            'phone' => '+40748426497',
            'additional_phone' => '+40744116678',
            'email' => 'info@etconstruct.ro',
            'address' => 'Soseaua Pacurari Nr.125 , Iasi 707410'
        ]);
    }
}
