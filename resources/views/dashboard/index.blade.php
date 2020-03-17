@extends('template.bootstrap')
@section('content')
    {{-- CAMINHO --}}
    <div id="content-header">
        <ol class="breadcrumb">
            <li>Dashboard</li>
        </ol>
    </div>

     @include('template.notification')
    <!--  Filtro -->
    <h1>Olá {{ $userAuthenticated->getFirstName()}} {{$userAuthenticated->getLastName()}} </h1>
    {{-- @include('dashboard.index_filtros') --}}

@endsection
