@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<p class="text-center text-gray-700">
    Selamat datang, <b>{{ auth()->user()->name }}</b> 🎉
</p>

<form method="POST" action="/logout" class="mt-4 text-center">
    @csrf
    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">
        Logout
    </button>
</form>
@endsection
