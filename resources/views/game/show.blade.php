@extends('layouts.default')

<body>
    @section('content')
        <main class="bg-appleblue">
            <div class="container-full bg-yellow">
                <div class="container gameshow-container h-50 align-items-center flex">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}">
                        </div>
                        <div class="col-6 flex justify-start align-items-center">
                            <p>{{ $game->beschrijving }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container bg-appleblue">
                <div class="row">
                    <div class="col-12">
                        <h2>Aanbiedingen voor deze game</h2>
                        @foreach ($userGames as $userGame)
                            <div class="flex align-items-center justify-between col-12 p-b-20">
                                <h3>{{ $userGame->user->name }}</h3>
                                <p>€{{ $userGame->prijs }}</p>
                                <p>{{ $userGame->conditie }}</p>
                                <button>Kopen</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    @endsection
</body>

</html>
