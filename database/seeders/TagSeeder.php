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
            ['name' => 'Rock'],       // Brock
            ['name' => 'Water'],      // Misty
            ['name' => 'Electric'],   // Lt. Surge
            ['name' => 'Grass'],      // Erika
            ['name' => 'Poison'],     // Koga
            ['name' => 'Psychic'],    // Sabrina
            ['name' => 'Fire'],       // Blaine
            ['name' => 'Ground'],     // Giovanni
            ['name' => 'Flying'],     // Falkner
            ['name' => 'Bug'],        // Bugsy
            ['name' => 'Normal'],     // Whitney
            ['name' => 'Ghost'],      // Morty
            ['name' => 'Fighting'],   // Chuck
            ['name' => 'Steel'],      // Jasmine
            ['name' => 'Ice'],        // Pryce
            ['name' => 'Dragon'],     // Clair
            ['name' => 'Rock'],       // Roxanne
            ['name' => 'Fighting'],   // Brawly
            ['name' => 'Electric'],   // Wattson
            ['name' => 'Fire'],       // Flannery
            ['name' => 'Normal'],     // Norman
            ['name' => 'Flying'],     // Winona
            ['name' => 'Psychic'],    // Tate & Liza
            ['name' => 'Water'],      // Wallace
            ['name' => 'Rock'],       // Roark
            ['name' => 'Grass'],      // Gardenia
            ['name' => 'Fighting'],   // Maylene
            ['name' => 'Water'],      // Crasher Wake
            ['name' => 'Ghost'],      // Fantina
            ['name' => 'Steel'],      // Byron
            ['name' => 'Ice'],        // Candice
            ['name' => 'Electric'],   // Volkner
            ['name' => 'Fire'],       // Chili
            ['name' => 'Water'],      // Cress
            ['name' => 'Electric'],   // Elesa
            ['name' => 'Ground'],     // Clay
            ['name' => 'Flying'],     // Skyla
            ['name' => 'Ice'],        // Brycen
            ['name' => 'Dragon'],     // Drayton
            ['name' => 'Dragon'],     // Iris
            ['name' => 'Bug'],        // Viola
            ['name' => 'Rock'],       // Grant
            ['name' => 'Fighting'],   // Korrina
            ['name' => 'Grass'],      // Ramos
            ['name' => 'Electric'],   // Clemont
            ['name' => 'Fairy'],      // Valerie
            ['name' => 'Psychic'],    // Olympia
            ['name' => 'Ice'],        // Wulfric
            ['name' => 'Normal'],     // Ilima
            ['name' => 'Water'],      // Lana
            ['name' => 'Fire'],       // Kiawe
            ['name' => 'Grass'],      // Mallow
            ['name' => 'Dark'],       // Nanu
            ['name' => 'Fighting'],   // Hala
            ['name' => 'Flying'],     // Kahili
            ['name' => 'Dragon'],     // Raihan
            ['name' => 'Grass'],      // Milo
            ['name' => 'Water'],      // Nessa
            ['name' => 'Fire'],       // Kabu
            ['name' => 'Fighting'],   // Bea
            ['name' => 'Ghost'],      // Allister
            ['name' => 'Fairy'],      // Opal
            ['name' => 'Rock'],       // Gordie
            ['name' => 'Bug'],        // Katy
            ['name' => 'Grass'],      // Brassius
            ['name' => 'Electric'],   // Iono
            ['name' => 'Water'],      // Kofu
            ['name' => 'Psychic'],    // Tulip
            ['name' => 'Ice'],        // Grusha
        ]);
    }
}
