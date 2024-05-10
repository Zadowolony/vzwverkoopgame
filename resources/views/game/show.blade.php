@extends('layouts.default')

<body>
    @section('content')
        <main class="bg-appleblue">
            <div class="container-full bg-yellow">

                <div class="container container-show-game row col-12 ">

                    <div class="col-12 col-md-5 ">
                        <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}">
                    </div>

                    <div class="p-b-25 col-md-5">
                        <h2 class="p-b-10">{{ $game->titel }}</h2>
                        <p>
                        <p>{{ $game->game_beschrijving }}</p>
                        </p>
                        <div class="game_category_console col-2">
                            <p>{{ implode(', ', $game->platforms->pluck('platform_naam')->toArray()) }}</p>
                        </div>


                    </div>


                </div>




                <div class="container">
                    <div class="col-12 col-md-12 p-b-50">


                        <div class="col-12">
                            <h2 class="p-b-20">Verkopers :</h2>
                            @foreach ($userGames as $index => $userGame)
                                <div class="game-verkopers-tabel {{ $index % 2 == 0 ? 'bg-appleblue' : 'bg-yellow' }}">
                                    <h3>{{ $userGame->user->name }}</h3>
                                    <p>€{{ $userGame->prijs }}</p>
                                    <p>{{ $userGame->conditie }}</p>
                                    <button onclick="location.href='{{ route('verkoop.show', $game->id) }}'">Kopen</button>
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
