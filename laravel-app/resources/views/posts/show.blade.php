@extends('layouts.app')

@section('content')

    @foreach ($posts as $post)
{{--        @include('partials.summary')--}}
    @endforeach

@endsection
