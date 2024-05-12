@extends('layouts.default')

@section('title', 'Email verificatie')

@section('content')
    <section class="verification-section">
        <div class="container-full bg-appleblue">
            <div class="container h-70 flex justify-content-center align-items-center">
                <div class="row ">
                    <div class="col-12  text-center justify-center flex">
                        <div class="col-8">
                            <h1 class="m-t-25 m-b-25">Bevestig uw emailadres</h1>
                            <p class="lead mb-3">Bedankt voor uw registratie! Voordat u verder gaat, moet u uw emailadres
                                bevestigen door op de link te klikken die we naar uw email hebben gestuurd. Als u de email
                                niet
                                heeft ontvangen, zullen we u graag een nieuwe sturen.</p>

                            <div class="verification-info m-t-40 m-b-25">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Verstuur verificatie email
                                        opnieuw</button>
                                </form>
                            </div>

                            <div class="help-block mt-4 col-12 flex justify-center">
                                <div class="col-5  ">
                                    <p>Als u problemen ondervindt met het verifiëren van uw email, neem dan gerust <a
                                            href="#">contact</a> met ons op.</p>
                                    <p>Als u zich niet heeft geregistreerd, negeer dan deze pagina.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
