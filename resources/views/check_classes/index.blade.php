<x-app-layout>
  <x-slot name="header">
  <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('sc-label.CheckClasses') }}
            </h2>
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
                            <!-- ↓作成ページへのリンクを追加 -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('check_classes.create')" :active="request()->routeIs('check_classes.create')">
                     {{ __('Create') }}
                     </x-nav-link>
            </div>
            </nav>
  </div>
  </x-slot>
  <div class="grid grid-cols-1 place-items-center">
    <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">
                  <div class="grid grid-cols-6">
                      <div class="py-4 px-6 bg-blue-50 font-bold text-lg text-gray-dark border-b border-blue-800">{{ __('id') }}</div>                    
                      <div class="py-4 px-6 bg-blue-50 font-bold text-lg text-gray-dark border-b border-blue-800 col-span-5">{{ __('sc-label.Name') }}</div>
                  </div>
                  @foreach ($checkClasses as $checkClass)
                  <div class="grid grid-cols-6 hover:bg-pink-100">
                    <div class="py-4 px-6 border-b border-blue-800">{{$checkClass->id}}</div>                    
                    <div class="py-4 px-6 border-b border-blue-800 col-span-2">{{$checkClass->name}}</div>                    
                    <div class="py-4 px-6 border-b border-blue-800">
                      <x-sc-showedit :href="url('check_classes/'.$checkClass->id)">{{ __('sc-label.Show') }}</x-sc-showedit>
                    </div>
                    <div class="py-4 px-6 border-b border-blue-800">   
                      <x-sc-showedit :href="url('check_classes/'.$checkClass->id.'/edit')">{{ __('sc-label.Edit') }}</x-sc-showedit>
                    </div>
                    <div class="py-4 px-1 border-b border-blue-800">
                      <form method="DELETE" action="{{ route('check_classes.destroy',[$checkClass->id]) }}">
                        <x-button class="ml-4">{{ __('sc-label.Dele') }}</x-button>
                      </form>
                    </div>
                  </div>
                  @endforeach
                </div>
            </div>
          </div>  
        </div>
    </div> 

  
</x-app-layout>
