<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film</title>
</head>
<body>

    <header>
        <ul>
            <li>
                <a href="/">HOME</a>
            </li>

            <li>
                <a href="/colori">COLORI</a>
            </li>

        </ul>
    </header>

    @php
        $counter = 5
    @endphp

    <div class="container">
        <ul>

            @for ($i=0; $i<$counter; $i++)
                <li> {{$movies[$i]}} </li>
            @endfor
        </ul>
    </div>

</body>
</html>
