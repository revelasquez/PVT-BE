<div class="ibox">
    <div class="ibox-title">
        <h5>Aportes Activo</h5>
        <div class="ibox-tools">
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            {{-- <a class="fullscreen-link" data-toggle="tooltip" data-placement="bottom" title="Pantalla completa"><i class="fa fa-expand"></i></a> --}}
        </div>
    </div>
    <div class="ibox-content table-responsive">
        <div class="text-right">
            <a href="{{route('show_contribution', $affiliate->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Detalle de Aportes"><i class="fa fa-eye"></i> Ver </a>
            <a href="{{route('edit_contribution', $affiliate->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edici&oacute;n de aportes"><i class="fa fa-key"></i> Editar </a>
            <a href="{{route('direct_contribution', $affiliate->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Aportes Directos"><i class="fa fa-pencil"></i> Aporte Directo </a>            
        </div>
        <br>
        <table class="table table-striped-1 table-bordered table-hover size-13">
            <thead>
                <tr>
                    <th>A&ntilde;o</th>
                    <th>Enero</th>
                    <th>Febrero</th>
                    <th>Marzo</th>
                    <th>Abril</th>
                    <th>Mayo</th>
                    <th>Junio</th>
                    <th>Julio</th>
                    <th>Agosto</th>
                    <th>Septiembre</th>
                    <th>Octubre</th>
                    <th>Noviembre</th>
                    <th>Diciembre</th>                                
                </tr>
            </thead>
            <tbody>                            
                @while($year_start>=$year_end)
                    <tr>
                        <th>{{  $year_start   }}</th>
                        @for($i=1;$i<=12;$i++)
                            @php
                            $month = $i<10?'0'.$i:$i;
                            @endphp
                            <th class="numberformat"> {{ $contributions[$year_start.'-'.$month.'-01']??0 }} </th>
                        @endfor

                        @php
                        $year_start--;
                        @endphp
                    </tr>                                                   
                @endwhile
            </tbody>
        </table>
    </div>    
</div>