<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @php
        $type = 'success';
    @endphp

    <div class="py-12">
        <x-container>
            <x-alert :type="$type">
                <x-slot name="title">
                    Title
                </x-slot>
                Alert Message
            </x-alert>
        </x-container>
    </div>
</x-app-layout>
