<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag; // Zorg ervoor dat deze regel is toegevoegd

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::insert([
            ['name' => 'Rock'],       // tag_id = 1
            ['name' => 'Water'],      // tag_id = 2
            ['name' => 'Electric'],   // tag_id = 3
            ['name' => 'Grass'],      // tag_id = 4
            ['name' => 'Poison'],     // tag_id = 5
            ['name' => 'Psychic'],    // tag_id = 6
            ['name' => 'Fire'],       // tag_id = 7
            ['name' => 'Ground'],     // tag_id = 8
            ['name' => 'Flying'],     // tag_id = 9
            ['name' => 'Bug'],        // tag_id = 10
            ['name' => 'Normal'],     // tag_id = 11
            ['name' => 'Ghost'],      // tag_id = 12
            ['name' => 'Fighting'],   // tag_id = 13
            ['name' => 'Steel'],      // tag_id = 14
            ['name' => 'Ice'],        // tag_id = 15
            ['name' => 'Dragon'],     // tag_id = 16
            ['name' => 'Fairy'],      // tag_id = 17
            ['name' => 'Dark'],       // tag_id = 18
        ]);
    }
}
