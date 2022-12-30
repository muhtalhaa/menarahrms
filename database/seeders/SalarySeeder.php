<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salaries = [
            [
                'city_name' => 'KABUPATEN BANDUNG',
                'total' => 1000000,
            ],
            [
                'city_name' => 'KABUPATEN BEKASI',
                'total' => 2000000,
            ],
            [
                'city_name' => 'KABUPATEN BOGOR',
                'total' => 3000000,
            ],
            [
                'city_name' => 'KABUPATEN TANGERANG',
                'total' => 4000000,
            ],
            [
                'city_name' => 'KOTA BANDUNG',
                'total' => 5000000,
            ],
            [
                'city_name' => 'KOTA BEKASI',
                'total' => 6000000,
            ],
            [
                'city_name' => 'KOTA BOGOR',
                'total' => 7000000,
            ],
            [
                'city_name' => 'KOTA CIMAHI',
                'total' => 8000000,
            ],
            [
                'city_name' => 'KOTA DEPOK',
                'total' => 9000000,
            ],
            [
                'city_name' => 'KOTA JAKARTA',
                'total' => 10000000,
            ],
            [
                'city_name' => 'KOTA TANGERANG',
                'total' => 11000000,
            ],
            [
                'city_name' => 'KOTA TANGERANG SELATAN',
                'total' => 12000000,
            ]
        ];

        $company = Company::where('name', 'PT. Barokah Amanah Sentosa')->first();

        foreach ($salaries as $salary) {
            Salary::create([
                'company_id' => $company->id,
                'city_name' => $salary['city_name'],
                'total' => $salary['total'],
            ]);
        }
    }
}