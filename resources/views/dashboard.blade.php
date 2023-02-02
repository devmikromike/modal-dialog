<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-4 p-6 text-gray-900">
                    <div class="mt-4 mb-3 ">
                      <button  x-data="{}" x-on:click="window.livewire.emitTo('contact-model', 'show')" >
                          <p>text for dummy users </p>
                      </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
