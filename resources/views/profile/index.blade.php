@extends('profile.layouts.profile-default')

<body>


    @section('profile-content')
        <main class=" bg-appleblue profile-index">

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
                            <div class="row justify-around gap20 align-items-center">
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

            <div class="container-full bg-purple">
                <div class="container ">
                    <div class="row col-12">
                        <div class=" p-b-50 p-t-50 col-12 ">
                            <h2>Games die ik verkoop</h2>

                        </div>

                        <div class=" p-b-50  ">


                            <div class="row flex justify-between">
                                @forelse ($sellingGames as $game)
                                    @include('profile.layouts.includes.game-card')
                            </div>
                        </div>

                    @empty
                        <p>Geen spellen te koop.</p>
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
                        @forelse ($purchasedGames as $game)
                            @include('profile.layouts.includes.game-card')
                        @empty
                            <p>Geen gekochte games gevonden.</p>
                        @endforelse
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
                            @include('profile.layouts.includes.game-card')
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
                        @forelse ($wishlistGames as $game)
                            @include('profile.layouts.includes.game-card')
                        @empty
                            <p>Geen games in de wishlist gevonden.</p>
                        @endforelse
                    </div>
                </div>
            </div>


        </main>
    @endsection



</body>

</html>
