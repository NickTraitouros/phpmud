<div>{{ $description }}</div>
<div>{{ $x }}:{{ $y }}</div>
<div>
Characters in the room:
 @foreach ($characters as $key => $character)
     <div>{{ $character["name"] }}</div>
 @endforeach
 </div>