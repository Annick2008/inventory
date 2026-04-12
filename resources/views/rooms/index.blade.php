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
                        <x-input-label for="school_id">{{ __('School') }}</x-input-label>
                        <select name="school_id" id="school_id" class='border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'>
                            @foreach($schools as $school)
                                <option @selected(old('school_id', '') == $school->id) value="{{ $school->id }}">{{ $school->name }}</option>
                            @endforeach
                        </select>
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
                        <div class="border p-3  rounded flex justify-between">
                            <p class="text-gray-500 dark:text-gray-100">{{ $room->school_id }}</p>
                            <h2 class="text-2xl">{{ $room->title }}</h2>

                            <div class="flex space-x-3">
                                <a href="{{ route('rooms.edit', $room->id) }}">
                                    <x-pencil class="text-indigo-600"/>
                                    <span class="sr-only">{{ __('Edit room') }}</span>
                                </a>

                                <form action="{{ route('rooms.destroy', $room->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf

                                    <button>
                                        <x-trash class="text-red-600"/>
                                        <span class="sr-only">{{ __('Remove room') }}</span>
                                    </button>
                                </form>

                           </div>

                        </div>
                    @endforeach

                        <div>
                            {{ $rooms->links() }}
                        </div>

                </div>
            </div>
        </div>

    </div>


</x-app-layout>
