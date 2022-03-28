@extends('layouts.app')

@section('content')

    <div class="container flex flex-wrap justify-between items-center mx-auto bg-indigo-600 mt-4 rounded-lg p-4">
        <h1 class="font-bold text-white text-xl">Welcome back {{ auth()->user()->name }}!</h1>
    </div>

    <div class="container flex flex-wrap justify-between items-center mx-auto bg-white mt-4 rounded-lg p-4">
        <h1 class="font-semibold text-indigo-600 mb-4 w-full">Dashboard</h1>

        @if($applicants->count())
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                STUDENT #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                COLLEGE
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PROGRAM
                            </th>
                            <th scope="col" class="px-6 py-3">
                                COARSE CODE
                            </th>
                            <th scope="col" class="px-6 py-3">
                                COARSE NAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                DATE ENROLLED
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $applicant)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $applicant->ID }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $applicant->STUDENT_NUMBER }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $applicant->NAME }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $applicant->COLLEGE }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $applicant->PROGRAM }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $applicant->COARSE_CODE }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $applicant->COARSE_NAME }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $applicant->created_at }}
                            </td>
                            <form action="{{ route('dashboard.destroy', $applicant->ID) }}" method="post">
                                @csrf
                                @method('DELETE')
                            <td class="px-6 py-4 text-right">
                                {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" data-modal-toggle="defaultModal">Delete</a> --}}
                                <button type="submit" class="text-indigo-600 font-semibold">Delete</button>
                            </td>
                        </form>
                        </tr>

                        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                            Delete?
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            Are you sure you want to delete ID: {{ $applicant }}?
                        </p>    
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                            <button data-modal-toggle="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                            <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                        
                    </div>
                </div>
            </div>
        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>There are no applicants yet</p>
        @endif

        

    </div>


@endsection