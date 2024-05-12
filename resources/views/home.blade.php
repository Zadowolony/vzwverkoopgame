@extends('layouts.default')

<body>
    @section('title', 'VerkoopGame')
    @section('content')
        <main class="bg-main-1">

            <section class="hero-section relative">
                <div class="container">
                    <div class="row flex-column align-items-center justify-center container-height col-12 ">
                        <div class="col-10 col-xl-12 text-center ">
                            <div class="head-title-home">
                                <h1 class="">
                                    <span class="h1vzw">vzw</span>
                                    <span class="h1donate">verkoop</span>
                                    <span class="h1play">game</span>
                                </h1>
                            </div>


                            <div class="parallax hero-image1">
                                <!-- The parallax effect background for the first image -->
                            </div>

                            <div class="relative  ">
                                <form action="{{ route('games') }}" method="GET">
                                    <div class="relative">
                                        <input class="home-search-input" type="text" name="search"
                                            placeholder="Zoek een spel">
                                        <button type="submit"
                                            class="fa-solid fa-magnifying-glass fa-glass-absolute"></button>
                                    </div>
                                </form>

                            </div>

                            <div class="parallax hero-image2">
                                <!-- The parallax effect background for the second image -->
                            </div>

                        </div>
                        <div class="m-t-40">
                            <button class="button-secondary button-small">doe een donatie</button>
                        </div>
                    </div>

                    {{-- <div class="row col-12 image-hero-container">
                        <img class="hero-img console-1  " id="heroImage" src="{{ asset('images/console-1.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-2 " id="heroImage2" src="{{ asset('images/console-2.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-3 " id="heroImage2" src="{{ asset('images/console-3.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-4  " id="heroImage2" src="{{ asset('images/console-4.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-5  " id="heroImage2" src="{{ asset('images/console-5.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-6  " id="heroImage2" src="{{ asset('images/console-6.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-7  " id="heroImage2" src="{{ asset('images/console-7.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-8  " id="heroImage2" src="{{ asset('images/console-8.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-9 d-none  " id="heroImage2" src="{{ asset('images/console-9.png') }}"
                            alt="Console Image">
                        <img class="hero-img console-10 d-none  " id="heroImage2"
                            src="{{ asset('images/console-10.png') }}" alt="Console Image">
                        <img class="hero-img console-11 d-none  " id="heroImage2"
                            src="{{ asset('images/console-11.png') }}" alt="Console Image">
                        <img class="hero-img console-12 d-none  " id="heroImage2"
                            src="{{ asset('images/console-12.png') }}" alt="Console Image">
                        <img class="hero-img console-13 d-none  " id="heroImage2"
                            src="{{ asset('images/console-13.png') }}" alt="Console Image">
                        <img class="hero-img console-14 d-none  " id="heroImage2"
                            src="{{ asset('images/console-14.png') }}" alt="Console Image">
                    </div> --}}


                </div>


            </section>

            <section class="uitleg-section m-b-50 p-t-50 ">


                <div class="container">
                    <div class="text-left p-t-40 p-b-50">

                        <h2>Verkoop je games een steun het doel.</h2>

                    </div>

                    <div class="row  justify-between gap5 align-items-center align-items-stretch ">

                        <div class="card-uitleg col-5 col-md-3 ">
                            <div class="card-div-img ">

                                <img class="retro-mail-icon " src="images/retro-mail.png" alt="retro mail">
                            </div>

                            <div>
                                <h3 class="p-b-15">account aanmaken </h3>
                                <p>Registreer je snel en veilig om te beginnen met verkopen.</p>
                            </div>

                        </div>

                        <div class="col-1 align-content-center">
                            <img src="images/retro-arrows.png" alt="">
                        </div>

                        <div class="card-uitleg  col-5 col-md-3  ">

                            <div
                                class=" card-div-img row  col-12 gap-5 justify-center align-content-center align-items-stretch  ">
                                <img class="col-4" src="images/retro-coin.png" alt="retro coin">

                                <img class="col-4" src="images/retro-coin.png" alt="retro coin">


                                <img class="col-4" src="images/retro-coin.png" alt="retro coin">

                            </div>
                            <div>
                                <h3 class="p-b-15">spel verkopen</h3>
                                <p>Plaats je spel, stel de verkoopprijs vast en wacht op kopers.</p>
                            </div>

                        </div>

                        <div class="mobile-row-revert col-md-4  ">



                            <div class="col-4 col-md-3   align-content-center">

                                <img class="col-4 col-md-12 arrow-img  " src="images/retro-arrows.png" alt="">

                            </div>

                            <div class="card-uitleg col-5 col-md-9">
                                <div class="card-div-img row col-12">
                                    <img class="col-12" src="images/retro-home.png" alt="retro home">
                                </div>
                                <div>
                                    <h3 class="p-b-15">donatie doen</h3>
                                    <p>Na verkoop wordt 60% van de opbrengst gedoneerd aan het gekozen goede doel.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="game-home-section ">

                <div class="relative">
                    <div class="container">
                        <div class="p-t-50">
                            <h2>games</h2>
                        </div>

                        <div class="row  gap15 game-carousel justify-between">
                            <div class="card-game ">
                                <div class="card-game__image-container">
                                    <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                        alt="ps4">
                                </div>
                                <div class="p-t-10">
                                    <h3>game van: username</h3>

                                    <div class="p-t-10">
                                        <p class="uppercase bold">ps4</p>
                                        <p class="uppercase bold">god of war ragnarok</p>
                                        <p class="uppercase bold">€25</p>

                                    </div>

                                </div>
                            </div>
                            <div class="card-game  ">
                                <div class="card-game__image-container ">
                                    <img class=""
                                        src="images/MP-20-PS2-Games-That-Still-Hold-Up-Today_T0L0K7-V1_480.png"
                                        alt="ps4">
                                </div>
                                <div class="p-t-10">
                                    <h3>game van: username</h3>

                                    <div class="p-t-10">
                                        <p class="uppercase bold">ps4</p>
                                        <p class="uppercase bold">god of war ragnarok</p>
                                        <p class="uppercase bold">€25</p>

                                    </div>

                                </div>
                            </div>
                            <div class="card-game ">
                                <div class="card-game__image-container">
                                    <img class=""
                                        src="images/MP-20-PS2-Games-That-Still-Hold-Up-Today_T0L0K7-V1_480.png"
                                        alt="ps4">
                                </div>
                                <div class="p-t-10">
                                    <h3>game van: username</h3>

                                    <div class="p-t-10">
                                        <p class="uppercase bold">ps4</p>
                                        <p class="uppercase bold">god of war ragnarok</p>
                                        <p class="uppercase bold">€25</p>

                                    </div>

                                </div>
                            </div>
                            <div class="card-game">
                                <div class="card-game__image-container">
                                    <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                        alt="ps4">
                                </div>
                                <div class="p-t-10">
                                    <h3>game van: username</h3>

                                    <div class="p-t-10">
                                        <p class="uppercase bold">ps4</p>
                                        <p class="uppercase bold">god of war ragnarok</p>
                                        <p class="uppercase bold">€25</p>

                                    </div>

                                </div>
                            </div>
                            <div class="card-game">
                                <div class="card-game__image-container">
                                    <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                        alt="ps4">
                                </div>
                                <div class="p-t-10">
                                    <h3>game van: username</h3>

                                    <div class="p-t-10">
                                        <p class="uppercase bold">ps4</p>
                                        <p class="uppercase bold">god of war ragnarok</p>
                                        <p class="uppercase bold">€25</p>

                                    </div>

                                </div>
                            </div>
                            <div class="card-game">
                                <div class="card-game__image-container">
                                    <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                        alt="ps4">
                                </div>
                                <div class="p-t-10">
                                    <h3>game van: username</h3>

                                    <div class="p-t-10">
                                        <p class="uppercase bold">ps4</p>
                                        <p class="uppercase bold">god of war ragnarok</p>
                                        <p class="uppercase bold">€25</p>

                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </section> --}}



            <div class="container m-b-50 m-t-50 ">
                <div class="m-b-50 m-t-50">
                    <h2>Games</h2>
                </div>
                <div class="row col-12 ">
                    @forelse ($games as $game)
                        <div class="row col-6 col-xs-6 col-md-3"
                            onclick="location.href='{{ route('game.show', $game->id) }}'">
                            <div class="game-card col-12 bg-appleblue">
                                <div>
                                    <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}">
                                </div>
                                <div class="game-card-info">
                                    <h2>{{ $game->titel }}</h2>

                                    @if ($game->platforms->isNotEmpty())
                                        <p>{{ implode(', ', $game->platforms->pluck('platform_naam')->toArray()) }}</p>
                                    @else
                                        <p>Geen platform gespecificeerd</p>
                                    @endif
                                </div>
                            </div>


                        </div>
                    @empty
                        <p>No games available at the moment.</p>
                    @endforelse
                </div>
                <div class="col-12 flex justify-end">

                    <div class="p-b-50 p-t-50">
                        <img id="arrow-next" onclick="location.href='{{ route('games') }}'" src="images/retro-arrows.png"
                            alt="">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="p-t-50 p-b-50">
                    <h2>Evenementen</h2>
                </div>
                <div class="row p-b-50">
                    <div class="row flex  col-12 event-card-container ">

                        <div class="event-card col-8 col-xs-4  col-md-3">
                            <div class="event-foto col-12">

                            </div>

                            <div class=" event-card-text-box p-t-25">
                                <h2 class="p-b-25">Event Titel</h2>
                                <p>Dit is een beschrijving van een event op die dag</p>
                            </div>

                        </div>

                        <div class="event-card col-8 col-xs-4  col-md-3">
                            <div class="event-foto col-12">

                            </div>

                            <div class=" event-card-text-box p-t-25">
                                <h2 class="p-b-25">Event Titel</h2>
                                <p>Dit is een beschrijving van een event op die dag</p>
                            </div>

                        </div>

                        <div class="event-card col-8 col-xs-4  col-md-3">
                            <div class="event-foto col-12">

                            </div>

                            <div class=" event-card-text-box p-t-25">
                                <h2 class="p-b-25">Event Titel</h2>
                                <p>Dit is een beschrijving van een event op die dag</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-full bg-purple">
                <div class="container">
                    <div class="row ">
                        <div class="col-12">
                            <div
                                class="niewsbrief-section flex flex-column align-items-center justify-center col-12 p-t-50">
                                <h2 class="p-b-15">Schrijf je in voor nieuwsbrief</h2>
                                <p>Wees op de hoogte van onze aanbod en drops over welke impcat je hebt gedaan.</p>
                            </div>
                            <div class="form-nieuwsbrief-container row col-12 ">
                                <form action="" method="post" class="row col-7 ">
                                    <div class="row col-12 flex justify-between">
                                        <input class="row col-5" type="text" name="voornaam" placeholder="voornaam">
                                        <input class="row col-5" type="text" name="achternaam"
                                            placeholder="achternaam">
                                    </div>
                                    <div class="row col-12">
                                        <input class="row col-12" type="email" name="email" placeholder="email">
                                    </div>
                                    <div>
                                        <button type="submit">verstuur</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection



</body>



</html>
