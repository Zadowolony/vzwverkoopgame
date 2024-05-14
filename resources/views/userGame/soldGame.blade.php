@extends('profile.layouts.profile-default')



@section('profile-content')
    <main class="bg-appleblue">



        <div class="container  flex flex-column justify-center h-100">

            <div class="row p-t-50 gap50">



                <div class="col-12 col-md-6  ">

                    <div class=" flex justify-center align-items-center">
                        <img class="border-radius-25" src="{{ asset('storage/' . $game->game->foto) }}"
                            alt="{{ $game->titel }}">
                    </div>


                </div>

                <div class="col-12 p-b-25 col-md-5 flex flex-column justify-center">
                    <div class="col-12 flex justify-center game_titel">
                        <h1>{{ $game->game->titel }}</h1>
                    </div>




                    <div class="col-12  row align-items-center">

                        <div class="col-4 flex ">
                            <p class="p-t-25">Prijs:</p>
                        </div>
                        <div class="game_category_console col-6 ">
                            <p>€{{ $game->prijs }}</p>
                        </div>

                    </div>


                    <div class="col-12  row align-items-center">

                        <div class="col-4 flex ">
                            <p class="p-t-25">Status :</p>
                        </div>
                        <div class="game_category_console  col-6 ">
                            <p class="p-l-10 p-r-10">{{ $game->status }}</p>
                        </div>

                    </div>

                    <div class=" col-12  row align-items-center">
                        <div class="col-4 flex ">
                            <p class=" p-t-25">Buyer:
                            </p>
                        </div>
                        <div class="game_category_console col-6 ">
                            @if ($game->buyer)
                                {{ $game->buyer->name }}</p>
                            @endif


                        </div>
                    </div>

                    <div class=" col-12  row align-items-center">
                        <div class="col-4 flex ">
                            <p class=" p-t-25">Seller:
                            </p>
                        </div>
                        <div class="game_category_console col-6 ">

                            @if ($game->seller)
                                <p>{{ $game->seller->name }}</p>
                            @endif

                        </div>
                    </div>






                </div>

            </div>



        </div>







    </main>
@endsection
