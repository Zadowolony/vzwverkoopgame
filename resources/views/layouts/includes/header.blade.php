<div class="header-bg">

    <div class="container">

        <header class="row">
            <div class="col-2 col-md-2">
                <img class="header-logo" src="../images/logo.png" alt="">
            </div>
            <div class="row col-9 justify-end ">

                <nav class="d-none-mobile ">
                    @guest
                        <a href="{{ route('home') }}">HOME</a>
                        <a href="{{ route('games') }}">GAMES</a>
                        <a href="{{ route('events') }}">EVENTS</a>
                        <a href="{{ route('login') }}">INLOGGEN</a>

                    @endguest

                    @auth
                        <nav class="d-none-mobile ">
                            <a href="{{ route('profile') }}">HOME</a>
                            <a href="{{ route('games') }}">GAMES</a>
                            <a href="{{ route('wishlist') }}">WHISHLIST</a>
                            <a href="{{ route('mijn-verkoop') }}">MIJN VERKOOP</a>
                            <a href="{{ route('logout') }}">UITLOGGEN</a>

                        </nav>

                    @endauth
                </nav>
                <img class="mobile-menu-appleblue  d-none-tablet m-b-10" src="../images/hamburger-menu-purple.png"
                    alt="">
            </div>
        </header>
    </div>

</div>
