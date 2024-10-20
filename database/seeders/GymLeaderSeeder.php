<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GymLeader;

class GymLeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gymleaders = [
            // Generatie 1: Kanto
            ['name' => 'Brock', 'tag_id' => 1],      // Rock
            ['name' => 'Misty', 'tag_id' => 2],      // Water
            ['name' => 'Lt. Surge', 'tag_id' => 3],  // Electric
            ['name' => 'Erika', 'tag_id' => 4],      // Grass
            ['name' => 'Koga', 'tag_id' => 5],       // Poison
            ['name' => 'Sabrina', 'tag_id' => 6],    // Psychic
            ['name' => 'Blaine', 'tag_id' => 7],     // Fire
            ['name' => 'Giovanni', 'tag_id' => 8],   // Ground

            // Generatie 2: Johto
            ['name' => 'Falkner', 'tag_id' => 9],    // Flying
            ['name' => 'Bugsy', 'tag_id' => 10],     // Bug
            ['name' => 'Whitney', 'tag_id' => 11],   // Normal
            ['name' => 'Morty', 'tag_id' => 12],     // Ghost
            ['name' => 'Chuck', 'tag_id' => 13],     // Fighting
            ['name' => 'Jasmine', 'tag_id' => 14],   // Steel
            ['name' => 'Pryce', 'tag_id' => 15],     // Ice
            ['name' => 'Clair', 'tag_id' => 16],     // Dragon

            // Generatie 3: Hoenn
            ['name' => 'Roxanne', 'tag_id' => 1],    // Rock
            ['name' => 'Brawly', 'tag_id' => 13],    // Fighting
            ['name' => 'Wattson', 'tag_id' => 3],    // Electric
            ['name' => 'Flannery', 'tag_id' => 7],   // Fire
            ['name' => 'Norman', 'tag_id' => 11],    // Normal
            ['name' => 'Winona', 'tag_id' => 9],     // Flying
            ['name' => 'Tate & Liza', 'tag_id' => 6],// Psychic
            ['name' => 'Wallace', 'tag_id' => 2],    // Water

            // Generatie 4: Sinnoh
            ['name' => 'Roark', 'tag_id' => 1],      // Rock
            ['name' => 'Gardenia', 'tag_id' => 4],   // Grass
            ['name' => 'Maylene', 'tag_id' => 13],   // Fighting
            ['name' => 'Crasher Wake', 'tag_id' => 2],// Water
            ['name' => 'Fantina', 'tag_id' => 12],   // Ghost
            ['name' => 'Byron', 'tag_id' => 14],     // Steel
            ['name' => 'Candice', 'tag_id' => 15],   // Ice
            ['name' => 'Volkner', 'tag_id' => 3],    // Electric

            // Generatie 5: Unova
            ['name' => 'Chili', 'tag_id' => 7],      // Fire
            ['name' => 'Cress', 'tag_id' => 2],      // Water
            ['name' => 'Elesa', 'tag_id' => 3],      // Electric
            ['name' => 'Clay', 'tag_id' => 8],       // Ground
            ['name' => 'Skyla', 'tag_id' => 9],      // Flying
            ['name' => 'Brycen', 'tag_id' => 15],    // Ice
            ['name' => 'Drayden', 'tag_id' => 16],   // Dragon
            ['name' => 'Iris', 'tag_id' => 16],      // Dragon

            // Generatie 6: Kalos
            ['name' => 'Viola', 'tag_id' => 10],     // Bug
            ['name' => 'Grant', 'tag_id' => 1],      // Rock
            ['name' => 'Korrina', 'tag_id' => 13],   // Fighting
            ['name' => 'Ramos', 'tag_id' => 4],      // Grass
            ['name' => 'Clemont', 'tag_id' => 3],    // Electric
            ['name' => 'Valerie', 'tag_id' => 17],   // Fairy
            ['name' => 'Olympia', 'tag_id' => 6],    // Psychic
            ['name' => 'Wulfric', 'tag_id' => 15],   // Ice

            // Generatie 7: Alola
            ['name' => 'Ilima', 'tag_id' => 11],     // Normal
            ['name' => 'Lana', 'tag_id' => 2],       // Water
            ['name' => 'Kiawe', 'tag_id' => 7],      // Fire
            ['name' => 'Mallow', 'tag_id' => 4],     // Grass
            ['name' => 'Nanu', 'tag_id' => 18],      // Dark
            ['name' => 'Hala', 'tag_id' => 13],      // Fighting
            ['name' => 'Kahili', 'tag_id' => 9],     // Flying

            // Generatie 8: Galar
            ['name' => 'Milo', 'tag_id' => 4],       // Grass
            ['name' => 'Nessa', 'tag_id' => 2],      // Water
            ['name' => 'Kabu', 'tag_id' => 7],       // Fire
            ['name' => 'Bea', 'tag_id' => 13],       // Fighting
            ['name' => 'Allister', 'tag_id' => 12],  // Ghost
            ['name' => 'Opal', 'tag_id' => 17],      // Fairy
            ['name' => 'Gordie', 'tag_id' => 1],     // Rock
            ['name' => 'Raihan', 'tag_id' => 16],    // Dragon

            // Generatie 9: Paldea
            ['name' => 'Katy', 'tag_id' => 10],      // Bug
            ['name' => 'Brassius', 'tag_id' => 4],   // Grass
            ['name' => 'Iono', 'tag_id' => 3],       // Electric
            ['name' => 'Kofu', 'tag_id' => 2],       // Water
            ['name' => 'Thyme', 'tag_id' => 12],     // Ghost
            ['name' => 'Tullip', 'tag_id' => 6],     // Psychic
            ['name' => 'Grusha', 'tag_id' => 15],    // Ice


        ];
        foreach ($gymleaders as $leader) {
            GymLeader::create($leader);
        }
    }
}
