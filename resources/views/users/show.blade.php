@extends('layouts.app')

@section('content')

    {{-- Action Links --}}
    <div class="action-links">
        <a href="{{ route('users.index') }}" class="button">{{ __('Return') }}</a>
        <a href="{{ route('users.edit', $user->id) }}" class="button">{{ __('Update User') }}</a>
    </div>

    {{-- User Details --}}
    <div class="block">
        {{ $user->name }}
        {{ $user->email }}
        {{ $user->created_at }}
        {{ $user->updated_at }}
    </div>
@endsection
