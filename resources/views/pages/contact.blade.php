<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>Contact me {{ $name.' '.$lastname }}</h1>
        @for($i=1;$i<10;$i++)
            @for($j=1;$j<$i;$j++)
                {{ $j }}
            @endfor
            <br>
        @endfor
    </body>
</html>
