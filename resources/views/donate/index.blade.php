@extends('layouts.default')

<body>
    @section('content')
        <section class="bg-yellow">

            <div class="container">
                <div class="row p-b-50 p-t-50">
                    <div class="col-12 justify-start flex">
                        <h1 class="donatie-text-h1">60% Van je verkochte game gaat naar donatie.</h1>
                    </div>

                    <div class="col-12 row gap50">
                        <div class="col-12 col-md-5"><img class="donate-img" src="{{ asset('images/donatie-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-12 col-md-6 flex flex-column justify-center">
                            <h2 class="p-b-25">Organisatie <span class="text-purple">goodFood</span></h2>
                            <p class="p-b-10">Met jullie steun kunnen wij eten opkopen en distribueren over heel het Vlaams
                                gewest naar voedselbanken voor mensen die het echt nodig hebben. </p>
                            <p class="p-b-10">Of doneer op dit fictieve nummer</p>
                            <p><strong>BE 015 458 789 89</strong></p>

                        </div>

                    </div>
                </div>
            </div>


        </section>
        <section class="bg-purple">
            <div class="container progressbar-container  ">
                <div class="row flex justify-center ">
                    <div class="col-12 ">
                        <h2 class="p-b-25">Voortgang van onze campagne</h2>
                        <p class="p-b-50 col-8">We hebben als doel om €1500 op te halen voor dit goede doel. Elke donatie
                            helpt
                            ons dichter bij
                            dit doel te komen en maakt een groot verschil.</p>
                        <p>Totaal: €{{ number_format($totalDonations, 2) }} / €1500</p>
                        <div class="progress col-12 ">
                            <div class="progress-bar" role="progressbar"
                                style="width: {{ ($totalDonations / 1500) * 100 }}%;"
                                aria-valuenow="{{ ($totalDonations / 1500) * 100 }}" aria-valuemin="0" aria-valuemax="100">
                                {{ number_format(($totalDonations / 1500) * 100, 2) }}%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</body>

</html>
