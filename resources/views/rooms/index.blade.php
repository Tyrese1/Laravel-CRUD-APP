@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
        <th>
            Room Number
        </th>
        <th>
            Type
        </th>
    </tr>
</tr>
</thead>
<tbody>
    @foreach($rooms as $room)
        <tr>
            <td>{{ $room->number}}</td>
            <td>{{ $room->roomType->name}}</td>
        </td>
    @endforeach
</tbody>
</table>
 @endsection