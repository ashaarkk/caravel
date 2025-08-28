@extends('layouts.app')

@section('title', 'Login')

@section('content')
<form method="POST" action="/login" class="space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium">Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
    </div>
    <button class="w-full bg-pink-500 hover:bg-pink-600 text-white p-2 rounded-lg">
        Login
    </button>
</form>

<p class="text-center text-sm mt-3">
    Belum punya akun? <a href="/register" class="text-pink-600 font-medium">Register</a>
</p>
@endsection
