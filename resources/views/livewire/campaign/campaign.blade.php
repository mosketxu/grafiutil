<div class="">
    {{-- @livewire('menu',['campaign'=>$campaign],key($campaign->id)) --}}

    <div class="p-1 mx-2">
        <div class="flex flex-row space-x-8" >
            <div class="">
                @if($campaign->id)
                <h1 class="text-2xl font-semibold text-gray-900">Campaña: {{ $campaign->name }}</h1>
                @else
                <h1 class="text-2xl font-semibold text-gray-900">Nueva Campaña</h1>
                @endif
            </div>
            <div class="">
                <x-buttonblue  onclick="location.href = '{{ route('campaign.create') }}'" >{{ __('Nueva') }}</x-buttonblue>
            </div>
        </div>
    </div>
    <div class="h-screen">
        <div class="flex-col space-y-4 text-gray-500">
            {{-- formulario datos --}}
            <form wire:submit="save" class="ml-4" id="form_campaign">
                {{-- datos campaña --}}
                <div class="p-2 space-y-2 text-sm rounded-md ">
                    <div class="w-full">
                        @if($cliente->entidad_id)
                            <x-label for="cliente">Cliente</x-label>
                            <x-inputblue id="cliente" type="text" class="w-full " id="cliente" name="entidad_id" value="{{$entidades->first()->entidad}}" disabled/>
                        @else
                        <x-label for="clienteselect">Cliente</x-label>
                                <x-selectcolor wire:model="entidad_id" class="rounded-sm" id="clienteselect">
                                    <option value="--Selecciona Cliente--"></option>
                                    @foreach ($entidades as $entidad)
                                    <option value="{{ $entidad->id }}">{{ $entidad->entidad }}</option>
                                    @endforeach
                                </x-selectcolor>
                            </div>
                        @error('entidad_id') <span class="text-red-500 error">{{ $message }}</span> @enderror
                        @endif
                    </div>
                    <div class="w-full">
                        <x-label for="name">Campaña</x-label>
                        <x-inputblue wire:model.defer="name" type="text" class="w-full " id="name" name="name" autocomplete/>
                        @error('name') <span class="text-red-500 error">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex space-x-1 ">
                        <div class="w-full">
                            <x-label for="fechainicio">Fecha Inicio</x-label>
                            <x-inputblue type="date" wire:model.defer="fechainicio" class="w-full " id="fechainicio" name="fechainicio" />
                            @error('fechainicio') <span class="text-red-500 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="w-full">
                            <x-label for="fechafin">Fecha Finalización</x-label>
                            <x-inputblue type="date" wire:model.defer="fechafin" class="w-full " id="fechafin" name="fechafin" />
                            @error('fechafin') <span class="text-red-500 error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                {{-- fechas montaje --}}
                <div class="p-2 space-y-2 text-sm rounded-md bg-blue-50">
                    <div class="my-2 text-base text-blue-900 underline">Fechas Montaje</div>
                    <div class="w-6/12 space-y-2">
                        <div class="flex items-center space-x-2 ">
                            <x-label for="fechainstal1" class="w-1/12">Fecha</x-label>
                            <x-inputblue type="date" wire:model.defer="fechainstal1"  id="fechainstal1" name="fechainstal1" />
                            <x-selectcolor wire:model.defer="montaje1"  id="montaje1" >
                                <option value="">-Selecciona-</option>
                                <option value="M">Montaje</option>
                                <option value="D">Desmontaje</option>
                            </x-selectcolor>
                        </div>
                        <div class="flex items-center w-full space-x-2 ">
                            <x-label for="fechainstal2" class="w-1/12">Fecha</x-label>
                            <x-inputblue type="date" wire:model.defer="fechainstal2" id="fechainstal2" name="fechainstal2" />
                            <x-selectcolor wire:model.defer="montaje2"  id="montaje2">
                                <option value="">-Selecciona-</option>
                                <option value="M">Montaje</option>
                                <option value="D">Desmontaje</option>
                            </x-selectcolor>
                        </div>
                        <div class="flex items-center w-full space-x-2 ">
                            <x-label for="fechainstal3" class="w-1/12">Fecha</x-label>
                            <x-inputblue type="date" wire:model.defer="fechainstal3" id="fechainstal3" name="fechainstal3" />
                            <x-selectcolor wire:model.defer="montaje3" id="montaje3">
                                <option value="">-Selecciona-</option>
                                <option value="M">Montaje</option>
                                <option value="D">Desmontaje</option>
                            </x-selectcolor>
                        </div>
                    </div>
                </div>
                <div class="flex mt-2 mb-2 ml-2 space-x-4">
                    <div class="flex">
                        <button type="submit" class="relative w-full px-8 py-3 font-medium text-white bg-blue-500 rounded-lg disabled:cursor-not-allowed disabled:opacity-75">
                            Save
                            <div wire:loading.flex class="absolute top-0 bottom-0 right-0 flex items-center pr-4">
                                <svg class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                    <div class="space-x-3">
                        @can('campaign.create')
                        <x-buttonblue class="bg-blue-600 disabled:cursor-not-allowed disabled:opacity-75" >
                            {{ __('Guardar') }}
                            <div wire:loading.flex class="absolute top-0 bottom-0 right-0 flex items-center pr-4">
                                <svg class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </div>
                        </x-buttonblue>
                        @endcan
                        <x-secondary-button  onclick="location.href = '{{route('campaign.index')}}'">{{ __('Volver') }}</x-secondary-button>
                    </div>
                </div>
            </form>

                <!-- Success Indicator... -->
    <div
    x-show="$wire.showSuccessIndicator"
    x-transition.out.opacity.duration.2000ms
    x-effect="if($wire.showSuccessIndicator) setTimeout(() => $wire.showSuccessIndicator = false, 3000)"
    class="flex justify-end pt-4"
>
    <div class="flex items-center gap-2 text-sm font-medium text-green-500">
        Campaña creada satisfactoriamente

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div>
</div>
        </div>
    </div>
</div>