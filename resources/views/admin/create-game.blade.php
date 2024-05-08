@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main>
            <h1>Dit is mijn verkoop create pagina</h1>

            <form action="{{ route('admin.store-game') }}" method="post" enctype="multipart/form-data">
                @csrf

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
                        <button type="submit">Sla op</button>
                    </div>
                </div>
            </form>
        </main>
    @endsection



</body>

</html>
