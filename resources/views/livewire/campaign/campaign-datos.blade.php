<div class="">
    <div class="h-full p-1 mx-2">
        <h1 class="text-2xl font-semibold text-gray-900">Datos importados en la Campaña: {{$campaign->name}} del cliente {{$campaign->entidad->entidad}}</h1>
        <div class="py-1 space-y-4">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-max">
                    <div class="flex w-full py-0.5 pl-2 text-xs text-gray-500 bg-blue-100 rounded-t-md">
                        <div class="w-1/12 pl-2 font-light " ><x-label>{{ __('Fila') }}</x-label> </div>
                        <div class="w-1/12 pl-2 font-light " ><x-label>{{ __('Cod') }}</x-label></div>
                        <div class="w-2/12 pl-2 font-light " ><x-label>{{ __('Store') }}</x-label></div>
                        <div class="w-2/12 pl-2 font-light " ><x-label>{{ __('Canal') }}</x-label></div>
                        <div class="w-2/12 pl-2 font-light " ><x-label>{{ __('Dirección') }}</x-label></div>
                        <div class="w-2/12 pl-2 font-light " ><x-label>{{ __('Población') }}</x-label></div>
                        <div class="w-1/12 pl-2 font-light " ><x-label>{{ __('C.P.') }}</x-label></div>
                        <div class="w-2/12 pl-2 font-light " ><x-label>{{ __('Provincia') }}</x-label></div>
                        <div class="w-2/12 pl-2 font-light " ><x-label>{{ __('Tfno.') }}</x-label></div>
                        <div class="w-1/12 pl-2 font-light " ><x-label>{{ __('Idioma') }}</x-label></div>
                        @for ($i=1; $i< $campaign->numcolumnas-8;$i++)
                            <div class="w-1/12 pl-2 font-light" ><x-label>{{ __('Campo').$i }}</x-label></div>
                        @endfor
                    </div>
                    @forelse ($datos as $dato)
                    <div class="flex items-center py-0.5 w-full text-xs text-gray-500 border-t-0 border-y hover:bg-gray-100" wire:loading.class.delay="opacity-50" >
                        <div class="w-1/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->id }}" /></div>
                        <div class="w-1/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->cod }}" /></div>
                        <div class="w-2/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->store }}" /></div>
                        <div class="w-2/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->canal }}" /></div>
                        <div class="w-2/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->direccion }}" /></div>
                        <div class="w-2/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->poblacion }}" /></div>
                        <div class="w-1/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->cp }}" /></div>
                        <div class="w-2/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->provincia }}" /></div>
                        <div class="w-2/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->telefono }}" /></div>
                        <div class="w-1/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->idioma }}" /></div>
                        @for ($i=1; $i< $campaign->numcolumnas-8;$i++)
                            @php
                                $c='campo'.$i;
                            @endphp
                            <div class="w-1/12 pl-2 font-light whitespace-nowrap" ><x-inputbluetransparent type="text" class="text-xs py-0.5" value="{{ $dato->$c }}" /><x-label></x-label></div>
                        @endfor
                    </div>
                    @empty
                    <div colspan="10">
                        <div class="flex items-center justify-center">
                            <x-icon.inbox class="w-8 h-8 text-gray-300"/>
                            <span class="py-5 text-xl font-medium text-gray-500">
                                No se han encontrado datos...
                            </span>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
                <!-- Controles de paginación -->
            <div class="mt-4">
                {{ $datos->links() }}
            </div>
            <div class="m-3">
                <x-secondary-button  onclick="location.href = '{{ route('import.index',$campaign) }}'">{{ __('Volver') }}</x-secondary-button>
            </div>
        </div>
    </div>
</div>