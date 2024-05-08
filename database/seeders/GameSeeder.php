<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Platform;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            ['titel' => 'A Way Out',
            'platform_naam' => 'PS4',
            'foto' => 'games/a-way-out-ps4.jpg'],
            ['titel' => 'Call Of Duty Black Ops ',
            'platform_naam' => 'PS4',
            'foto' => 'games/call-of-duty-black-ops-3-ps4.jpg'],
            ['titel' => 'God Of War 3 remastered ',
            'platform_naam' => 'PS4',
            'foto' => 'games/god-of-war-3-remastered-ps4.jpg'],
            ['titel' => 'Marvel Avanagers',
            'platform_naam' => 'PS4',
            'foto' => 'games/marvel-avengers-ps4.jpg'],
            ['titel' => 'Marvel Spider Man',
            'platform_naam' => 'PS4',
            'foto' => 'games/marvel-spider-man-ps4.jpg'],
            ['titel' => 'Wanderlust',
            'platform_naam' => 'PS4',
            'foto' => 'games/wanderlust-ps4.jpg'],

            ['titel' => 'A Way Out',
            'platform_naam' => 'PC',
            'foto' => 'games/a-way-out-pc.jpg'],
            ['titel' => 'Star Wars Battlefront',
            'platform_naam' => 'PC',
            'foto' => 'games/battlefront-pc.jpg'],
            ['titel' => 'Civilization V',
            'platform_naam' => 'PC',
            'foto' => 'games/civilization-v-pc.jpg'],
            ['titel' => 'Crysis',
            'platform_naam' => 'PC',
            'foto' => 'games/crysis-pc.jpg'],
            ['titel' => 'Red dead Redemption',
            'platform_naam' => 'PC',
            'foto' => 'games/red-dead-redemption-pc.jpg'],

            ['titel' => 'Just Cause 4',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/just-cause-4-xbox-one.jpg'],
            ['titel' => 'Destiny 2',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/destiny-2-xbox-one.jpg'],
            ['titel' => 'Fifa 15',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/fifa-15-xbox-one.jpg'],
            ['titel' => 'Fortnite',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/fortnite-xbox-one.jpg'],

            ['titel' => 'Banjo Kazooie',
            'platform_naam' => 'Retro',
            'foto' => 'games/banjo-kazooie-n64.jpg'],
            ['titel' => 'Rayman 2',
            'platform_naam' => 'Retro',
            'foto' => 'games/rayman-2-the-great-escape-ps1.png'],
            ['titel' => 'Crash Bandicoot',
            'platform_naam' => 'Retro',
            'foto' => 'games/crash-bandicoot-ps1.jpg'],
            ['titel' => 'Dino Crisi 2',
            'platform_naam' => 'Retro',
            'foto' => 'games/dino-crisis-2-ps1.jpg'],
            ['titel' => 'Resident Evil',
            'platform_naam' => 'Retro',
            'foto' => 'games/resident-evil-ps1.jpg'],
            ['titel' => 'Spider Man',
            'platform_naam' => 'Retro',
            'foto' => 'games/spider-man-ps1.jpg'],



        ];

        foreach ($games as $game) {
            $platform = Platform::where('platform_naam', $game['platform_naam'])->first();
            $newGame = Game::create([
                'titel' => $game['titel'],
                'foto' => $game['foto']
            ]);
            $newGame->platforms()->attach($platform->id);
        }
    }
}
