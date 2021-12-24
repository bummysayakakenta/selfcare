<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sc-label.CheckClasses') }}
            </h2>
    </x-slot>
    <x-sc-card>
            <!-- Name -->
            <div>
            <x-label for="name" :value=" __('id')" />

            <x-label id="name" :value="$checkClass->id" />
            </div>

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('sc-label.Name')" />

                <x-label id="name" :value="$checkClass->name" />
            </div>


    </x-sc-card>
</x-app-layout>
