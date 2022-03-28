@extends('layouts.app')

@section('content')

<div
    class="container flex flex-wrap justify-between items-center mx-auto my-2 bg-white rounded-lg p-4"
>
 @if (session('status'))
 <div class="text-red-500 text-sm mb-2">
    {{ session('status') }}
 </div>
 @endif

    <form action="{{ route('login') }}" method="post" class="w-full">
        @csrf

        <div class="mb-6">
            <input autofocus type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="username" required=""value={{ old('username')}} >
        </div>

        <div class="mb-6">
            <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="password" required="" >
        </div>

        <div class="mb-6 flex items-center">
            <input type="checkbox" id="remember" name="remember" class="mr-2">
            <label for="remember" class="text-sm ">Remember me</label>
        </div>
          
        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg w-full font-semibold shadow">Register</button>
    </form>
    
</div>

@endsection
