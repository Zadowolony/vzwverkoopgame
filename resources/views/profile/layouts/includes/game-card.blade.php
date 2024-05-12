<a href="{{ route('verkoop.show', $game->game->id) }}">
    <div class=" game-card full-card-link  bg-yellow ">


        <div><img src="{{ asset('storage/' . $game->game->foto) }}" alt="Profile Picture">
        </div>

        <div class="game-card-info">
            <h3>{{ $game->game->titel }}</h3>
            {{-- <p>{{ implode(', ', $game->platforms->pluck('platform_naam')->toArray()) }}</p> --}}
            <p>{{ $game->prijs }}</p>
</a>

@php
    $userIsOwner = $game->user_id == auth()->id(); // Correcte check voor eigenaar
@endphp
@if ($userIsOwner && $game->status === 'te koop' && $game->isInWishList)
    <div class="row col-12 justify-end gap20">
        <a href="{{ route('verkoop.edit', $game->game->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="{{ route('verkoop.delete', $game->game->id) }}"><i class="fa-solid fa-xmark"></i></a>
    </div>
@endif
