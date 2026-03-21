<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('School') }}
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
                    <p>{{ __('Add a school to the database') }}</p>

                </div>
            </div>
        </div>
    </div>



    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <form action="{{route('schools.store')}}" method="post" class="space-y-3">
                    @csrf

                    <div>
                        <x-input-label for="name">{{ __('name') }}</x-input-label>
                        <x-text-input value="{{ old('name', '') }}" name="name" id="name" />
                    </div>

                    <div>
                        <x-input-label for="school_number">{{ __('school number') }}</x-input-label>
                        <x-text-input value="{{ old('school_number', '') }}" name="school_number" id="school_number" />
                    </div>

                    <div>
                        <x-input-label for="address">{{ __('address') }}</x-input-label>
                        <x-text-input value="{{ old('address', '') }}" name="address" id="address" />
                    </div>

                    <x-primary-button>{{ __('save') }}</x-primary-button>
                </form>

            </div>
        </div>
    </div>


    <div class="py-12 space-y-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-3">


                    @foreach($schools as $school)
                        <div class="border p-3 rounded">
                            <h2 class="text-2xl">{{ $school->name }}</h2>
                            <p class="text-gray-500 dark:text-gray-100">{{ $school->address }}</p>
                        </div>
                    @endforeach

                    <div>
                        {{ $schools->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
