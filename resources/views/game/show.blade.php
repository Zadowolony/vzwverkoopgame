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

                        @if (auth()->check())
                            @php
                                $isOnWishlist = DB::table('wishlist_items')
                                    ->where('user_id', auth()->id())
                                    ->where('game_id', $game->id)
                                    ->exists();
                            @endphp

                            @if (!$isOnWishlist)
                                <form action="{{ route('wishlist.add', $game->id) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="game_id" value="{{ $game->id }}">
                                    <button type="submit" class="btn btn-primary">Add to Wishlist</button>
                                </form>
                            @else
                                <button class="btn btn-secondary" disabled>Already on Wishlist</button>
                            @endif
                        @endif


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
