@inject('sidebar', 'App\Helpers\Sidebar')

<div id="nav-col">
    <section id="col-left" class="col-left-nano">
        <div id="col-left-inner" class="col-left-nano-content">
            <div id="user-left-box" class="clearfix d-none d-lg-block profile2-dropdown">
                <img alt="" src="{{ url('cube/img/samples/profile-default.jpg') }}" />
                <div class="user-box">
                    <span class="dropdown name">
                        <a href="#" class="dropdown-nocaret dropdown-toggle" data-toggle="dropdown">
                            {{ $userAuthenticated->getNickname() }}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="item"><a href="{{ route('user-profile') }}"><i class="fa fa-user"></i>Profile</a></li>                            
                        </ul>
                    </span>
                    <span class="status">
                        <i class="fa fa-circle"></i> {{ $userAuthenticated->getStatus()->getSiteStatus()}}
                    </span>
                    <span class="status">
                        <i class="fa fa-phone"></i> ({{ $userAuthenticated->getPhone()->getAreaCode()}}) {{ $userAuthenticated->getPhone()->getNumber()}}
                    </span>
                </div>
            </div>
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav"> 
                    <ul class="nav navbar-nav nav-pills nav-stacked">
                        <li class="nav-header nav-header-first d-none d-lg-block">
                            Navigation
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                                <span class="badge badge-primary badge-circle float-right">28</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-file-text-o"></i>
                                <span>Anúncios</span>
                            </a>
                        </li>
                        <li >
                            <a href="#" class="dropdown-toggle dropdown-nocaret">
                                <i class="fa fa-envelope"></i>
                                <span>Email</span>
                                <i class="fa fa-angle-right drop-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="email-inbox.html" >
                                        Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="email-detail.html" >
                                        Detail
                                    </a>
                                </li>
                                <li>
                                    <a href="email-compose.html" >
                                        Compose
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="#" class="dropdown-toggle dropdown-nocaret">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Graphs</span>
                                <i class="fa fa-angle-right drop-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="graphs-morris.html" >
                                        Morris &amp; Mixed
                                    </a>
                                </li>
                                <li>
                                    <a href="graphs-flot.html" >
                                        Flot
                                    </a>
                                </li>
                                <li>
                                    <a href="graphs-dygraphs.html" >
                                        Dygraphs
                                    </a>
                                </li>
                                <li>
                                    <a href="graphs-xcharts.html" >
                                        xCharts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="widgets.html">
                                <i class="fa fa-th-large"></i>
                                <span>Widgets</span>
                                <span class="badge badge-success float-right">New</span>
                            </a>
                        </li>
                        <li >
                            <a href="#" class="dropdown-toggle dropdown-nocaret">
                                <i class="fa fa-copy"></i>
                                <span>Pages</span>
                                <i class="fa fa-angle-right drop-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="calendar.html" >
                                        Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.html" >
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery-v2.html" >
                                        Gallery v2
                                    </a>
                                </li>
                                <li>
                                    <a href="pricing.html" >
                                        Pricing
                                    </a>
                                </li>
                                <li>
                                    <a href="projects.html" >
                                        Projects
                                    </a>
                                </li>
                                <li>
                                    <a href="team-members.html" >
                                        Team Members
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline.html" >
                                        Timeline
                                    </a>
                                </li>
                                <li>
                                    <a href="timeline-grid.html" >
                                        Timeline Grid
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html" >
                                        User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="search.html" >
                                        Search Results
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html" >
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="intro.html" >
                                        Tour Layout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header d-none d-lg-block">
                            Components
                        </li>
                        <li >
                            <a href="#" class="dropdown-toggle dropdown-nocaret">
                                <i class="fa fa-edit"></i>
                                <span>Forms</span>
                                <i class="fa fa-angle-right drop-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="form-elements.html" >
                                        Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="x-editable.html" >
                                        X-Editable
                                    </a>
                                </li>
                                <li>
                                    <a href="form-wizard.html" >
                                        Wizard
                                    </a>
                                </li>
                                <li>
                                    <a href="form-wysiwyg.html" >
                                        WYSIWYG
                                    </a>
                                </li>
                                <li>
                                    <a href="form-summernote.html" >
                                        WYSIWYG Summernote
                                    </a>
                                </li>
                                <li>
                                    <a href="form-ckeditor.html" >
                                        WYSIWYG CKEditor
                                    </a>
                                </li>
                                <li>
                                    <a href="form-dropzone.html" >
                                        Multiple File Upload
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="#" class="dropdown-toggle dropdown-nocaret">
                                <i class="fa fa-desktop"></i>
                                <span>UI Kit</span>
                                <i class="fa fa-angle-right drop-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="ui-elements.html" >
                                        Elements
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-sliders.html" >
                                        Sliders
                                    </a>
                                </li>
                                <li>
                                    <a href="notifications.html" >
                                        Notifications &amp; Alerts
                                    </a>
                                </li>
                                <li>
                                    <a href="modals.html" >
                                        Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="video.html" >
                                        Video
                                    </a>
                                </li>
                                <li >
                                    <a href="#" class="dropdown-toggle dropdown-nocaret">
                                        Icons
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="icons-awesome.html" >
                                                Awesome Icons
                                            </a>
                                        </li>
                                        <li>
                                            <a href="icons-halflings.html" >
                                                Halflings Icons
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="ui-nestable.html" >
                                        Nestable List
                                    </a>
                                </li>
                                <li>
                                    <a href="typography.html" >
                                        Typography
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-toggle dropdown-nocaret">
                                        3 Level Menu
                                        <i class="fa fa-angle-right drop-icon"></i>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="#">
                                                3rd Level
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                3rd Level
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                3rd Level
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li >
                            <a href="maps.html">
                                <i class="fa fa-map-marker"></i>
                                <span>Google Maps</span>
                                <span class="badge badge-danger float-right">Updated</span>
                            </a>
                        </li>
                        <li >
                            <a href="#" class="dropdown-toggle dropdown-nocaret">
                                <i class="fa fa-file-text-o"></i>
                                <span>Extra pages</span>
                                <i class="fa fa-angle-right drop-icon"></i>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="faq.html" >
                                        FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="emails.html" >
                                        Email Templates
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html" >
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="login-full.html" >
                                        Login Full
                                    </a>
                                </li>
                                <li>
                                    <a href="registration.html" >
                                        Registration
                                    </a>
                                </li>
                                <li>
                                    <a href="registration-full.html" >
                                        Registration Full
                                    </a>
                                </li>
                                <li>
                                    <a href="forgot-password.html" >
                                        Forgot Password
                                    </a>
                                </li>
                                <li>
                                    <a href="forgot-password-full.html" >
                                        Forgot Password Full
                                    </a>
                                </li>
                                <li>
                                    <a href="lock-screen.html" >
                                        Lock Screen
                                    </a>
                                </li>
                                <li>
                                    <a href="lock-screen-full.html" >
                                        Lock Screen Full
                                    </a>
                                </li>
                                <li>
                                    <a href="error-404.html" >
                                        Error 404
                                    </a>
                                </li>
                                <li>
                                    <a href="error-404-v2.html" >
                                        Error 404 Nested
                                    </a>
                                </li>
                                <li>
                                    <a href="error-500.html" >
                                        Error 500
                                    </a>
                                </li>
                                <li>
                                    <a href="extra-grid.html" >
                                        Grid
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div id="nav-col-submenu"></div>
</div>