@extends('layouts.app')

@section('content')
    <x-guest-layout>
        <div>{{$user->name}}</div>
        <div>{{$user->biography}}</div>
        @foreach ($posts as $post)
            <x-guest-layout>
                {{$post->user->name}}:
                {{$post->description}}
                <img src="{{ $post->img_url }}">
            </x-guest-layout>
        @endforeach
    </x-guest-layout>
@endsection
