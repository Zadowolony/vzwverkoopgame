@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main>

            <div class="container h-50">
                <div class="row col-12">

                    <div class=" col-6 justify-center">
                        <div class="col-12   flex-column align-items-center">
                            <h1>Dit is profile home pagina</h1>
                            <p>Welcome
                            <p>{{ Auth::user()->name }}</p>
                            </p>
                            @if (Auth::user()->profile_picture)
                                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture"
                                    style="width: 150px; height: 150px;">
                            @else
                                <p>No profile picture available.</p>
                            @endif
                        </div>
                    </div>

                    <div class="flex col-6 align-contnet-center justify-center flex-column">
                        <div class="profil-beschrijving m-b-50">
                            <p>{{ Auth::user()->over_mij }}</p>
                        </div>

                        <div class="flex flex-column">
                            <a href="{{ route('profile.edit') }}" class="button">Bewerk mijn profiel</a>
                            <a href="#" class="button">Doe een donatie</a>
                            <a href="{{ route('verkoop.create') }}" class="button">Verkoop een spel</a>
                            @if (auth()->user()->isAdmin())
                                <a href="#">Voeg Event toe</a>
                                <a href="{{ route('admin.create-game') }}">Voeg een game toe</a>
                            @endif
                        </div>
                    </div>

                </div>

            </div>

            <div class="container  ">
                <div>
                    <h2>Mijn Games</h2>
                    <p>Hier komen games die ik verkoop</p>
                </div>

                <div class="row col-12">

                    @if ($games)
                        @foreach ($games as $game)
                            <div class="row">
                                <div class="verkoop-card col-4">
                                    <a href="{{ route('verkoop.show', $game->game->id) }}">


                                        <img src="{{ asset('storage/' . $game->game->foto) }}" alt="Profile Picture">

                                        <div>
                                            <h3>{{ $game->game->titel }}</h3>
                                            <p>{{ $game->prijs }}</p>


                                        </div>
                                    </a>
                                </div>
                        @endforeach
                    @else
                        <p>Geen spellen te koop.</p>
                    @endif

                </div>


            </div>
            </div>

            <div class="container h-50">
                <h2>Mijn wishlist</h2>
                <p>Hier komen de games van mijn wishlist</p>
            </div>
        </main>
    @endsection



</body>

</html>
