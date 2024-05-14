@extends('profile.layouts.profile-default')


<body>
    @section('title-profile', 'DonateGames')
    @section('profile-content')
        <main class="bg-appleblue">
            <div class="container flex flex-column justify-center h-100">
                <div class="row p-t-50 gap50">
                    <div class="col-12 col-md-6 ">
                        <div class="flex justify-center flex-column ">
                            <img class="border-radius-25" src="{{ asset('storage/' . $game->foto) }}"
                                alt="{{ $game->titel }}">
                            @if (auth()->user() && auth()->user()->isAdmin())
                                <div class="col-12 p-t-15">
                                    <a class="admin-verwijder-link" href="{{ route('verkoop.delete', $game->id) }}"
                                        class="btn btn-danger">Verwijder
                                        Spel</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 p-b-25 col-md-5 flex flex-column justify-center">
                        <div class="col-12 flex justify-center game_titel">
                            <h1>{{ $game->titel }}</h1>
                        </div>
                        <div class="col-12 row align-content-start p-t-50 p-b-25">
                            <div class="col-4 flex align-content-start">
                                <p class="">Reden van verkoop:</p>
                            </div>
                            <div class="col-8">
                                <p>{{ $userGame->beschrijving }}</p>
                            </div>
                        </div>
                        <div class="col-12 row align-items-center">
                            <div class="col-4 flex">
                                <p class="p-t-25">Prijs:</p>
                            </div>
                            <div class="game_category_console col-6">
                                <p>€{{ $userGame->prijs }}</p>
                            </div>
                        </div>
                        <div class="col-12 row align-items-center">
                            <div class="col-4 flex">
                                <p class="p-t-25">Conditie:</p>
                            </div>
                            <div class="game_category_console col-6">
                                <p class="p-l-10 p-r-10">{{ $userGame->conditie }}</p>
                            </div>
                        </div>
                        <div class="col-12 row align-items-center">
                            <div class="col-4 flex">
                                <p class="p-t-25">Platform:</p>
                            </div>
                            <div class="game_category_console col-6">
                                @foreach ($game->platforms as $platform)
                                    <p>{{ $platform->platform_naam }}</p>
                                @endforeach
                            </div>
                        </div>
                        @if ($userGame->status === 'te koop' && $userGame->user_id != auth()->id())
                            <div class="col-10 p-t-15 buy-btn-box">
                                <form action="{{ route('verkoop.buy', $userGame->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="buy-btn">Koop het spel van
                                        {{ $userGame->user->name }}</button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    @endsection
</body>

</html>
