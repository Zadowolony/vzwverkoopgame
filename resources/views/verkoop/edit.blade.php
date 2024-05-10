@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main class="bg-appleblue">
            <div class="container">
                <div class="row container-show-game col-12">
                    <div class="col-12 col-md-5">
                        <h1 class="text-purple">Update:</h1>
                        <h2>{{ $game->titel }}</h2>
                        {{ $game->userGames->first()->beschrijving }}
                    </div>

                    <div class="col-12 col-md-6 flex justify-center ">
                        <img src="{{ asset('storage/' . $game->foto) }}" alt="{{ $game->titel }}" style="width: 300px;">
                    </div>


                </div>
            </div>

            <div class="container padding-con">
                <form action="{{ route('verkoop.update', $game->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div>

                        <div class="row gap10 col-12">

                            <div class="edit-profil-box flex flex-column col-8">
                                <label for="beschrijving">Werk je beschrijving bij : </label>
                                <textarea name="beschrijving" id="beschrijving" cols="30" rows="10">{{ old('beschrijving', $game->userGames->first()->beschrijving) }}</textarea>
                            </div>
                        </div>

                        <div>
                            <h2>Kenmerken</h2>
                            <div class="row gap10 col-12">
                                <div class="edit-profil-box flex flex-column col-8">
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
                            <h2>Prijs</h2>
                            <div class="row gap10 col-12">
                                <div class="edit-profil-box flex flex-column col-4">
                                    <label for="prijs ">Prijs:</label>
                                    <input type="number" id="prijs" name="prijs" min="0.01" step="0.01"
                                        value="{{ old('prijs') }}" required>
                                </div>
                                @error('prijs')
                                    <div class="error-box">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <button type="submit">Sla op</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    @endsection



</body>

</html>
