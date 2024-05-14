<div class={{ auth()->check() ? 'nav-auth' : 'nav-guest' }}>

    <div class="container">






        <header class="row">



            <div class="col-2 col-md-2">
                <img class="header-logo" src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="row col-9 justify-end ">

                @guest
                    <nav class="d-none-mobile nav-guest ">
                        <div>
                            <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">HOME</a>
                            <a href="{{ route('games') }}" class="{{ request()->is('games') ? 'active' : '' }}">GAMES</a>
                            {{-- <a href="{{ route('events') }}" class="{{ request()->is('events') ? 'active' : '' }}">EVENTS</a> --}}
                            <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">INLOGGEN</a>
                            <a class="donate-btn" href="{{ route('donate') }}"
                                class="{{ request()->is('donate') ? 'active' : '' }}">DONATIE</a>

                        </div>
                    </nav>
                    <div>

                        {{-- Navigatie movile niet logged in user --}}
                        <button class="mobile-hamburger-button" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img
                                class="mobile-menu-appleblue  d-none-tablet m-b-10"
                                src="{{ asset('images/hamburger-menu-purple.png') }}" alt=""></button>

                        <div class="offcanvas offcanvas-end bg-appleblue" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel"><img class="header-logo"
                                        src="{{ asset('images/logo.png') }}" alt=""></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close">X</button>
                            </div>
                            <div class="offcanvas-body">
                                <!-- Plaats hier je navigatielinks of andere content -->
                                <div class="flex flex-column nav-mobile">
                                    <a href="{{ route('home') }}"
                                        class="{{ request()->is('/') ? 'active' : '' }}">HOME</a>
                                    <a href="{{ route('games') }}"
                                        class="{{ request()->is('games') ? 'active' : '' }}">GAMES</a>
                                    <a href="{{ route('events') }}"
                                        class="{{ request()->is('events') ? 'active' : '' }}">EVENTS</a>
                                    <a href="{{ route('login') }}"
                                        class="{{ request()->is('login') ? 'active' : '' }}">INLOGGEN</a>
                                    <a class="donate-btn" href="{{ route('donate') }}"
                                        class="{{ request()->is('donate') ? 'active' : '' }}">DONATIE</a>
                                </div>

                            </div>
                        </div>


                    </div>


                @endguest

                @auth
                    <nav class="d-none-mobile nav-auth ">
                        <div>
                            <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">HOME</a>

                            <a href="{{ route('games') }}" class="{{ request()->is('games') ? 'active' : '' }}">GAMES</a>
                            <a href="{{ route('profile') }}" class="{{ request()->is('profile') ? 'active' : '' }}">MIJN
                                PROFIEL</a>
                            {{-- <a href="{{ route('wishlist') }}"
                                class="{{ request()->is('profile/wishlist') ? 'active' : '' }}">WHISHLIST</a> --}}

                            {{-- <a href="{{ route('mijn-verkoop') }}"
                                class="{{ request()->is('profile/mijn-verkoop') ? 'active' : '' }}">MIJN VERKOOP</a> --}}
                            <a href="{{ route('logout') }}">UITLOGGEN</a>
                            <a class="donate-btn-login" href="{{ route('donate') }}"
                                class="{{ request()->is('donate') ? 'active' : '' }}">DONATIE</a>
                        </div>



                    </nav>
                    <div>
                        {{-- Navigatie movile logged in user --}}
                        <button class="mobile-hamburger-button" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img
                                class="mobile-menu-appleblue  d-none-tablet m-b-10"
                                src="{{ asset('images/hamburger-menu-appleblue.png') }}" alt=""></button>

                        <div class="offcanvas offcanvas-end bg-purple" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel"><img class="header-logo"
                                        src="{{ asset('images/logo.png') }}" alt=""></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close">X</button>
                            </div>
                            <div class="offcanvas-body">
                                <!-- Plaats hier je navigatielinks of andere content -->
                                <div class="flex flex-column nav-mobile">
                                    <a href="{{ route('home') }}"
                                        class="{{ request()->is('/') ? 'active' : '' }}">HOME</a>

                                    <a href="{{ route('games') }}"
                                        class="{{ request()->is('games') ? 'active' : '' }}">GAMES</a>
                                    <a href="{{ route('profile') }}"
                                        class="{{ request()->is('profile') ? 'active' : '' }}">MIJN
                                        PROFIEL</a>
                                    {{-- <a href="{{ route('wishlist') }}"
                                        class="{{ request()->is('profile/wishlist') ? 'active' : '' }}">WHISHLIST</a> --}}

                                    {{-- <a href="{{ route('mijn-verkoop') }}"
                                        class="{{ request()->is('profile/mijn-verkoop') ? 'active' : '' }}">MIJN VERKOOP</a> --}}
                                    <a href="{{ route('logout') }}">UITLOGGEN</a>
                                    <a class="donate-btn-login" href="{{ route('donate') }}"
                                        class="{{ request()->is('donate') ? 'active' : '' }}">DONATIE</a>
                                </div>

                            </div>
                        </div>

                    </div>

                @endauth


            </div>
        </header>
    </div>

</div>
