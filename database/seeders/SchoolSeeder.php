<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            [
            'name' => 'BHAK Zell am See',
            'address' => 'Karl-Vogt-Straße 21',
            'school_number' => '506418'
        ],
          [
              'name' => 'HLP Zell am See',
              'address' => 'Karl-Vogt-Straße 21',
              'school_number' => '506419'
          ],
          [
              'name' => 'BG/BRG Zell am See',
              'address' => 'Karl-Vogt-Straße 21',
              'school_number' => '506026'
          ]
        ];
        /*
        $zahlen = [2, 4, 5];
        $zahlen[0];
        $schools[0];
        */

        foreach ($schools as $school) {
            $s = new School();
            $s->name = $school['name'];
            $s->address = $school['address'];
            $s->school_number = $school['school_number'];
            $s->save();
        }
    }
}
