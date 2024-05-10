@extends('layouts.default')

<body>
    @section('content')
        <main class="bg-appleblue">
            <div class="container-full bg-yellow">
                <div class="container container-show-game row col-12">

                    <div class="col-12 col-md-6 flex flex-column align-items-start p-t-50 ">
                        <div class="p-b-25">
                            <h2>{{ $game->titel }}</h2>

                        </div>

                        <div class="col-8 ">
                            <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}">
                        </div>
                        <div>
                            <p>{{ implode(', ', $game->platforms->pluck('platform_naam')->toArray()) }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">


                        <div class="col-12">
                            <h2 class="p-b-20">Verkopers :</h2>
                            @foreach ($userGames as $index => $userGame)
                                <div class="game-verkopers-tabel {{ $index % 2 == 0 ? 'bg-appleblue' : 'bg-yellow' }}">
                                    <h3>{{ $userGame->user->name }}</h3>
                                    <p>€{{ $userGame->prijs }}</p>
                                    <p>{{ $userGame->conditie }}</p>
                                    <button>Kopen</button>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>


        </main>
    @endsection
</body>

</html>
