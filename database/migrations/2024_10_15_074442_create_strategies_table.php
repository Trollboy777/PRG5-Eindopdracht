<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('strategies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title", "100");
            $table->string("description", "255");
            $table->enum("game_version", ["Red Blue & Yellow", "Gold Silver & Crystal", "Ruby Sapphire & Emerald", "Diamond Pearl & Platinum", "Black & White", "Black & White 2", "X & Y", "Sun & Moon", "Ultra Sun & Moon", "Sword & Shield", "Scarlet & Violet"]);
            $table->enum("gym_leader", ["Brock","Misty","Lt. Surge","Erika","Koga","Sabrina","Blaine","Giovanni","Falkner","Bugsy","Whitney","Morty","Chuck","Jasmine","Pryce","Clair","Roxanne","Brawly","Wattson","Flannery","Norman","Winona","Tate & Liza","Wallace","Roark","Gardenia","Maylene","Crasher Wake","Fantina","Byron","Candice","Volkner","Chili","Cress","Elesa","Clay","Skyla","Brycen","Drayton","Iris","Viola","Grant","Korrina","Ramos","Clemont","Valerie","Olympia","Wulfric","Ilima","Lana","Kiawe","Mallow","Nanu","Hala","Kahili","Raihan","Milo","Nessa","Kabu","Bea","Allister","Opal","Gordie","Raihan"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strategies');
    }
};
