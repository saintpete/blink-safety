<?php

namespace Database\Seeders;

use App\Models\Precinct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrecinctsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Precinct::updateOrcreate([
            'precinct' => '33705',
        ],
        [
            'city' => 'St Petersburg',
            'state' => 'FL',
        ]);

        Precinct::updateOrcreate([
            'precinct' => '32803',
        ],
            [
                'city' => 'Orlando',
                'state' => 'FL',
            ]);

    }
}