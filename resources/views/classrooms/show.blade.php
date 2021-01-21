@extends('layouts.main')

@section('contenuto')
    <h1>
        {{$classroom->name}} DETAILS
    </h1>
    <h2>
        {{$classroom->description}} 
    </h2>
@endsection