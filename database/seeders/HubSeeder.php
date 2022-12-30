<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Hub;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hubs = [
            [
                'name' => 'BALARAJA FIRST MILE HUB',
            ],
            [
                'name' => 'BALARAJA HUB',
            ],
            [
                'name' => 'BANDUNG BARAT HUB',
            ],
            [
                'name' => 'BANDUNG DC',
            ],
            [
                'name' => 'BANDUNG FIRST MILE HUB',
            ],
            [
                'name' => 'BANDUNG HUB',
            ]
        ];

        $company = Company::where('name', 'PT. Barokah Amanah Sentosa')->first();

        foreach ($hubs as $hub) {
            Hub::create([
                'company_id' => $company->id,
                'name' => $hub['name'],
            ]);
        }
    }
}