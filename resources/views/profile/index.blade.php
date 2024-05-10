@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main class="bg-appleblue profile-index">

            <div class="container  flex justify-center align-items-center row col-12">
                <div class="row   profile-box  ">

                    <div class=" col-12 col-md-6 profile-box-image-name ">


                        <h1 class="">Welcome <span class="profile-name">{{ Auth::user()->name }}</span></h1>



                        @if (Auth::user()->profile_picture)
                            <img class="profile-image" src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                                alt="Profile Picture" style="width: 150px; height: 150px;">
                        @else
                            <p><img src="../images/logo.png" alt="No user Image"></p>
                        @endif


                    </div>

                    <div class="col-12 col-md-6 profile-box-beschrijving ">
                        <div class="profil-beschrijving ">
                            <p>{{ Auth::user()->over_mij }}</p>
                        </div>

                        <div class=" profil-links row col-12 m-t-25 ">
                            <div class="row justify-around gap20">
                                <a class="col-5 " href="{{ route('profile.edit') }}" class="button">Bewerk mijn
                                    profiel</a>
                                <a class="col-5" href="#" class="button">Doe een donatie</a>
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

            <div class="container ">
                <div class=" p-b-50 p-t-50 ">
                    <h2>Games die ik verkoop</h2>

                </div>

                <div class="row col-12 event-card-container p-b-50 flex justify-center ">

                    @if ($games)
                        <div class="row flex col-12 justify-center">
                            @foreach ($games as $game)
                                <a href="{{ route('verkoop.show', $game->game->id) }}">
                                    <div class=" game-card full-card-link  bg-yellow ">


                                        <div><img src="{{ asset('storage/' . $game->game->foto) }}" alt="Profile Picture">
                                        </div>

                                        <div class="game-card-info">
                                            <h3>{{ $game->game->titel }}</h3>
                                            {{-- <p>{{ implode(', ', $game->platforms->pluck('platform_naam')->toArray()) }}</p> --}}
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



        </main>
    @endsection



</body>

</html>
