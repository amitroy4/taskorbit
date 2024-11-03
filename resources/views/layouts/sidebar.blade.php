<div class="sidebar sidebar-style-2">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="index.html" class="logo">
                <img src="{{asset('admin')}}/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20">
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>

        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper">
        <div class="sidebar-content">
            <!--User Profile-->
            <div class="profile-section">
                <div class="user-profile d-flex flex-column align-items-center text-center py-4">
                    <div class="avatar avatar-xl mb-3">
                        <img src="{{asset('admin')}}/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-minimize avatar-md mb-3 d-none">
                        <img src="{{asset('admin')}}/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <span class="user-name fw-bold mb-1">{{ Auth::user()->name }}</span>
                    <span class="user-level op-7">Director</span>
                </div>
                <div class="row menubars border-top border-bottom text-center no-gutters px-4">
                    <div class="col-4 border-right">
                        <a href="#" class="menubar p-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Notifications"><i class="fa fa-bell"></i></a>
                    </div>
                    <div class="col-4 border-right">
                        <a href="#" class="menubar p-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <div class="col-4">
                        <a href="#" class="menubar p-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Email"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <!--User Profile-->
            <div class="nav-sidebar-scroll scrollbar scrollbar-inner">
                <ul class="nav nav-primary">
                    <!--Main Sidebar Menue-->
                    <li class="nav-item active">
                        <a href="{{route('dashboard')}}">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                            <span class="caret"></span>
                        </a>
                    </li>
                    <!--Client Menue-->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#client-nav">
                            <i class="far fa-envelope"></i>
                            <p>Clients</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="client-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{route('client.create')}}">
                                        <span class="sub-item">Add Client</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('client.index')}}">
                                        <span class="sub-item">Clients List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Domain and Hosting Menue-->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#domain-nav">
                            <i class="far fa-envelope"></i>
                            <p>Domain and Hosting</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="domain-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Domain</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Hosting</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--To-Do Menue-->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#project-nav">
                            <i class="far fa-envelope"></i>
                            <p>Project</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="project-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#">
                                        <span class="sub-item">p1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">p2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">p3</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--To-Do Menue-->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#selling-nav">
                            <i class="far fa-envelope"></i>
                            <p>Selling</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="selling-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="email-inbox.html">
                                        <span class="sub-item">Company Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-compose.html">
                                        <span class="sub-item">Company Documents</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-detail.html">
                                        <span class="sub-item">Hosting Package</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Meeting Schedule Menue-->
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#user-nav">
                            <i class="far fa-paper-plane"></i>
                            <p>User Role</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="user-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="messages.html">
                                        <span class="sub-item">Create User</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="conversations.html">
                                        <span class="sub-item">Role</span>
                                    </a>
                                </li><li>
                                    <a href="conversations.html">
                                        <span class="sub-item">Permission</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
