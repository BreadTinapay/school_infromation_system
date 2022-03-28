@extends('layouts.app') 

@section('content')
<div
    class="container flex flex-wrap justify-between items-center mx-auto my-2 bg-white rounded-lg p-4"
>
    
    <form action="{{ route('register') }}" method="post" class="w-full">
        @csrf
        <div class="mb-6">
            <input autofocus type="text" id="email" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name" required=""value={{ old('name')}}>
        </div>

        <div class="mb-6">
            <input autofocus type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="email" required=""value={{ old('email')}}>
        </div>

        <div class="mb-6">
            <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="username" required=""value={{ old('username')}}>
        </div>

        <div class="mb-6">
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="password" required="" >
        </div>

        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg w-full font-semibold shadow">Register</button>
    </form>
    
</div>

@endsection
