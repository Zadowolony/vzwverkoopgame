@extends('profile.layouts.profile-default')

<body>

    @section('title-profile', 'Mijn Profiel')


    @section('profile-content')
        <main class=" bg-appleblue profile-index">

            <div class="container  flex justify-center align-items-center row col-12">
                <div class="row   profile-box  ">

                    <div class=" col-12 col-md-6 profile-box-image-name ">


                        <h1 class="">Welcome <span class="profile-name">{{ Auth::user()->name }}</span></h1>



                        <div class="col-5 col-md-8 flex justify-center">
                            @if (Auth::user()->profile_picture)
                                <img class="profile-image" src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                                    alt="Profile Picture" style="width: 150px; height: 150px;">
                            @else
                                <p><img src="../images/logo.png" alt="No user Image"></p>
                            @endif
                        </div>


                    </div>

                    <div class="col-12 col-md-6 profile-box-beschrijving m-b-50">
                        <div class="profil-beschrijving ">
                            <p>{{ Auth::user()->over_mij }}</p>
                        </div>

                        <div class=" profil-links row col-12 m-t-25 ">
                            <div class="row justify-around gap20 align-items-center">
                                <a class="col-5 " href="{{ route('profile.edit') }}" class="button">Bewerk mijn
                                    profiel</a>
                                <a class="col-5" href="{{ route('donate') }}" class="button">Doe een donatie</a>
                                <a class="col-5" href="{{ route('verkoop.create') }}" class="button">Verkoop een spel</a>
                                @if (auth()->user()->isAdmin())
                                    <a class="col-5" href="#">Voeg Event toe</a>
                                    <a class="col-5" href="{{ route('admin.create-game') }}">Voeg een game toe</a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="container-full bg-purple">
                <div class="container">
                    <div class="row">
                        <div class="col-12 p-t-50 p-b-50">
                            <h2>Games die ik verkoop</h2>
                        </div>


                        <div class="row col-12 p-b-50">
                            @forelse ($sellingGames as $userGame)
                                <div class=" col-6 col-xs-4 col-md-3 ">
                                    <!-- Each card takes up 3 columns in a 12-column grid, allowing for 4 cards per row -->
                                    <div class="game-card bg-yellow full-card-link relative ">
                                        <a href="{{ route('verkoop.show', $userGame->id) }}" class="">
                                            <img src="{{ asset('storage/' . $userGame->game->foto) }}" alt="Game Image">
                                            <div class="game-card-info">
                                                <h3>{{ $userGame->game->titel }}</h3>
                                                <p>€{{ $userGame->prijs }}</p>
                                            </div>
                                        </a>

                                        <div class="flex justify-end align-items-center game-card-link ">
                                            <a href="{{ route('verkoop.edit', $userGame->id) }}" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>

                                            <form method="POST"
                                                action="{{ route('verkoop.remove-sale', $userGame->id) }}">
                                                @csrf
                                                <button type="submit" class=""><i
                                                        class="fa-solid fa-xmark"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            @empty
                                <div class="col-12 p-b-50">
                                    <p>Geen spellen te koop.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>




            <div class="container-full bg-appleblue">
                <div class="container ">
                    <div class="row p-b-50">
                        <div class="col-12 p-t-50 p-b-25">
                            <h2>Gekochte games</h2>
                        </div>
                        <div class="row col-12 p-b-50">
                            @forelse ($purchasedGames as $userGame)
                                <div class="col-6 col-xs-4 col-md-3">
                                    <!-- Each card takes up 3 columns in a 12-column grid, allowing for 4 cards per row -->
                                    <div class="game-card bg-yellow full-card-link relative">
                                        <a href="{{ route('userGame.details', ['userId' => auth()->id(), 'gameId' => $userGame->id, 'type' => 'bought']) }}"
                                            class=" ">
                                            <img src="{{ asset('storage/' . $userGame->game->foto) }}" alt="Game Image">
                                            <div class="game-card-info">
                                                <h3>{{ $userGame->game->titel }}</h3>
                                                <p>€{{ $userGame->prijs }}</p>
                                                <!-- Notice here it uses $userGame->prijs -->
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <p>Geen gekochte games gevonden.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            </div>


            <div class="container-full bg-purple">
                <div class="container ">
                    <div class="row p-b-50">
                        <div class="col-12 p-t-50 p-b-25">
                            <h2>Games die ik verkocht heb.</h2>
                        </div>
                        @forelse ($soldGames as $game)
                            <div class=" col-6 col-xs-4 col-md-3 ">
                                <!-- Each card takes up 3 columns in a 12-column grid, allowing for 4 cards per row -->
                                <div class="game-card bg-yellow full-card-link relative ">
                                    <a href="{{ route('userGame.soldGame', ['userId' => auth()->id(), 'gameId' => $game->game->id]) }}"
                                        class=" ">
                                        <img src="{{ asset('storage/' . $game->game->foto) }}" alt="Game Image">
                                        <div class="game-card-info">
                                            <h3>{{ $game->game->titel }}</h3>
                                            <p>€{{ $game->prijs }}</p>
                                        </div>
                                    </a>


                                </div>
                            </div>
                        @empty
                            <p>Geen verkochte games gevonden.</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="container-full bg-appleblue">
                <div class="container ">
                    <div class="row p-b-50">
                        <div class="col-12 p-t-50 p-b-25">
                            <h2>Wishlist</h2>
                        </div>
                        <div class="row col-12  ">
                            @forelse ($wishlistGames as $game)
                                @include('profile.layouts.includes.wishlist-card', ['game' => $game])
                            @empty
                                <p>Geen games in de wishlist gevonden.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>


        </main>
    @endsection



</body>

</html>
