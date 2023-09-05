<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajanlatkeres</title>
    </head>
    <body>
        <p><b>Ajánlatkérő adatai:</b></p>
        <ul>
            <li>Név: {{ $validatedData['name']}}</li>
            <li>Email: {{ $validatedData['email']}}</li>
            <li>Telefon: {{ $validatedData['phone']}}</li>
        </ul>
        <p><b>Üzenet:</b></p>
        <p>{{ $validatedData['message'] }}</p>
    </body>
</html>