@extends('profile.layouts.profile-default')

<body>
    @section('profile-content')
        <main class="bg-appleblue">
            <div class="container h-100 flex align-items-center justify-center">
                <div class="row container-show-game col-12">
                    <div class="col-12 col-md-5">
                        <h1 class="text-purple">Verwijder:</h1>
                        <h2>{{ $game->titel }}</h2>
                        <p class="p-t-25 p-b-25">Weet je zeker dat je dit wil verwijderen?</p>
                        <form action="{{ route('verkoop.destroy', $game->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button delete-btn">Verwijder dit spel</button>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 flex justify-center">
                        <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}" style="width: 300px;">
                    </div>
                </div>
            </div>
        </main>
    @endsection
</body>

</html>
