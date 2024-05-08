@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main>
            <h1>Dit is mijn verkoop pagina</h1>

            <div class="container">
                <div class="row col-12">
                    @forelse ($userGames as $userGame)
                        <div class="row col-3">
                            <div class="verkoop-card col-12">

                                <a href="{{ route('verkoop.show', $userGame->game->id) }}">

                                    <img src="{{ asset('storage/' . $userGame->game->foto) }}"
                                        alt="{{ $userGame->game->titel }}">
                                    <h2>{{ $userGame->game->titel }}</h2>

                                    <h4>Spel van: {{ Auth::user()->name }}</h4>
                                    <p>€{{ $userGame->prijs }}</p>
                                    <p>{{ implode(', ', $userGame->game->platforms->pluck('platform_naam')->toArray()) }}
                                    </p>
                                </a>

                            </div>
                        </div>
                    @empty
                        <p>No games available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </main>
    @endsection



</body>

</html>
