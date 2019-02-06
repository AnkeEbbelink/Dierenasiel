<!DOCTYPE html>
<html>
    <head>
        <title>Cats2</title>
    </head>
    <body>
        <h1>Cats2</h1>

        @foreach ($cats as $cat)
            <li>{{$cat ->name}}</li>
        @endforeach
    </body>
</html>