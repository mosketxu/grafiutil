<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div> --}}
    <div class="p-2">
        <div class="max-w-full mx-auto">
            {{-- <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                @if (Auth::user()->hasRole('Operario'))
                    @livewire('stock-movimientos')
                @else
                    @livewire('ents',['entidadtipo_id'=>$entidadtipo_id])
                @endif
            </div> --}}
        </div>
    </div>
</x-app-layout>
