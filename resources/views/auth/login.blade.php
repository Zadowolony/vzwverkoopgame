@extends('layouts.default')

<body>

    @section('content')
        <main class="login-pagina-bg ">

            <div class="containet">
                <div class="row justify-center succes-flash">
                    @if (session('succes'))
                        {{ session('succes') }}
                    @endif

                </div>
            </div>





            <section class="row container login-container flex-wrap  ">


                <div class="col-11 col-md-6  login-container-left ">
                    <div>
                        <div class="m-b--35">

                            <span class="login-text-1">welcome op de</span>
                        </div>
                        <div class="m-b--40">
                            <span class="login-text-2">vzw</span>
                            <span class="login-text-3">donate</span>
                            <span class="login-text-4">play</span>
                        </div>
                        <div class="text-right ">

                            <span class="login-text-5 ">login pagina</span>
                        </div>
                    </div>
                </div>

                <div class="col-9 col-md-6 login-container-right">
                    <div class=" col-12 col-md-10 form-login-container">

                        <h2>Login</h2>
                        <form action="{{ route('login.post') }}" method="post" novalidate>
                            @csrf
                            <div>
                                <input name="email" type="email" placeholder="email" value="{{ old('email') }}">
                                @error('email')
                                    <p>{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <input name="password" type="password" placeholder="password" value="{{ old('password') }}">

                                @error('password')
                                    <p>{{ $message }}</p>
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

            <section>

            </section>
        </main>
    @endsection





</body>

</html>
