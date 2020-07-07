<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <div class="tab">
            <div class="section">
                <h1>Name</h1>
                @foreach ($vestiti as $vestito)
                    <p> {{ $vestito->name }} </p>
                @endforeach
            </div>
            <div class="section">
                <h1>size</h1>
                @foreach ($vestiti as $vestito)
                    <p> {{ $vestito->size }} </p>
                @endforeach
            </div>
            <div class="section">
                <h1>Colour</h1>
                @foreach ($vestiti as $vestito)
                    <p> {{ $vestito->colour }} </p>
                @endforeach
            </div>
        </div>
    </body>
</html>
