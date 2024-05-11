<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email Address</title>
</head>

<body>
    <div style="text-align: center; padding: 20px;">
        <img src="{{ url('images/logo.png') }}" alt="Your Logo" style="width: 200px;">

        <h1>Please Verify Your Email Address</h1>
        <p>Thanks for signing up! Before getting started, could you please verify your email address by clicking the
            link below?</p>

        <a href="{{ $verificationUrl }}"
            style="padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">
            Verify Email Address
        </a>

        <p>If you did not create an account, no further action is required.</p>
    </div>
</body>

</html>
