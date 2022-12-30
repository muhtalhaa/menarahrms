<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            [
                'name' => 'EXPORT',
            ],
            [
                'name' => 'FM',
            ],
            [
                'name' => 'LH OR',
            ],
            [
                'name' => 'LM',
            ],
            [
                'name' => 'SOC',
            ]
        ];

        $company = Company::where('name', 'PT. Barokah Amanah Sentosa')->first();

        foreach ($divisions as $division) {
            Division::create([
                'company_id' => $company->id,
                'name' => $division['name'],
            ]);
        }
    }
}