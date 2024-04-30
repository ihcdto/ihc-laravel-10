@extends('prototype::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('prototype.name') !!}</p>
@endsection
