<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Room') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-message/>

                </div>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Edit room") }}

                </div>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('rooms.update', $room) }}" method="post" class="space-y-3">
                        @csrf
                        @method('PATCH')

                            <div>
                                <x-input-label for="title">{{ __('title') }}</x-input-label>
                                <x-text-input value="{{ old('title', $room->title) }}" name="title" id="title" />
                            </div>
                            <div>
                                <x-input-label for="school_id">{{ __('School') }}</x-input-label>
                                <select name="school_id" id="school_id" class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'>
                                    @foreach($schools as $school)
                                        <option @selected(old('school_id', $room->school_id) == $school->id) value="{{ $school->id }}">{{ $school->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        <x-primary-button>{{ __('save') }}</x-primary-button>

                    </form>

                </div>
            </div>
        </div>

    </div>

</x-app-layout>
