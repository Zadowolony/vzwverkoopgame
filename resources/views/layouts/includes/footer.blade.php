<div class="container-footer-full-bg">


    <div class="container ">
        <div class="row footer-container">
            <div class="row col-12  col-md-4 footer-box bg-yellow ">
                <div class="footer-title-container relative">
                    <img class="header-logo-footer" src="{{ asset('images/logo.png') }}" alt="logo">
                    <h2 class="">
                        <span class="text1">vzw</span>
                        <div class="footer-text-bottom">
                            <span class="text2">verkoop</span>
                            <span class="text3">game</span>
                        </div>
                    </h2>
                </div>
                <div class="p-t-30">
                    <p>Gemaakt voor school project CVO de Verdiping door Rafal Zado</p>
                </div>
            </div>

            <div class="col-12 col-md-4 footer-box bg-appleblue">
                <h2 class="p-b-30">Contanct</h2>
                <p class="p-b-30"> Nietgelovenstraat 24
                    2020 Antwerpen
                    Belgie</p>
                <p>test@test.com</p>
                <p>+38 045 524 222</p>
            </div>

            <div class="col-12  col-md-4 footer-box bg-purple">

                <h2 class="p-b-30">Donate</h2>
                <p class="p-b-30">Wil je rechtsreeks een cijntje
                    sturen, dat kan zeker! </p>
                <a class="donate-btn-login" href="{{ route('donate') }}"
                    class="{{ request()->is('donate') ? 'active' : '' }}">DONATIE</a>


            </div>
        </div>
    </div>

</div>
