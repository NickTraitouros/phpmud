<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

{!! HTML::script('js/mapBuilder.js') !!}

@for ($x = 0; $x < 10; $x++)
    @for ($y = 0; $y < 10; $y++)
        <span onclick="showRoom({{$x}},{{$y}},'{{$mapId}}')"> <u>{{ $rows[$x][$y] }}</u> </span>
    @endfor
    <br>
@endfor

<div id="edit"></div>
