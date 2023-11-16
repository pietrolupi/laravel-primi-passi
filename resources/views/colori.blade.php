<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colori</title>
</head>
<body>

    <header>
        <ul>
            <li>
                <a href="/">HOME</a>
            </li>

            <li>
                <a href="/film">FILM</a>
            </li>
        </ul>
    </header>

    <div class="container">

        @if ($showColori)
            <ul>
                @foreach ($colori as $colore )
                    <li>{{$colore}}</li>
                @endforeach
            </ul>
        @endif


    </div>

</body>
</html>
