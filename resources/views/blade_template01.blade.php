{{ "hello world" }}

{!! "<h1>Hello world in h1 tag</h1>" !!}

@php
$name = "Rehman";
$age = 23;

$arr = ['Apple', 'Banana', 'Grapes', 'WaterMelon'];
@endphp

{{-- {{ "My Name is: " . $name . " & age is: " . $age }} --}}

<ul>
@foreach ($arr as $a)
@if ($loop->first)
<li style="color: green"> {{ $a }} </li>
@elseif ($loop->last)
<li style="color: red"> {{ $a }} </li>
@else
<li > {{ $a }} </li>
@endif
{{-- <li>{{$loop->index}}  {{ $a }} </li> --}}
@endforeach
</ul>