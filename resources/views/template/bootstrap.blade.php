@extends('template.dashboard-master')

@section('content-master')

    <div id="theme-wrapper" class="theme-whbl">

        @include('template.topbar')

        <div id="page-wrapper" class="{{session()->get('sidebar')}}">  

            <div id="nav-col">
                <section id="col-left" class="col-left-nano">
                    <div id="col-left-inner" class="col-left-nano-content">
                        @include('template.sidebar')
                    </div>
                </section>
            </div>

            <div id="content-wrapper">
                @yield('content')
            </div>

        </div>

        <div class="modal fade" id="modal-loading" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modal-loadingLabel" aria-hidden="true">
            <div class="modal-dialog" style=" top:20%">
                <div class="modal-content" style="width: 0px; height: 0px; left:30%;">
                    <div class="modal-body">
                        <img src="{{ url('cube/img/spinner-loading.gif') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection