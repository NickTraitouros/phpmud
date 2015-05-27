<html>
<body>
 {!! Form::model($room, ['method' => 'PUT', 'route' => ['rooms.update', $room->id]]) !!}
<div>
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description') !!}
</div>
<div>
{!! Form::label('X', 'X:' . $room->x) !!}
{!! Form::label('Y', 'Y:' . $room->y) !!}
</div>
    {!! Form::hidden('x', $room->x) !!}
    {!! Form::hidden('y', $room->y) !!}
    {!! Form::hidden('rows', $rows) !!}
    {!! Form::hidden('columns', $columns) !!}
<div>
    {!! Form::label('map_id', 'MapId:' . $room->map_id) !!}
    {!! Form::hidden('map_id', $room->map_id) !!}
</div>
    {!! Form::submit() !!}
    {!! Form::close() !!}

</body>
</html>