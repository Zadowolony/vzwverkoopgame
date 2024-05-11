@extends('profile.layouts.profile-default')

<body>
    @section('profile-content')
        <main class="bg-appleblue">
            @php
                $userIsOwner = $game->userGames->pluck('user_id')->contains(auth()->id());
            @endphp


            <div class="container container-show-game h-100">

                <div class="row">



                    <div class="col-12 flex justify-center flex-column col-md-6">

                        <div class="col-12 flex justify-center ">
                            <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}" style="width: 300px;">
                        </div>

                        <div>
                            @if (auth()->user() && $userIsOwner)
                                <div class="col-12 flex flex-column justify-center align-items-center">

                                    <div class="button-box">

                                        <a href="{{ route('verkoop.edit', $game->id) }}" class="button">Edit Game</a>
                                        <a href="{{ route('verkoop.delete', $game->id) }}" class="button">Verwijder een
                                            spel</a>



                                    </div>

                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-12 p-b-25 col-md-5">
                        <div class="col-12 flex justify-center game_titel">
                            <h1>{{ $game->titel }}</h1>
                        </div>


                        <div class="col-12  row align-content-start p-t-50 p-b-25">

                            <div class="col-4 flex align-content-start ">
                                <p class="">Reden van verkoop:</p>
                            </div>
                            <div class=" col-8 ">
                                <p>{{ $game->userGames->first()->beschrijving }}</p>
                            </div>

                        </div>



                        <div class="col-12  row align-items-center">

                            <div class="col-4 flex ">
                                <p class="p-t-25">Prijs:</p>
                            </div>
                            <div class="game_category_console col-4 ">
                                <p>€{{ $game->userGames->first()->prijs }}</p>
                            </div>

                        </div>


                        <div class="col-12  row align-items-center">

                            <div class="col-4 flex ">
                                <p class="p-t-25">Conditie :</p>
                            </div>
                            <div class="game_category_console  ">
                                <p class="p-l-10 p-r-10">{{ $game->userGames->first()->conditie }}</p>
                            </div>

                        </div>

                        <div class=" col-12  row align-items-center">
                            <div class="col-4 flex ">
                                <p class=" p-t-25">Platform:
                                </p>
                            </div>
                            <div class="game_category_console col-4 ">
                                @foreach ($game->platforms as $platform)
                                    <p>{{ $platform->platform_naam }}</p>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-8 p-t-15 buy-btn-box">
                            @if (!$userIsOwner && $game->userGames->first()->status === 'te koop')
                                <form action="{{ route('verkoop.buy', $game->userGames->first()->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="buy-btn">Koop het spel</button>
                                </form>
                            @endif

                        </div>

                    </div>

                </div>



            </div>







        </main>
    @endsection



</body>

</html>
