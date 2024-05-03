<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="header-bg">

        <div class="container">

            <header class="row">
                <div class="col-2 col-md-2">
                    <img class="header-logo" src="images/logo.png" alt="">
                </div>
                <div class="row col-9 justify-end ">
                    <nav class="d-none-mobile ">
                        <a href="#">HOME</a>
                        <a href="#">GAMES</a>
                        <a href="#">EVENTS</a>
                        <a href="#">INLOGGEN</a>
                    </nav>
                    <img class="mobile-menu-appleblue  d-none-tablet m-b-10" src="images/hamburger-menu-purple.png"
                        alt="">
                </div>
            </header>
        </div>

    </div>

    <main class="bg-main-1">

        <section class="hero-section">
            <div class="container">
                <div class="row flex-column align-items-center justify-center container-height col-12 ">
                    <div class="col-10 col-xl-12 text-center ">
                        <div class="head-title-home">
                            <h1 class="">
                                <span class="h1vzw">vzw</span>
                                <span class="h1donate">verkoop</span>
                                <span class="h1play">game</span>
                            </h1>
                        </div>




                        <div class="relative  ">
                            <input class="home-search-input  " type="text">
                            <i class="fa-solid fa-magnifying-glass fa-glass-absolute"></i>

                        </div>

                    </div>
                    <div class="m-t-40">
                        <button class="button-secondary button-small">doe een donatie</button>
                    </div>
                </div>


            </div>


        </section>

        <section class="uitleg-section ">


            <div class="container">
                <div class="text-left p-t-40 p-b-20">

                    <h2>Doneer games en steun het doel</h2>

                </div>

                <div class="row  justify-between gap5 align-items-center align-items-stretch ">

                    <div class="card-uitleg col-5 col-md-3 ">
                        <div class="card-div-img ">

                            <img class="retro-mail-icon " src="images/retro-mail.png" alt="retro mail">
                        </div>

                        <div>
                            <h3 class="p-b-15">account aanmaken </h3>
                            <p>Registreer je snel en veilig om te beginnen met verkopen.</p>
                        </div>

                    </div>

                    <div class="col-1 align-content-center">
                        <img src="images/retro-arrows.png" alt="">
                    </div>

                    <div class="card-uitleg  col-5 col-md-3  ">

                        <div
                            class=" card-div-img row  col-12 gap-5 justify-center align-content-center align-items-stretch  ">
                            <img class="col-4" src="images/retro-coin.png" alt="retro coin">

                            <img class="col-4" src="images/retro-coin.png" alt="retro coin">


                            <img class="col-4" src="images/retro-coin.png" alt="retro coin">

                        </div>
                        <div>
                            <h3 class="p-b-15">spel verkopen</h3>
                            <p>Plaats je spel, stel de verkoopprijs vast en wacht op kopers.</p>
                        </div>

                    </div>

                    <div class="mobile-row-revert col-md-4  ">



                        <div class="col-4 col-md-3   align-content-center">

                            <img class="col-4 col-md-12 arrow-img  " src="images/retro-arrows.png" alt="">

                        </div>

                        <div class="card-uitleg col-5 col-md-9">
                            <div class="card-div-img row col-12">
                                <img class="col-12" src="images/retro-home.png" alt="retro home">
                            </div>
                            <div>
                                <h3 class="p-b-15">donatie doen</h3>
                                <p>Na verkoop wordt 60% van de opbrengst gedoneerd aan het gekozen goede doel.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="game-home-section ">

            <div class="relative">
                <div class="container">
                    <div class="p-t-50">
                        <h2>games</h2>
                    </div>

                    <div class="row  gap15 game-carousel justify-between">
                        <div class="card-game ">
                            <div class="card-game__image-container">
                                <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                    alt="ps4">
                            </div>
                            <div class="p-t-10">
                                <h3>game van: username</h3>

                                <div class="p-t-10">
                                    <p class="uppercase bold">ps4</p>
                                    <p class="uppercase bold">god of war ragnarok</p>
                                    <p class="uppercase bold">€25</p>

                                </div>

                            </div>
                        </div>
                        <div class="card-game  ">
                            <div class="card-game__image-container ">
                                <img class=""
                                    src="images/MP-20-PS2-Games-That-Still-Hold-Up-Today_T0L0K7-V1_480.png"
                                    alt="ps4">
                            </div>
                            <div class="p-t-10">
                                <h3>game van: username</h3>

                                <div class="p-t-10">
                                    <p class="uppercase bold">ps4</p>
                                    <p class="uppercase bold">god of war ragnarok</p>
                                    <p class="uppercase bold">€25</p>

                                </div>

                            </div>
                        </div>
                        <div class="card-game ">
                            <div class="card-game__image-container">
                                <img class=""
                                    src="images/MP-20-PS2-Games-That-Still-Hold-Up-Today_T0L0K7-V1_480.png"
                                    alt="ps4">
                            </div>
                            <div class="p-t-10">
                                <h3>game van: username</h3>

                                <div class="p-t-10">
                                    <p class="uppercase bold">ps4</p>
                                    <p class="uppercase bold">god of war ragnarok</p>
                                    <p class="uppercase bold">€25</p>

                                </div>

                            </div>
                        </div>
                        <div class="card-game">
                            <div class="card-game__image-container">
                                <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                    alt="ps4">
                            </div>
                            <div class="p-t-10">
                                <h3>game van: username</h3>

                                <div class="p-t-10">
                                    <p class="uppercase bold">ps4</p>
                                    <p class="uppercase bold">god of war ragnarok</p>
                                    <p class="uppercase bold">€25</p>

                                </div>

                            </div>
                        </div>
                        <div class="card-game">
                            <div class="card-game__image-container">
                                <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                    alt="ps4">
                            </div>
                            <div class="p-t-10">
                                <h3>game van: username</h3>

                                <div class="p-t-10">
                                    <p class="uppercase bold">ps4</p>
                                    <p class="uppercase bold">god of war ragnarok</p>
                                    <p class="uppercase bold">€25</p>

                                </div>

                            </div>
                        </div>
                        <div class="card-game">
                            <div class="card-game__image-container">
                                <img src="images/ps4-god-of-war-ragnarok-standard-game-box-front-GB 1.png"
                                    alt="ps4">
                            </div>
                            <div class="p-t-10">
                                <h3>game van: username</h3>

                                <div class="p-t-10">
                                    <p class="uppercase bold">ps4</p>
                                    <p class="uppercase bold">god of war ragnarok</p>
                                    <p class="uppercase bold">€25</p>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>


            </div>

        </section>
    </main>



</body>

</html>
