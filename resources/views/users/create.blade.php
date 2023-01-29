@extends('layouts.app')

@section('content')

    {{-- Create New User Form --}}
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <v-input id="name" type="text" name="name" value="{{ old('name') }}" label="{{ __('Username') }}" error="@error('name') error @enderror">@error('name') {{ $message }} @enderror</v-input>
        <v-input id="email" type="email" name="email" value="{{ old('email') }}" label="{{ __('Email Address') }}" error="@error('email') error @enderror">@error('email') {{ $message }} @enderror</v-input>
        <v-input id="password" type="password" name="password" value="{{ old('password') }}" label="{{ __('Password') }}" error="@error('password') error @enderror">@error('password') {{ $message }} @enderror</v-input>
        <v-input id="password_confirmation" type="password" name="password_confirmation" label="{{ __('Confirm Password') }}"></v-input>
        <v-button id="create" type="submit" variant="primary">{{ __('Create') }}</v-button>
    </form>
@endsection
