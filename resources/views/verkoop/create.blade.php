@extends('profile.layouts.profile-default')

<body>
    @section('title-profile', 'Verkoop')

    @section('profile-content')
        <main class="bg-appleblue">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="p-t-50 p-b-25 verkoop-h1">Verkoop je spel</h1>

                    </div>

                    <form class="edit-profil-form row col-12" action="{{ route('verkoop.store') }}" method="post">
                        @csrf

                        <div class="col-12">

                            <div>
                                <div class="row gap10 col-12">
                                    <div class="edit-profil-box flex flex-column col-6 col-md-4">
                                        <label for="platform_naam">Platform:</label>
                                        <select id="platform_naam" class="select-wrapper" name="platform_naam"
                                            onchange="fetchGames()" value="{{ old('platform_naam') }}">
                                            <option value="">Selecteer een platform</option>
                                            <option value="1">PS4</option>
                                            <option value="2">Xbox One</option>
                                            <option value="3">PC</option>
                                            <option value="4">Retro</option>
                                        </select>
                                        @error('platform_naam')
                                            <div class="error-box ">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="edit-profil-box flex flex-column col-6 col-md-4">
                                        <label for="game_id">Kies een spel:</label>
                                        <select id="game_id" name="game_id" value="{{ old('game_id') }}">
                                            <option value="">Selecteer een spel</option>
                                        </select>
                                        <div class="error-box row col-5">
                                            @error('game_id')
                                                <p>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-profil-box flex flex-column col-8">
                                    <label for="beschrijving">Waarom verkoop je het spel : </label>
                                    <textarea name="beschrijving" id="beschrijving" cols="30" rows="10" value="{{ old('beschrijving') }}"></textarea>
                                    <div class="error-box row col-5">
                                        @error('beschrijving')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <div>
                                <h2>Kenmerken</h2>
                                <div>
                                    <div class="edit-profil-box flex flex-column col-6 col-md-4">
                                        <label for="conditie">Conditie:</label>
                                        <select id="conditie" name="conditie" value="{{ old('conditie') }}">
                                            <option value="Nieuw">Nieuw</option>
                                            <option value="Zo Goed Als Nieuw">Zo Goed Als Nieuw</option>
                                            <option value="Gebruikt">Gebruikt</option>
                                            <option value="Niet werkend">Niet Werkend</option>
                                            <option value="Nog verpakt">Nog Verpakt</option>


                                        </select>
                                        @error('conditie')
                                            <div class="error-box">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @enderror


                                    </div>


                                </div>
                            </div>
                            <div>
                                <h2>Status</h2>
                                <div>
                                    <div class="edit-profil-box flex flex-column col-6 col-md-4">
                                        <label for="Status">Status:</label>
                                        <select id="Status" name="Status">
                                            <option value="te koop">Te koop</option>
                                            <option value="verkocht">Verkocht</option>


                                        </select>

                                        <div class="error-box row col-5">
                                            @error('Status')
                                                <p>{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <h2>Prijs</h2>
                                <div>
                                    <div class="edit-profil-box flex flex-column col-6 col-md-4">
                                        <label for="prijs ">Prijs:</label>
                                        <input type="number" id="prijs" name="prijs" min="0.01" step="0.01"
                                            value="{{ old('prijs') }}" required>
                                    </div>
                                    <div class="error-box row col-5">
                                        @error('prijs')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="edit-profil-box flex flex-column col-12 ">

                                <div>

                                    <button type="submit">Verkoop je spel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    @endsection

    @push('scripts')
        <script>
            function fetchGames() {
                let platform = document.getElementById('platform_naam').value;
                console.log("Platform value:", platform);
                if (platform) {
                    fetch(`/fetch-games/${platform}`)
                        .then(response => response.json())
                        .then(data => {
                            let gameSelect = document.getElementById('game_id');
                            gameSelect.innerHTML = '';
                            data.forEach(game => {
                                let option = new Option(game.titel, game.id);
                                gameSelect.add(option);
                            });
                        })
                        .catch(error => console.error('Error fetching games:', error));
                } else {
                    let gameSelect = document.getElementById('game_id');
                    gameSelect.innerHTML = '<option value="">Selecteer een spel</option>';
                }
            }
        </script>
    @endpush



</body>

</html>
