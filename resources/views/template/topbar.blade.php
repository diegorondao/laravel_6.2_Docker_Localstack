<header class="navbar" id="header-navbar">

    <div class="container">
        <button type="button" class="navbar-toggle pull-left" id="show-sidebar">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>

        <a href="{{ route('dashboard-index') }}" id="logo" class="navbar-brand">
            <img src="{{ url('cube/img/logo.png') }}" alt="" class="normal-logo logo-white" style="margin: 3px auto;padding-right: 4px;height: 25px;"/>
            <img src="{{ url('cube/img/logo.png') }}" alt="" class="normal-logo logo-black"/>
            <img src="{{ url('cube/img/logo-small.png') }}" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
        </a>

        <div class="clearfix">
            <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">    
                <ul class="nav navbar-nav pull-left">
                    <li>
                        <a class="btn" id="make-small-nav">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="nav-no-collapse pull-right " id="header-nav">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a class="btn" target="_blank" href="#">
                            <i class="fa fa-life-ring"></i>
                            Suporte
                        </a>
                    </li>
                    <li class="hidden-xxs">
                        <a class="btn" href="{{route('store-index')}}">
                            <i class="fa fa-power-off"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>