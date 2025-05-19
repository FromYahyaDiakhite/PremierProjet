// resources/views/mail/test-email.blade.php

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <div>
        <p>Salut {{$name}},</p>
        <p>Votre application Laravel peut-elle envoyer des emails ? 😉</p>
        <img src="{{ $message->embed(public_path('images/mouton.jpg')) }}" alt="mouton">
    </div>
</body>
</html>