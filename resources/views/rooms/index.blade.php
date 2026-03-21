<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Room') }}
        </h2>
    </x-slot>


    <div class="py-12 space-y-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border shadow">

            @if (session('success'))
                <p class="text-green-500">{{ session('success') }}</p>
            @endif

        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Add room to school/database.") }}

                </div>
            </div>
        </div>

    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <form action="{{route('rooms.store')}}" method="post" class="space-y-3">
                    @csrf

                    <div>
                        <x-input-label for="title">{{ __('title') }}</x-input-label>
                        <x-text-input value="{{ old('title', '') }}" name="title" id="title" />
                    </div>

                    <div>
                        <x-input-label for="school_id">{{ __('school_id') }}</x-input-label>
                        <x-text-input value="{{ old('school_id', '') }}" name="school_id" id="school_id" />
                    </div>


                    <x-primary-button>{{ __('save') }}</x-primary-button>

                </form>

            </div>
        </div>
    </div>


    <div class="py-12 space-y-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-3">

                    @foreach($rooms as $room)
                        <div class="border p-3 rounded">
                            <p class="text-gray-500 dark:text-gray-100">{{ $room->school_id }}</p>
                            <h2 class="text-2xl">{{ $room->title }}</h2>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>


</x-app-layout>
