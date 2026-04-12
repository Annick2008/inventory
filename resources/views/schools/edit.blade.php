<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('School') }}
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
                    <p>{{ __('Edit school') }}</p>

                </div>
            </div>
        </div>
    </div>



    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <form action="{{ route('schools.update', $school) }}" method="post" class="space-y-3">
                    @csrf
                    @method('PATCH')

                    <div>
                        <x-input-label for="name">{{ __('name') }}</x-input-label>
                        <x-text-input value="{{ old('name', $school->name) }}" name="name" id="name" />
                    </div>

                    <div>
                        <x-input-label for="school_number">{{ __('school number') }}</x-input-label>
                        <x-text-input value="{{ old('school_number', $school->school_number) }}" name="school_number" id="school_number" />
                    </div>

                    <div>
                        <x-input-label for="address">{{ __('address') }}</x-input-label>
                        <x-text-input value="{{ old('address', $school->address) }}" name="address" id="address" />
                    </div>

                    <x-primary-button>{{ __('save') }}</x-primary-button>
                </form>

            </div>
        </div>
    </div>


</x-app-layout>
