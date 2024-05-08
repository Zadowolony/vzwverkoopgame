@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main>
            <h1>Dit is mijn verkoop create pagina</h1>

            <form action="{{ route('verkoop.store') }}" method="post">
                @csrf

                <div>

                    <div>
                        <div>
                            <label for="platform_naam">Platform:</label>
                            <select id="platform_naam" name="platform_naam" onchange="fetchGames()">
                                <option value="">Selecteer een platform</option>
                                <option value="1">PS4</option>
                                <option value="2">Xbox One</option>
                                <option value="3">PC</option>
                                <option value="4">Retro</option>
                            </select>
                        </div>
                        <div>
                            <label for="game_id">Kies een spel:</label>
                            <select id="game_id" name="game_id">
                                <option value="">Selecteer een spel</option>
                            </select>
                        </div>
                        <div>
                            <label for="beschrijving">Naam van je spel : </label>
                            <textarea name="beschrijving" id="beschrijving" cols="30" rows="10"></textarea>
                        </div>
                    </div>


                    <div>
                        <h2>Kenmerken</h2>
                        <div>
                            <div>
                                <label for="conditie">Conditie:</label>
                                <select id="conditie" name="conditie">
                                    <option value="goede conditie">In Goede conditie</option>
                                    <option value="slechte conditie">In slechte conditie</option>
                                    <option value="Nog Verpakt">Nog Verpakt</option>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div>
                        <h2>Status</h2>
                        <div>
                            <div>
                                <label for="Status">Status:</label>
                                <select id="Status" name="Status">
                                    <option value="te koop">Te koop</option>
                                    <option value="verkocht">Verkocht</option>
                                    <option value="Nog Verpakt">Nog Verpakt</option>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div>
                        <h2>Prijs</h2>
                        <div>
                            <div>
                                <label for="prijs ">Prijs:</label>
                                <input type="number" id="prijs" name="prijs" min="0.01" step="0.01"
                                    value="{{ old('prijs') }}" required>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Sla op</button>
                    </div>
                </div>
            </form>
        </main>
    @endsection

    @push('scripts')
        <script>
            function fetchGames() {
                let platform = document.getElementById('platform_naam').value;
                console.log("Platform value:", platform);

                fetch(`/fetch-games/${platform}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok ' + response.statusText);
                        }
                        return response.json();
                    })
                    .then(data => {
                        let gameSelect = document.getElementById('game_id');
                        gameSelect.innerHTML = '';
                        data.forEach(game => {
                            let option = new Option(game.titel, game.id);
                            gameSelect.add(option);
                        });
                    })
                    .catch(error => console.error('Error fetching games:', error));
            }
        </script>
    @endpush



</body>

</html>
