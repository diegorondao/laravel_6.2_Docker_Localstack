{{ Form::open(['url' => route('produto-delete'), 'id' => '1']) }}
<div class="table-responsive ">
    <table class=" table table-hover table datatable">
        <thead>
            <tr>
            <th class="no-sort table-btn" style="min-width: 200px;">
                <div class="checkbox-nice">
                    <input type="checkbox" name="checkbox-all" id="checkbox-all" data-function="check-all" data-target=".check">
                    <label for="checkbox-all"></label>
                </div>
            </th>
            <th class="order" style="max-width: 50px;">N°</th>
            <th style="min-width: 100px;">HOMOLOG 01</th>
            <th style="min-width: 100px;">HOMOLOG 02</th>
            <th style="min-width: 100px;">HOMOLOG 03</th>
            <th style="min-width: 100px;">HOMOLOG 04</th>
            <th style="min-width: 100px;">HOMOLOG 05</th>
        </tr>
        </thead>

        <tbody>
            <tr>
                <td class="col-xs-2">
                    <div class="checkbox-nice checkbox-inline">
                        <input type="checkbox" name="id[]" id="id-1" class="check" value="">
                        <label for="id-1"></label>
                    </div>
                    <a href="#" class="table-link visualizar" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{ __('messages.titulo_visualizar') }}" data-url="#">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    
                    <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_editar')}}">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>

                        <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_abrir_formulario_relacionado')}}">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-copy fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                </td>
                <td>001</td>
                <td> N/A </td>
                <td>TEST </td>
                <td>20/02/2020</td>
                <td>n/a</td>
                <td>Diego Homolog</td>
            </tr>
            <tr>
                <td class="col-xs-2">
                    <a onclick="return false;">
                        <span class="fa-stack">
                            <i class="fa fa-ban fa-stack-2x"></i>
                        </span>
                    </a>
                    
                    <a href="#" class="table-link visualizar" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{ __('messages.titulo_visualizar') }}" data-url="#">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    

                    <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_editar')}}">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>

                        <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_abrir_formulario_relacionado')}}">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-copy fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                </td>
                <td>001</td>
                <td> N/A </td>
                <td>TEST </td>
                <td>20/02/2020</td>
                <td>n/a</td>
                <td>Diego Homolog</td>
            </tr>
            <tr>
                <td class="col-xs-2">
                    <div class="checkbox-nice checkbox-inline">
                        <input type="checkbox" name="id[]" id="id-1" class="check" value="">
                        <label for="id-1"></label>
                    </div>
                    <a href="#" class="table-link visualizar" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{ __('messages.titulo_visualizar') }}" data-url="#">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    

                    <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_editar')}}">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>

                        <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_abrir_formulario_relacionado')}}">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-copy fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                </td>
                <td>001</td>
                <td> N/A </td>
                <td>TEST </td>
                <td>20/02/2020</td>
                <td>n/a</td>
                <td>Diego Homolog</td>
            </tr>
            <tr>
                <td class="col-xs-2">
                    <div class="checkbox-nice checkbox-inline">
                        <input type="checkbox" name="id[]" id="id-1" class="check" value="">
                        <label for="id-1"></label>
                    </div>
                    <a href="#" class="table-link visualizar" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{ __('messages.titulo_visualizar') }}" data-url="#">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    

                    <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_editar')}}">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>

                        <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_abrir_formulario_relacionado')}}">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-copy fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                </td>
                <td>001</td>
                <td> N/A </td>
                <td>TEST </td>
                <td>20/02/2020</td>
                <td>n/a</td>
                <td>Diego Homolog</td>
            </tr>
            <tr>
                <td class="col-xs-2">
                    <div class="checkbox-nice checkbox-inline">
                        <input type="checkbox" name="id[]" id="id-1" class="check" value="">
                        <label for="id-1"></label>
                    </div>
                    <a href="#" class="table-link visualizar" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{ __('messages.titulo_visualizar') }}" data-url="#">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    

                    <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_editar')}}">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>

                        <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_abrir_formulario_relacionado')}}">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-copy fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                </td>
                <td>001</td>
                <td> N/A </td>
                <td>TEST </td>
                <td>20/02/2020</td>
                <td>n/a</td>
                <td>Diego Homolog</td>
            </tr>
            <tr>
                <td class="col-xs-2">
                    <div class="checkbox-nice checkbox-inline">
                        <input type="checkbox" name="id[]" id="id-1" class="check" value="">
                        <label for="id-1"></label>
                    </div>
                    <a href="#" class="table-link visualizar" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{ __('messages.titulo_visualizar') }}" data-url="#">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    

                    <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_editar')}}">
                        <span class="fa-stack">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>

                        <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('messages.titulo_abrir_formulario_relacionado')}}">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-copy fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                </td>
                <td>001</td>
                <td> N/A </td>
                <td>TEST </td>
                <td>20/02/2020</td>
                <td>n/a</td>
                <td>Diego Homolog</td>
            </tr>
        </tbody>
    </table>
</div>
{{ Form::close() }}