<html>
<body>
 {!! Form::open(['method' => 'POST', 'route' => ['rooms.store']]) !!}
<div>
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>
<div>
    {!! Form::label('x', 'x:' . $room->x) !!}
    {!! Form::hidden('x', $room->x) !!}
</div>
<div>
    {!! Form::label('y', 'y:' . $room->y) !!}
    {!! Form::hidden('y', $room->y) !!}
</div>
<div>
    {!! Form::label('map_id', 'MapId:' . $room->map_id) !!}
    {!! Form::hidden('map_id', $room->map_id) !!}
</div>
    {!! Form::submit() !!}
    {!! Form::close() !!}

</body>
</html>