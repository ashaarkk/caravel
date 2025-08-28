@extends('layouts.app')

@section('title', 'Register')

@section('content')
<form method="POST" action="/register" class="space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium">Name</label>
        <input type="text" name="name" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Email</label>
        <input type="email" name="email" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Password</label>
        <input type="password" name="password" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
    </div>
    <div>
        <label class="block text-sm font-medium">Confirm Password</label>
        <input type="password" name="password_confirmation" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-pink-400" required>
    </div>
    <button class="w-full bg-pink-500 hover:bg-pink-600 text-white p-2 rounded-lg">
        Register
    </button>
</form>

<p class="text-center text-sm mt-3">
    Sudah punya akun? <a href="/login" class="text-pink-600 font-medium">Login</a>
</p>
@endsection
