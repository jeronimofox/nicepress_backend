<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editions') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-12xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    @foreach ($editions as $edition)
                        <div class="flex items-center">
                            <div class="ml-12">
                                {{ $edition->name }}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
