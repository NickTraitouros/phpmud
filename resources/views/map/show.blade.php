<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

{!! HTML::script('js/mapBuilder.js') !!}

@for ($y = 0; $y < count($rows); $y++)
    @for ($x = 0; $x < count($rows[$y]); $x++)
        <span onclick="showRoom({{$x}},{{$y}},'{{$mapId}}',{{count($rows)}},{{count($rows[$x])}})"> <u>{{ $rows[$x][$y] }}</u> </span>
    @endfor
    <br>
@endfor

<div id="edit"></div>
