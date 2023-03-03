<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/c/c8/Love_Heart_symbol.svg">
    <title>Laravel Crush</title>
</head>
<body>
<h1>Envoyer un message secret à votre crush ❤️</h1>

@if (session('message'))
    <p>{{ session('message') }}</p>
@endif

<form method="POST">
    @csrf
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea name="message" required minlength="15"></textarea>
    </div>
    <button type="submit">Envoyer</button>
</form>
</body>
</html>
