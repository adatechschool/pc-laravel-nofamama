@extends('layouts.app')

@section('content')

        <x-auth-card>
            <x-slot name="logo">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('users.update', Auth::user()->id) }}">
            @csrf
            @method('PUT')

            <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
                </div>

                <div class="mt-4">
                    <x-label for="image" :value="__('image')" />

                    <x-input id="image" class="block mt-1 w-full" type="text" name="image" value="{{$user->image}}" required />
                </div>

                <div class="mt-4">
                    <x-label for="biography" :value="__('biography')" />

                    <x-input id="biography" class="block mt-1 w-full" type="text" name="biography" value="{{$user->biography}}" required autofocus />
                </div>
                <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
                </div>
            </form>
        </x-auth-card>
@endsection


