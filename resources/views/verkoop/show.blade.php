@extends('profile.layouts.profile-default')

<body>
    @section('profile-content')
        <main>
            <h1>Dit is mijn show pagina</h1>

            <div class="container">
                <h1>{{ $game->titel }}</h1>
                <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}" style="width: 300px;">
                <p>Description: {{ $game->beschrijving }}</p>
                <p>Price: €{{ $game->userGames->first()->prijs }}</p>
                <p>Condition: {{ $game->userGames->first()->conditie }}</p>
                <p>Platform: @foreach ($game->platforms as $platform)
                        {{ $platform->platform_naam }}
                    @endforeach
                </p>
                <div class="row">
                    <a href="{{ route('verkoop.edit', $game->id) }}" class="button">Edit Game</a>
                    <!-- Delete form -->
                    <form action="{{ route('verkoop.destroy', $game->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button">Verwijder een spel</button>
                    </form>
                </div>

            </div>

            <div class="container">
                <a href="{{ route('profile') }}" class="button">Back to Profile</a>
            </div>


        </main>
    @endsection



</body>

</html>
