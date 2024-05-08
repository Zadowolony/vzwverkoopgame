@extends('profile.layouts.profile-default')

@section('profile-content')
    <main class="bg-appleblue ">

        <div class="container">
            <h1>Mijn Instellingen</h1>

            <h2>Mijn gegevens</h2>

            <div>
                <div class="m-b-25">
                    <h2>Mijn Profile gegevens</h2>
                    <form action="{{ route('profile.update-profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="name">Jouw gebruikersnaam</label>
                            <input id="name" name="name" type="text" placeholder="Wijzig je gebruikersnaam">
                        </div>
                        <div>
                            <label for="over_mij">vertel iets over jezelf</label>
                            <textarea name="over_mij" id="over_mij" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <label for="profile_picture">Kies een profielfoto:</label>
                            <input type="file" id="profile_picture" name="profile_picture">
                        </div>
                        <div>
                            <button type="submit">Opslaan</button>
                        </div>

                    </form>
                </div>

                <div class="m-b-25">
                    <h2>Verander mijn wachtwoord</h2>
                    <form action="{{ route('profile.update-password') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="password">Wijzig je wachtwoord</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div>
                            <label for="password_confirmation">Herhaal je wachtoord</label>
                            <input type="password" id="password_confirmation" name="password_confirmation">
                        </div>
                        <div>
                            <button type="submit">Wachtwoord wijzigen</button>
                        </div>
                    </form>
                </div>

                <div class="m-b-25">
                    <h2>Verander mijn email</h2>
                    <form action="{{ route('profile.update-email') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="email">Wijzig je emailadress</label>
                            <input type="email" id="email" name="email">
                        </div>

                        <div>
                            <button type="submit">E-mailadres wijzigen</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
