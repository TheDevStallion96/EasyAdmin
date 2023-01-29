@extends('layouts.app')

@section('content')

    {{-- Success Message --}}
    @if (session()->has('success'))
        <div class="block text-green-500" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- Action Links --}}
    <div class="flex items-center py-2 mb-4">
        <a href="{{ route('users.create') }}" class="button">{{ __('Create User') }}</a>
    </div>

    {{-- Users Table --}}
    <table class="table-auto w-full border">
        <thead>
            <tr>
                <th class="text-left px-4 py-2 text-base font-normal border-b">{{ __('Username') }}</th>
                <th class="text-left px-4 py-2 text-base font-normal border-b">{{ __('Email Address') }}</th>
                <th class="text-left px-4 py-2 text-base font-normal border-b">{{ __('Verified') }}</th>
                <th class="text-left px-4 py-2 text-base font-normal border-b">{{ __('Date Registered') }}</th>
                <th class="text-left px-4 py-2 text-base font-normal border-b">{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="text-left px-4 py-2 border-b">{{ $user->name }}</td>
                    <td class="text-left px-4 py-2 border-b">{{ $user->email }}</td>
                    <td class="text-left px-4 py-2 border-b">{{ $user->email_verified_at }}</td>
                    <td class="text-left px-4 py-2 border-b">{{ $user->created_at }}</td>
                    <td class="text-left px-4 py-2 border-b">
                        <a href="{{ route('users.show', $user->id) }}" class="inline-block pr-2">{{ __('View') }}</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="inline-block pl-2">{{ __('Edit') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
