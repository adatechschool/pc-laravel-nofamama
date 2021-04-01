<!-- <x-guest-layout>
  {{$post->user->name}}: 
  {{$post->description}}
  <img src="{{ $post->img_url }}">
</x-guest-layout> -->

@section('title', 'Home')
@extends('layouts.master')

@section('content')

@foreach ($posts as $post)
    @include('partials.summary')
@endforeach

@endsection