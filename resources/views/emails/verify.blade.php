<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email Address</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>

    <div class=" mail-container">
        <div class="row">
            <div class="col-12 col-md-7 flex justify-between flex-column p-t-50 p-b-5">
                <div class="col-12">

                    <img src="http://vzwverkoopgame.test/images/sfeer-1.jpg" alt="Logo">

                </div>
                <div class="col-12 flex justify-center flex-column align-items-center">
                    <h2>Hoi, {{ $userName }},</h2>
                    <p>Dankje om te registereren op onze website!</p>
                    <h1 class="p-t-25 p-b-25">Verify Your Email Address</h1>
                    <p class="p-t-25 p-b-25">Please click on the link below to verify your email address:</p>
                    <div class="flex justify-center p-t-25 p-b-25">
                        <a class="verify-btn" href="{{ $verificationUrl }}">Verify Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
