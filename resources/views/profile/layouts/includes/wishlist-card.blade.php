<div class="col-6 col-xs-4 col-md-3 card-link ">

    <div class="game-card full-card-link bg-yellow  gap-20">
        <a href="{{ route('verkoop.show', $game->id) }}">

            <div>
                <img src="{{ asset('storage/' . $game->foto) }}" alt="Profile Picture">
            </div>
            <div class="game-card-info">
                <h3>{{ $game->titel }}</h3>

            </div>
            <div class="row col-12 justify-end gap20 wishlist-card-icons-box ">

                <form action="{{ route('wishlist.remove', $game->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="remove-btn">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </form>

            </div>




    </div>
    </a>
</div>
