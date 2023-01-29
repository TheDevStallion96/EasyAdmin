@extends('layouts.app')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="PUT">
        @csrf
        <v-input id="name" type="text" name="name" value="{{ $user->name }}" label="{{ __('Username') }}" error="@error('name') error @enderror">@error('name') {{ $message }} @enderror</v-input>
        <v-input id="email" type="email" name="email" value="{{ $user->email }}" label="{{ __('Email Address') }}" error="@error('email') error @enderror">@error('email') {{ $message }} @enderror</v-input>
        <v-input id="password" type="password" name="password" value="{{ old('password') }}" label="{{ __('Password') }}" error="@error('password') error @enderror">@error('password') {{ $message }} @enderror</v-input>
        <v-button id="update" type="submit" variant="primary">{{ __('Update') }}</v-button>
    </form>
@endsection
