@extends('profile.layouts.profile-default')
@section('title-profile', 'Bewerkt Profiel')

@section('profile-content')
    <main class="bg-appleblue ">

        <div class="container">
            <div class="p-t-50 p-b-25">
                <h1>Verander mijn gegevens</h1>
            </div>



            <div>
                <div class="m-b-25">
                    <h2>Mijn Profile gegevens</h2>
                    <form class="edit-profil-form row" action="{{ route('profile.update-profile') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="edit-profil-box flex flex-column col-8 ">
                            <label for="name">Jouw gebruikersnaam</label>
                            <input id="name" name="name" type="text" placeholder="Wijzig je gebruikersnaam"
                                value="{{ old('name') }}">
                        </div>
                        <div class="edit-profil-box flex flex-column col-8 ">
                            <label for="over_mij">vertel iets over jezelf</label>
                            <textarea name="over_mij" id="over_mij" cols="30" rows="10" value="{{ old('over_mij') }}"></textarea>
                        </div>
                        <div class="edit-profil-box flex flex-column col-8 ">
                            <label for="profile_picture">Kies een profielfoto:</label>
                            <input type="file" id="profile_picture" name="profile_picture"
                                value="{{ old('profile_picture') }}">
                        </div>
                        <div class="edit-profil-box flex flex-column col-12 ">

                            <div>

                                <button type="submit">Opslaan</button>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="m-b-25">
                    <h2 class="p-b-50">Verander mijn wachtwoord</h2>
                    <form class="edit-profil-form row" action="{{ route('profile.update-password') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="edit-profil-box flex flex-column col-8">
                            <label for="password">Wijzig je wachtwoord</label>
                            <input type="password" id="password" name="password" value="{{ old('wachtwoord') }}">
                            <div class="error-box row col-5">
                                @error('password')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="edit-profil-box flex flex-column col-8">
                            <label for="password_confirmation">Herhaal je wachtoord</label>
                            <input type="password" id="password_confirmation" name="password_confirmation">
                            <div class="error-box row col-5">
                                @error('password_confirmation')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="edit-profil-box flex flex-column col-12 ">

                            <div>

                                <button type="submit">Wijzig Wachtwoord</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="p-b-50">
                    <h2>Verander mijn email</h2>
                    <form class="edit-profil-form row" action="{{ route('profile.update-email') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="edit-profil-box flex flex-column col-8">
                            <label for="email">Wijzig je emailadress</label>
                            <input type="email" id="email" name="email">
                            <div class="error-box row col-5">
                                @error('email')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="edit-profil-box flex flex-column col-8">
                            <label for="email_confirmation">Wijzig je emailadress</label>
                            <input type="email" id="email_confirmation" name="email_confirmation">
                            <div class="error-box row col-5">
                                @error('email_confirmation')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="edit-profil-box flex flex-column col-12 ">

                            <div>

                                <button type="submit">E-mail adress wijzigen</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
