@extends('profile.layouts.profile-default')

<body>

    @section('profile-content')
        <main>

            <div class="container">
                <div class="row col-12 justify-center">
                    <div class="col-12 row  flex-column align-items-center">
                        <h1>Dit is profile home pagina</h1>
                        <p>Welcome
                        <p>{{ Auth::user()->name }}</p>
                        </p>
                        @if (Auth::user()->profile_picture)
                            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="Profile Picture"
                                style="width: 150px; height: 150px;">
                        @else
                            <p>No profile picture available.</p>
                        @endif
                    </div>
                </div>
            </div>
        </main>
    @endsection



</body>

</html>
