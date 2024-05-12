<div class=" col-6 col-xs-4 col-md-3 ">
    <!-- Each card takes up 3 columns in a 12-column grid, allowing for 4 cards per row -->
    <div class="game-card bg-yellow full-card-link relative ">
        <a href="{{ route('verkoop.show', $game->game->id) }}" class=" ">
            <img src="{{ asset('storage/' . $game->game->foto) }}" alt="Profile Picture">
            <div class="game-card-info">
                <h3>{{ $game->game->titel }}</h3>
                <p>€{{ $game->prijs }}</p>
            </div>
        </a>

        @php
            $userIsOwner = $game->user_id == auth()->id();
        @endphp
        @if ($userIsOwner && $game->status === 'te koop')
            <div class="flex justify-end game-card-link ">
                <a href="{{ route('verkoop.edit', $game->game->id) }}" class="btn btn-primary">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="{{ route('verkoop.delete', $game->game->id) }}" class="btn btn-danger">
                    <i class="fa-solid fa-xmark"></i>
                </a>
            </div>
        @endif
    </div>
</div>
