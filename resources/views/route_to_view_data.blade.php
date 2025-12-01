<h1>Hello </h1>

{{-- {{ $name . " " . $age }} --}}

@foreach ($data as $id => $u )
   <h3>
    {{$id}}  {{$u['name']}} || 
    {{$id}}  {{$u['age']}}  ||
    {{$id}}  {{$u['city']}} ||
    <a href="{{ route('show_users', $id) }}">Show Users</a>
   </h3>
@endforeach