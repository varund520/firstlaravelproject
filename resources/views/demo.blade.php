<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

  {!!$html!!}

  <p>{{ $id ? $id : '' }}</p>

        {{-- @if($name == "varun")
                {{"Your name is varun"}}
            @elseif($name == "avinash")
                {{"Your name is avinash"}}
            @else
                {{"your name is not varun or avinash"}}
        @endif --}}

        @unless ($name === 'varun')
            {{'it will print when name is not equal to varun'}}
        @endunless
    
</body>
</html>