<x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sc-label.CheckClasses') }}
            </h2>
    </x-slot>
    <x-sc-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @empty($check_class)
	       <form method="POST" action="{{ route('check_classes.store') }}">
        @endempty
        @isset($check_class)
        <form method="PUT" action="{{ route('check_classes.update') }}">
	        {!! Form::model($book, ['method' => 'PUT', 'route' => ['check_classes.update', $book->id]]) !!} 
        @endisset
        <form method="POST" action="{{ route('check_classes.store') }}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('sc-label.Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
       </x-sc-card>
</x-app-layout>
