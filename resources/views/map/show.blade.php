<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

{!! HTML::script('js/mapBuilder.js') !!}

@for ($x = 0; $x < count($rows) - 1; $x++)
    @for ($y = 0; $y < count($rows[$x]) - 1; $y++)
        <span onclick="showRoom({{$x}},{{$y}},'{{$mapId}}')"> <u>{{ $rows[$x][$y] }}</u> </span>
    @endfor
    <br>
@endfor

<div id="edit"></div>
