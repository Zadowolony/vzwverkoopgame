@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main class="bg-appleblue   ">
            <div class="container ">
                <div class="p-t-50 p-b-25">
                    <h1>Voeg een nieuw spel toe.</h1>
                </div>

                <form class="edit-profil-form row col-12 p-b-50" action="{{ route('admin.store-game') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="col-12">

                        <div>
                            <div class="edit-profil-box flex flex-column col-5 col-md-3 ">
                                <label id="platform_naam" for="platform_naam">Spel Platform:</label>
                                <select id="platform_naam" name="platform_naam">
                                    <option value="retro">Retro</option>
                                    <option value="ps4">PS4</option>
                                    <option value="xbox_one">Xbox One</option>
                                    <option value="pc">PC</option>
                                </select>
                            </div>
                            <div class="edit-profil-box flex flex-column col-8 col-md-5 ">
                                <label for="titel">Naam van het spel : </label>
                                <input id="titel" type="text" name="titel" value={{ old('titel') }}>
                            </div>

                            <div class="edit-profil-box flex flex-column col-8 col-md-5 ">
                                <label for="game_beschrijving">Naam van het spel : </label>
                                <textarea name="game_beschrijving" id="game_beschrijving" cols="30" rows="10">{{ old('beschrijving', $game->game_beschrijving) }}</textarea>
                            </div>

                        </div>

                        <div>
                            <h2>Foto's</h2>
                            <div>
                                <div class="edit-profil-box flex justify-between row col-12  ">
                                    <div class="col-8 col-md-5 flex flex-column">
                                        <label for="foto">Kies een cover:</label>
                                        <input type="file" id="foto" name="foto" onchange="previewFile()">
                                    </div>
                                    <div class="col-6 col-md-4 p-t-25 p-b-25">
                                        <img id="preview" src="{{ asset('images/logo.png') }}" alt="Foto voorbeeld">

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div>
                            <button type="submit">Voeg een spel toe</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    @endsection


    @push('scripts')
        <script>
            function previewFile() {
                const preview = document.getElementById('preview'); // Verkrijg de img tag
                const file = document.getElementById('foto').files[0]; // Verkrijg het file input element
                const reader = new FileReader();

                reader.onloadend = function() {
                    preview.src = reader.result; // Zet de URL van het voorbeeld
                }

                if (file) {
                    reader.readAsDataURL(file); // Lees het bestand en trigger de onloadend
                } else {

                }
            }
        </script>
    @endpush


</body>

</html>
