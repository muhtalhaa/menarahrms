<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\WorkDay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $work_days = [
            [
                'name' => '5-2',
            ],
            [
                'name' => '6-1',
            ]
        ];

        $company = Company::where('name', 'PT. Barokah Amanah Sentosa')->first();

        foreach ($work_days as $work_day) {
            WorkDay::create([
                'company_id' => $company->id,
                'name' => $work_day['name'],
            ]);
        }
    }
}