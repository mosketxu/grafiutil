<html>
    <head>
        <style>
            @page {
               margin: 10px 25px;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/pdf.css')}}">
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
        </header>
        <footer>
            {{now()}}
        </footer>
        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            @foreach($etiquetas as $campaignstore)
                <div class="">
                    <table width="100%" cellspacing="0">
                        <thead>
                            <tr style="background-color: #139cdc;">
                                <th style="text-align: right;" width="25%">
                                    <img src="{{asset('img/grafitexLogo.png')}}" width="50px"></th>
                                <th style="color:#ffffff;text-align:center;"  width="50%">
                                    Cliente: {{$campaign->entidad->entidad}} <br>
                                    Campaña: {{$campaign->name}}<br>
                                    Grafitex Servicios Digitales, S.A.
                                </th>
                                <th style="color:#ffffff;text-align:center;font-size:0.9em;"  width="25%">
                                    F.Prevista: {{$campaign->fechainicio}} <br>
                                    F.Tienda: {{$campaign->fechfin}}
                                    <br>
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <div class="etiquetas">
                        <table width="100%" cellspacing="0" border="1">
                            <thead>
                                <tr>
                                    <th width="100%">{{$campaignstore->cod}} {{$campaignstore->store}}</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                    <div class="">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th width="33%"></th>
                                    <th width="33%"></th>
                                    <th width="33%"></th>
                                    {{-- <th width="25%"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($campaignstore->campaignStoreElementos->chunk(3) as $chunk)
                                <tr>
                                    @foreach($chunk as $elemento)
                                        <td class="celda">
                                            @if($campaign->cabecera->bimagenelemento==true)
                                                <div class="">
                                                    <label for="file{{ $elemento->id }}" class="">
                                                    <div class="">
                                                        @if(file_exists( 'storage/galeria/'.$campaign->id.'/thumbnails/thumb-'.$elemento->campaignElemento->imagenelemento ))
                                                        <img height="100px" src="{{asset('storage/galeria/'.$campaign->id.'/thumbnails/thumb-'.$elemento->campaignElemento->imagenelemento.'?'.time())}}" alt={{$elemento->campaignElemento->imagenelemento}} title={{$elemento->campaignElemento->imagenelemento}}/>
                                                        @else
                                                        <img src="{{asset('storage/galeria/pordefecto.jpg')}}" alt={{$elemento->campaignElemento->imagenelemento}} title={{$elemento->campaignElemento->imagenelemento}}/>
                                                        @endif
                                                    </div>
                                                    </label>
                                                </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo0=='1')
                                                <div class="">
                                                    <span style="font-weight:bold">{{ $campaign->cabecera->campo0 }}:</span>
                                                    {{ $elemento->campaignElemento->imagen }} </br>
                                                </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo1==true)
                                            <div class="">
                                                <span style="font-weight:bold">{{ $campaign->cabecera->campo1 }}:</span>
                                                {{ $elemento->campaignElemento->campo1 }} </br>
                                            </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo2==true)
                                            <div class="">
                                                <span style="font-weight:bold">{{ $campaign->cabecera->campo2 }}:</span>
                                                {{ $elemento->campaignElemento->campo2 }} </br>
                                            </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo3==true)
                                                <div class="">
                                                    <span style="font-weight:bold">{{ $campaign->cabecera->campo3 }}:</span>
                                                    {{ $elemento->campaignElemento->campo3 }} </br>
                                                </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo4==true)
                                                <div class="">
                                                    <span style="font-weight:bold">{{ $campaign->cabecera->campo4 }}:</span>
                                                    {{ $elemento->campaignElemento->campo4 }} </br>
                                                </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo5==true)
                                            <div class="">
                                                    <span style="font-weight:bold">{{ $campaign->cabecera->campo5 }}:</span>
                                                    {{ $elemento->campaignElemento->campo5 }} </br>
                                                </div>
                                                @endif
                                                @if($campaign->cabecera->bcampo6==true)
                                                <div class="">
                                                    <span style="font-weight:bold">{{ $campaign->cabecera->campo6 }}:</span>
                                                    {{ $elemento->campaignElemento->categoria }} </br>
                                                </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo7==true)
                                            <div class="">
                                                <span style="font-weight:bold">{{ $campaign->cabecera->campo7 }}:</span>
                                                {{ $elemento->campaignElemento->archivo }} </br>
                                            </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo8==true)
                                            <div class="">
                                                <span style="font-weight:bold">{{ $campaign->cabecera->campo8 }}:</span>
                                                {{ $elemento->campaignElemento->material }} </br>
                                            </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo9==true)
                                                <div class="">
                                                    <span style="font-weight:bold">{{ $campaign->cabecera->campo9 }}:</span>
                                                    {{ $elemento->campaignElemento->medida }} </br>
                                                </div>
                                            @endif
                                            @if($campaign->cabecera->bcampo10==true)
                                            <div class="">
                                                <span style="font-weight:bold">{{ $campaign->cabecera->campo10 }}:</span>
                                                {{ $elemento->campaignElemento->idioma }} </br>
                                            </div>
                                            @endif
                                            @if($campaign->cabecera->bproducto==true)
                                            <div class="">
                                                <span style="font-weight:bold">{{ $campaign->cabecera->producto_id }}:</span>
                                                {{ $elemento->campaignElemento->producto_id }} </br>
                                            </div>
                                            @endif
                                            @if($campaign->cabecera->bpreciocoste==true)
                                            <div class="">
                                                <span style="font-weight:bold">{{ $campaign->cabecera->preciocoste_ud }}:</span>
                                                {{ $elemento->campaignElemento->preciocoste_ud }} </br>
                                            </div>
                                            @endif
                                            <div class="">
                                                <span style="font-weight:bold">Cantidad:</span>
                                                {{ $elemento->cantidad }}
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div style="page-break-after:always;"></div>
            @endforeach
        </main>
    </body>
</html>