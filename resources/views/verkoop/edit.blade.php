@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main>
            <h1>Dit is mijn verkoop create pagina</h1>

            <form action="{{ route('verkoop.update', $game->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>

                    <div>
                        <div>
                            <label id="platform_naam" for="platform_naam">Welke categorie kies je:</label>
                            <select id="platform_naam" name="platform_naam">
                                <option value="retro">Retro</option>
                                <option value="ps4">PS4</option>
                                <option value="xbox_one">Xbox One</option>
                                <option value="pc">PC</option>
                            </select>
                        </div>
                        <div>
                            <label for="titel">Naam van je spel : </label>
                            <input id="titel" type="text" name="titel" value={{ old('titel') }}>
                        </div>
                        <div>
                            <label for="beschrijving">Naam van je spel : </label>
                            <textarea name="beschrijving" id="beschrijving" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div>
                        <h2>Foto's</h2>
                        <div>
                            <div>
                                <label for="foto">Kies een cover:</label>
                                <input type="file" id="foto" name="foto">

                            </div>
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



</body>

</html>