<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                'name' => 'HRD',
            ],
            [
                'name' => 'CONTROL TOWER',
            ],
            [
                'name' => 'EXPORT OOPERATOR',
            ],
            [
                'name' => 'FM OPERATOR',
            ],
            [
                'name' => 'HUB OPERATOR',
            ],
            [
                'name' => 'RETURN OPERATOR',
            ],
            [
                'name' => 'SOC OPERATOR',
            ]
        ];

        $company = Company::where('name', 'PT. Barokah Amanah Sentosa')->first();

        foreach ($positions as $position) {
            Position::create([
                'company_id' => $company->id,
                'name' => $position['name'],
            ]);
        }
    }
}