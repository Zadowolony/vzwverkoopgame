@extends('layouts.default')

<body>
    @section('content')
        <main class="bg-main-1 ">


            <div class="container  flex justify-center align-items-center ">
                <div class="p-t-50 p-b-50">
                    <div class="row game-category col-12 justify-center flex">
                        <!-- Category buttons -->
                        <div class="col-12 row justify-center gap20 p-b-50">
                            <a href="{{ route('games', ['category' => 'retro']) }}"
                                class="button {{ request()->routeIs('games') && request()->input('category') == 'retro' ? 'active' : '' }}">Retro</a>
                            <a href="{{ route('games', ['category' => 'PC']) }}"
                                class="button {{ request()->routeIs('games') && request()->input('category') == 'PC' ? 'active' : '' }}">PC</a>
                            <a href="{{ route('games', ['category' => 'PS4']) }}"
                                class="button {{ request()->routeIs('games') && request()->input('category') == 'PS4' ? 'active' : '' }}">PS4</a>
                            <a href="{{ route('games', ['category' => 'Xbox One']) }}"
                                class="button {{ request()->routeIs('games') && request()->input('category') == 'Xbox One' ? 'active' : '' }}">Xbox
                                One</a>
                            <a href="{{ route('games') }}"
                                class="button {{ request()->routeIs('games') && request()->input('category') == null ? 'active' : '' }}">Alle</a>
                        </div>
                    </div>
                    <div class="row col-12 game-cards-container ">
                        @forelse ($games as $game)
                            <div class="row col-6 col-md-3">
                                <div class="game-card col-12 bg-appleblue">
                                    <div>
                                        <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}">
                                    </div>
                                    <div class="game-card-info">
                                        <h2>{{ $game->titel }}</h2>

                                        @forelse ($game->userGames as $userGame)
                                            <p>€{{ $userGame->prijs }}</p>
                                        @empty
                                            <p>Geen verkopers gevonden</p>
                                        @endforelse
                                        <p class="p-t-25 p-b-25">
                                            {{ implode(', ', $game->platforms->pluck('platform_naam')->toArray()) }}</p>
                                        <a href="{{ route('game.show', $game->id) }}">
                                            Meer Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No games available at the moment.</p>
                        @endforelse

                    </div>

                </div>
            </div>
        </main>
    @endsection
</body>

</html>
