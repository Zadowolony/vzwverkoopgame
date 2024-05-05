@extends('layouts.default')

<body>

    @section('content')
        <main class="login-pagina-bg">
            <section class="container">

                <div class="row register-container">

                    <div class="col-12 col-md-6  register-container-left ">
                        <div class="col-11">
                            <div class="m-b--30">

                                <span class="login-text-1">welcome op de</span>
                            </div>
                            <div class="m-b--40">
                                <span class="login-text-2">vzw</span>
                                <span class="login-text-3">donate</span>
                                <span class="login-text-4">play</span>
                            </div>
                            <div>

                                <span class="login-text-5 ">registreer pagina</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-10 col-md-6 register-container-right">

                        <div class="col-12 form-register-container">


                            <h2>Vul je gegevens in</h2>

                            <form action="{{ route('register.post') }}" method="post" enctype="multipart/form-data"
                                novalidate>
                                @csrf
                                <div class="col-7">
                                    <input name="name" type="text" placeholder="Kies je usernaam..."
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="profile_picture">Kies een profielfoto:</label>
                                    <input type="file" id="profile_picture" name="profile_picture">
                                    @error('profile_picture')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input name="email" type="email" placeholder="Email adress"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input name="password" type="password" placeholder="wachtwoord"
                                        value="{{ old('password') }}">
                                    @error('password')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input name="password_confirmation" type="password_confirmation"
                                        placeholder="Confirmeer je wachtwoord">
                                    @error('password_confirmation')
                                        <p>{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <button type="submit">Registreer</button>
                                </div>
                            </form>
                            <div class="m-t-25 m-b-25">
                                <p>Heb je een login pagina?</p>
                                <a href="{{ route('login') }}">Login >>></a>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

            <section>

            </section>
        </main>
    @endsection





</body>

</html>
