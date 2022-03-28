@extends('layouts.app')

@section('content')

<div class="container flex flex-wrap justify-between items-center mx-auto my-2 bg-white rounded-lg p-4">

    <form action="{{ route('apply') }}" method="post" class="w-full">
        @csrf

        <div class="mb-6">
            <input autofocus type="number" id="studentid" name="studentid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="studentid" required=""value={{ old('studentid')}} >
        </div>

        <div class="mb-6">
            <input autofocus type="text" id="firstname" name="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="firstname" required=""value={{ old('firstname')}} >
        </div>

        <div class="mb-6">
            <input autofocus type="text" id="lastname" name="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="lastname" required=""value={{ old('lastname')}} >
        </div>

        <div class="flex items-center mb-4">
            <input id="country-option-1" type="radio" name="college" value="CAS" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-1" aria-describedby="country-option-1" required>
            <label for="country-option-1" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                College of Arts and Sciences (CAS)
            </label>
          </div>

        <div class="flex items-center mb-4">
            <input id="country-option-2" type="radio" name="college" value="COFED" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-2" aria-describedby="country-option-2">
            <label for="country-option-2" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                College of Education (COFED)
            </label>
          </div>

        <div class="flex items-center mb-4">
            <input id="country-option-3" type="radio" name="college" value="CME" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="country-option-3" aria-describedby="country-option-3">
            <label for="country-option-3" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                College of Management and Entrepreneurship (CME)
            </label>
          </div>

          
        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg w-full font-semibold shadow">Apply</button>
    </form>
    
</div>

@endsection
