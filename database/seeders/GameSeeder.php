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
            'foto' => 'games/a-way-out-ps4.jpg',
            'game_beschrijving' => 'A Way Out is an experience that must be played with two players. Each player controls one of the main characters, Leo and Vincent, in a reluctant alliance to break out of prison and gain their freedom. Play the entire experience with your friends for free using the friends pass free trial feature.'],
            ['titel' => 'Call Of Duty Black Ops ',
            'platform_naam' => 'PS4',
            'foto' => 'games/call-of-duty-black-ops-3-ps4.jpg',
            'game_beschrijving' => 'Setting and characters. Call of Duty: Black Ops III takes place in 2065, 40 years after the events of Black Ops II, in a world facing upheaval from conflicts, climate change and new technologies. A Third Cold War is ongoing between two global alliances, known as the Winslow Accord and the Common Defense Pact.'],
            ['titel' => 'God Of War 3 remastered ',
            'platform_naam' => 'PS4',
            'foto' => 'games/god-of-war-3-remastered-ps4.jpg',
            'game_beschrijving' => 'Set in the realm of brutal Greek mythology, God of War III Remastered is the critically acclaimed single-player game that allows players to take on the fearless role of ex-Spartan warrior, Kratos, as he rises from the darkest depths of Hades to scale the very heights of Mt Olympus and seek his bloody revenge on those who have betrayed him. Armed with double-chained blades and an array of new weapons and magic, Kratos must take on mythologys deadliest creatures while solving intricate puzzles throughout his merciless quest to destroy Olympus.'],
            ['titel' => 'Marvel Avengers',
            'platform_naam' => 'PS4',
            'foto' => 'games/marvel-avengers-ps4.jpg',
            'game_beschrijving' => 'Marvels Avengers is a third-person, action-adventure game. It features an original story with single-player and co-operative gameplay. The game features a combat system chaining attacks, dodges, abilities, skills and elements during a combat phase.'],
            ['titel' => 'Marvel Spider Man',
            'platform_naam' => 'PS4',
            'foto' => 'games/marvel-spider-man-ps4.jpg',
            'game_beschrijving' => 'Overview. Marvels Spider-Man is an open-world third-person action-adventure game, in which the player controls Peter Parker, under his superhero identity Spider-Man, through Manhattan, New York City to fight crime.'],
            ['titel' => 'Wanderlust',
            'platform_naam' => 'PS4',
            'foto' => 'games/wanderlust-ps4.jpg',
            'game_beschrijving' => 'Summary Wanderlust is a real-life inspired adventure game about modern travelers, each with their own desires, hopes, and fears. Accompany them as both a reader and a storyteller, step into their shoes, and decide how the story will unfold. Let the journey change you.'],

            ['titel' => 'A Way Out',
            'platform_naam' => 'PC',
            'foto' => 'games/a-way-out-pc.jpg',
            'game_beschrijving' => 'A Way Out is an experience that must be played with two players. Each player controls one of the main characters, Leo and Vincent, in a reluctant alliance to break out of prison and gain their freedom. Play the entire experience with your friends for free using the friends pass free trial feature.'],
            ['titel' => 'Star Wars Battlefront',
            'platform_naam' => 'PC',
            'foto' => 'games/battlefront-pc.jpg',
            'game_beschrijving' => 'Star Wars: Battlefront is a series of first- and third-person shooter video games based on the Star Wars franchise. Players take the role of characters from the franchise in either of two opposing factions in different time periods of the Star Wars universe.'],
            ['titel' => 'Civilization V',
            'platform_naam' => 'PC',
            'foto' => 'games/civilization-v-pc.jpg',
            'game_beschrijving' => 'In Civilization® V, players strive to become Ruler of the World by establishing and leading a civilization from the dawn of man into the space age, waging war, conducting diplomacy, discovering new technologies, going head-to-head with some of historys greatest leaders and building the most powerful empire in the world'],
            ['titel' => 'Crysis',
            'platform_naam' => 'PC',
            'foto' => 'games/crysis-pc.jpg',
            'game_beschrijving' => 'Crysis is a first-person shooter video game series created by Crytek. The series revolves around a group of military protagonists with "nanosuits", technologically advanced suits of armor that give them enhanced physical strength, speed, defense, and cloaking abilities.'],
            ['titel' => 'Red dead Redemption',
            'platform_naam' => 'PC',
            'foto' => 'games/red-dead-redemption-pc.jpg',
            'game_beschrijving' => 'Red Dead Redemption is set during the decline of the American frontier in the year 1911. It follows John Marston, a former outlaw who, after his wife and son are taken hostage by the government in ransom for his services as a hired gun, sets out to bring three members of his former gang to justice.'],

            ['titel' => 'Just Cause 4',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/just-cause-4-xbox-one.jpg',
            'game_beschrijving' => '
            Just Cause 4 is an action-adventure game played from a third-person perspective. The player assumes the role of series protagonist Rico Rodríguez. The game takes place in the fictional nation of Solís, a large open world consisting of different biomes including snowy mountains and deserts.'],
            ['titel' => 'Destiny 2',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/destiny-2-xbox-one.jpg',
            'game_beschrijving' => 'Similar to its predecessor, Destiny 2 is a first-person shooter game that incorporates role-playing and massively multiplayer online game (MMO) elements. The original Destiny includes on-the-fly matchmaking that allowed players to communicate only with other players with whom they were "matched" by the game.'],
            ['titel' => 'Fifa 15',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/fifa-15-xbox-one.jpg',
            'game_beschrijving' => 'FIFA 15s Ultimate Team introduced a new feature, in which users can sign loan players for a limited duration of matches. Another new feature is The Concept Squad, where players are given access to the games database and can create a "dream squad"'],
            ['titel' => 'Fortnite',
            'platform_naam' => 'Xbox One',
            'foto' => 'games/fortnite-xbox-one.jpg',
            'game_beschrijving' => 'Fortnite is a third-person shooter game where up to 100 players compete to be the last person or team standing. You can compete alone or join a team of up to four. You progress through the game by exploring the island, collecting weapons, building fortifications and engaging in combat with other players.'],

            ['titel' => 'Banjo Kazooie',
            'platform_naam' => 'Retro',
            'foto' => 'games/banjo-kazooie-n64.jpg',
            'game_beschrijving' => 'Banjo-Kazooie is a 1998 platform game developed by Rare and published by Nintendo for the Nintendo 64. Controlling the player characters, the bear Banjo and the bird Kazooie, the player attempts to save Banjos kidnapped sister Tooty from the witch Gruntilda.'],
            ['titel' => 'Rayman 2',
            'platform_naam' => 'Retro',
            'foto' => 'games/rayman-2-the-great-escape-ps1.png',
            'game_beschrijving' => 'In contrast to its predecessor, which was a 2D platformer, Rayman 2 is a 3D platformer. The player navigates through a mostly linear sequence of levels, fighting enemy Robo-Pirates, solving puzzles and collecting lums. Collecting enough lums gains the player access to new parts of the world.'],
            ['titel' => 'Crash Bandicoot',
            'platform_naam' => 'Retro',
            'foto' => 'games/crash-bandicoot-ps1.jpg',
            'game_beschrijving' => 'An example of gameplay in Crash Bandicoot, illustrating the games basic mechanics. Crash Bandicoot is a platform game in which the player controls the titular character Crash, who is tasked with traversing 32 levels to defeat Doctor Neo Cortex and rescue Tawna.'],
            ['titel' => 'Dino Crisi 2',
            'platform_naam' => 'Retro',
            'foto' => 'games/dino-crisis-2-ps1.jpg',
            'game_beschrijving' => 'Dino Crisis 2 is a survival horror game in which you control the characters Dylan and Regina (switching from one to another at various points in the storyline). You will collect items and use them to solve puzzles while fighting the hordes of dinosaurs that inhabit the island.'],
            ['titel' => 'Resident Evil',
            'platform_naam' => 'Retro',
            'foto' => 'games/resident-evil-ps1.jpg',
            'game_beschrijving' => 'Resident Evil, known as Biohazard (バイオハザード, Baiohazādo?) in Japan, is a survival horror video game series and media franchise created by Capcom. The franchise follows stories about biological weapons and viral incidents which results in, among other catastrophes, outbreaks of zombies'],
            ['titel' => 'Spider Man',
            'platform_naam' => 'Retro',
            'foto' => 'games/spider-man-ps1.jpg',
            'game_beschrijving' => 'The games story follows Spider-Man as he attempts to clear his name after being framed by a doppelgänger and becoming a wanted criminal, while also having to foil a symbiote invasion orchestrated by Doctor Octopus and Carnage.'],



        ];

        foreach ($games as $game) {
            $platform = Platform::where('platform_naam', $game['platform_naam'])->first();
            $newGame = Game::create([
                'titel' => $game['titel'],
                'foto' => $game['foto'],
                'game_beschrijving' => $game['game_beschrijving']
            ]);
            $newGame->platforms()->attach($platform->id);
        }
    }
}