@extends('layouts.default')

<body>
    @section('title', 'Login')

    @section('content')
        <section class="bg-appleblue">

            <div class="container">
                <div class="row justify-center succes-flash">
                    @if (session('succes'))
                        {{ session('succes') }}
                    @endif

                </div>
            </div>





            <section class="row container login-container flex-wrap  ">


                <div class="col-11 col-md-6  login-container-left  p-t-50 m-b--50">
                    <div>
                        <div class="login-textbox-1">

                            <span class="login-text-1">welcome op de</span>
                        </div>
                        <div class="login-textbox-1">
                            <span class="login-text-2">vzw</span>
                            <span class="login-text-3">donate</span>
                            <span class="login-text-4">games</span>
                        </div>
                        <div class="text-right ">

                            <span class="login-text-5 ">login pagina</span>
                        </div>
                    </div>
                </div>

                <div class="col-9 col-md-6 login-container-right p-b-50">
                    <div class=" col-12 col-md-10 form-login-container ">

                        <h2>Login</h2>
                        <form action="{{ route('login.post') }}" method="post" novalidate>
                            @csrf
                            <div>
                                <label for="email">Login met je email:</label>
                                <input id="email" name="email" type="email" placeholder="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="error-box">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <label for="password"> Jouw wachtwoord:</label>
                                <input name="password" type="password" placeholder="password" value="{{ old('password') }}">

                                @error('password')
                                    <div class="error-box">
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                            </div>

                            <div>
                                <button type="submit">Log In</button>
                            </div>
                        </form>
                        <div>
                            <p class="m-t-30">Heb je nog geen account?</p>
                            <a href="{{ route('register') }}">Klick hier >></a>
                        </div>
                    </div>
                </div>








            </section>


        </section>
    @endsection





</body>

</html>
