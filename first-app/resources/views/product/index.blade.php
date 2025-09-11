<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- compact method data --}}
    {{-- <h1>Products</h1>
    <h2>{{$name}}</h2>
    <h2>{{$email}}</h2> --}}


    {{-- array/with data --}}
    {{-- <h1>Products</h1>
    <h2>{{$name}}</h2>
    <h2>{{$email}}</h2>
    <h2>{{$age}}</h2> --}}

    {{-- Blade Syntax --}}

@php
$name="haris";
$lname="naseer";
$age=19;

@endphp

<h1>NAME: {{$name." ".$lname}}</h1>
{{-- conditional rendering --}}
@if($age>=18)
<p>You Can Vote on 8 feb</p>
@else
<p>You Cannot Vote on 8 feb</p>

@endif

</body>
</html>