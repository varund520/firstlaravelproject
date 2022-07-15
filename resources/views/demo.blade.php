<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 
    
        {{-- For loop --}}
        @for ($i=0; $i<=10; $i++)
            {{ $i }}
        @endfor

        {{-- While loop --}}
        @php $j = 1; @endphp
        @while ($j<=10)
            {{ $j }}
            @php $j++; @endphp
        @endwhile        

        {{-- Foreach loop --}}
        @php
            $arr = [1,2,3,4,5,6,7,8,9,10];
        @endphp
        @foreach ($arr as $a)
            {{ $a }}
        @endforeach



</body>
</html>