<div class={{ auth()->check() ? 'nav-auth' : 'nav-guest' }}>

    <div class="container">

        <header class="row">
            <div class="col-2 col-md-2">
                <img class="header-logo" src="../../images/logo.png" alt="">
            </div>
            <div class="row col-9 justify-end ">

                @guest
                    <nav class="d-none-mobile nav-guest ">
                        <div>
                            <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">HOME</a>
                            <a href="{{ route('games') }}" class="{{ request()->is('games') ? 'active' : '' }}">GAMES</a>
                            <a href="{{ route('events') }}" class="{{ request()->is('events') ? 'active' : '' }}">EVENTS</a>
                            <a href="{{ route('login') }}" class="{{ request()->is('login') ? 'active' : '' }}">INLOGGEN</a>
                        </div>
                    </nav>
                    <div>
                        <img class="mobile-menu-appleblue  d-none-tablet m-b-10"
                            src="../../../images/hamburger-menu-purple.png" alt="">

                    </div>


                @endguest

                @auth
                    <nav class="d-none-mobile nav-auth ">
                        <div>
                            <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">HOME</a>
                            <a href="{{ route('profile') }}" class="{{ request()->is('profile') ? 'active' : '' }}">MIJN
                                PROFIEL</a>
                            <a href="{{ route('games') }}" class="{{ request()->is('games') ? 'active' : '' }}">GAMES</a>
                            <a href="{{ route('wishlist') }}"
                                class="{{ request()->is('profile/wishlist') ? 'active' : '' }}">WHISHLIST</a>

                            {{-- <a href="{{ route('mijn-verkoop') }}"
                                class="{{ request()->is('profile/mijn-verkoop') ? 'active' : '' }}">MIJN VERKOOP</a> --}}
                            <a href="{{ route('logout') }}">UITLOGGEN</a>
                        </div>



                    </nav>
                    <div>
                        <img class="mobile-menu-appleblue  d-none-tablet m-b-10"
                            src="../../../images/hamburger-menu-appleblue.png" alt="">

                    </div>

                @endauth


            </div>
        </header>
    </div>

</div>
