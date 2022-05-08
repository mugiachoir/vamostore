@extends('admin.master')
@section('content')
    <div class="wrapper">

        <header class="main-header">
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top pl-30">
                <!-- Sidebar toggle button-->
                <div>
                    <ul class="nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" data-toggle="push-menu"
                                role="button">
                                <i class="nav-link-icon mdi mdi-menu"></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="#" data-provide="fullscreen"
                                class="waves-effect waves-light nav-link rounded svg-bt-icon" title="Full Screen">
                                <i class="nav-link-icon mdi mdi-crop-free"></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="#" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                                <i class="ti-check-box"></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="calendar.html" class="waves-effect waves-light nav-link rounded svg-bt-icon" title="">
                                <i class="ti-calendar"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <!-- full Screen -->
                        <li class="search-bar">
                            <div class="lookup lookup-circle lookup-right">
                                <input type="text" name="s">
                            </div>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light rounded dropdown-toggle" data-toggle="dropdown"
                                title="Notifications">
                                <i class="ti-bell"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit
                                                blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien
                                                elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor
                                                commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum
                                                fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam
                                                interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown"
                                title="User">
                                <img src="{{ asset('admin-theme/images/avatar/1.jpg') }}" alt="">
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My
                                        Wallet</a>
                                    <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i>
                                        Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
                                <i class="ti-settings"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar">

                <div class="user-profile">
                    <div class="ulogo">
                        <a href="index.html">
                            <!-- logo for regular state and mobile devices -->
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('admin-theme/images/logo-dark.png') }}" alt="">
                                <h3><b>Sunny</b> Admin</h3>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">

                    <li>
                        <a href="index.html">
                            <i data-feather="pie-chart"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="message-circle"></i>
                            <span>Application</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="chat.html"><i class="ti-more"></i>Chat</a></li>
                            <li><a href="calendar.html"><i class="ti-more"></i>Calendar</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="mail"></i> <span>Mailbox</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
                            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
                            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="file"></i>
                            <span>Pages</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="profile.html"><i class="ti-more"></i>Profile</a></li>
                            <li><a href="invoice.html"><i class="ti-more"></i>Invoice</a></li>
                            <li><a href="gallery.html"><i class="ti-more"></i>Gallery</a></li>
                            <li><a href="faq.html"><i class="ti-more"></i>FAQs</a></li>
                            <li><a href="timeline.html"><i class="ti-more"></i>Timeline</a></li>
                        </ul>
                    </li>

                    <li class="header nav-small-cap">User Interface</li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="grid"></i>
                            <span>Components</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
                            <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
                            <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
                            <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
                            <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
                            <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
                            <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
                            <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="credit-card"></i>
                            <span>Cards</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="card_advanced.html"><i class="ti-more"></i>Advanced Cards</a></li>
                            <li><a href="card_basic.html"><i class="ti-more"></i>Basic Cards</a></li>
                            <li><a href="card_color.html"><i class="ti-more"></i>Cards Color</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="hard-drive"></i>
                            <span>Content</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="content_typography.html"><i class="ti-more"></i>Typography</a></li>
                            <li><a href="content_media.html"><i class="ti-more"></i>Media</a></li>
                            <li><a href="content_grid.html"><i class="ti-more"></i>Grid</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="package"></i>
                            <span>Utilities</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="utilities_border.html"><i class="ti-more"></i>Border</a></li>
                            <li><a href="utilities_color.html"><i class="ti-more"></i>Color</a></li>
                            <li><a href="utilities_ribbons.html"><i class="ti-more"></i>Ribbons</a></li>
                            <li><a href="utilities_tab.html"><i class="ti-more"></i>Tabs</a></li>
                            <li><a href="utilities_animations.html"><i class="ti-more"></i>Animation</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="edit-2"></i>
                            <span>Icons</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="icons_fontawesome.html"><i class="ti-more"></i>Font Awesome</a></li>
                            <li><a href="icons_glyphicons.html"><i class="ti-more"></i>Glyphicons</a></li>
                            <li><a href="icons_material.html"><i class="ti-more"></i>Material Icons</a></li>
                            <li><a href="icons_themify.html"><i class="ti-more"></i>Themify Icons</a></li>
                            <li><a href="icons_simpleline.html"><i class="ti-more"></i>Simple Line Icons</a></li>
                            <li><a href="icons_cryptocoins.html"><i class="ti-more"></i>Cryptocoins Icons</a></li>
                            <li><a href="icons_flag.html"><i class="ti-more"></i>Flag Icons</a></li>
                            <li><a href="icons_weather.html"><i class="ti-more"></i>Weather Icons</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="inbox"></i>
                            <span>Forms</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="forms_advanced.html"><i class="ti-more"></i>Advanced Elements</a></li>
                            <li><a href="forms_editors.html"><i class="ti-more"></i>Editors</a></li>
                            <li><a href="forms_code_editor.html"><i class="ti-more"></i>Code Editor</a></li>
                            <li><a href="forms_validation.html"><i class="ti-more"></i>Form Validation</a></li>
                            <li><a href="forms_wizard.html"><i class="ti-more"></i>Form Wizard</a></li>
                            <li><a href="forms_general.html"><i class="ti-more"></i>General Elements</a></li>
                            <li><a href="forms_dropzone.html"><i class="ti-more"></i>Dropzone</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="server"></i>
                            <span>Tables</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="tables_simple.html"><i class="ti-more"></i>Simple tables</a></li>
                            <li><a href="tables_data.html"><i class="ti-more"></i>Data tables</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="pie-chart"></i>
                            <span>Charts</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="charts_chartjs.html"><i class="ti-more"></i>ChartJS</a></li>
                            <li><a href="charts_flot.html"><i class="ti-more"></i>Flot</a></li>
                            <li><a href="charts_inline.html"><i class="ti-more"></i>Inline</a></li>
                            <li><a href="charts_morris.html"><i class="ti-more"></i>Morris</a></li>
                            <li><a href="charts_peity.html"><i class="ti-more"></i>Peity</a></li>
                            <li><a href="charts_chartist.html"><i class="ti-more"></i>Chartist</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="map"></i>
                            <span>Map</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="map_google.html"><i class="ti-more"></i>Google Map</a></li>
                            <li><a href="map_vector.html"><i class="ti-more"></i>Vector Map</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="alert-triangle"></i>
                            <span>Authentication</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
                            <li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
                            <li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
                            <li><a href="auth_user_pass.html"><i class="ti-more"></i>Password</a></li>
                            <li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
                            <li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>
                        </ul>
                    </li>

                    <li class="header nav-small-cap">EXTRA</li>

                    <li class="treeview">
                        <a href="#">
                            <i data-feather="layers"></i>
                            <span>Multilevel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Level One</a></li>
                            <li class="treeview">
                                <a href="#">Level One
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level Two</a></li>
                                    <li class="treeview">
                                        <a href="#">Level Two
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="#">Level Three</a></li>
                                            <li><a href="#">Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Level One</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="auth_login.html">
                            <i data-feather="lock"></i>
                            <span>Log Out</span>
                        </a>
                    </li>

                </ul>
            </section>

            <div class="sidebar-footer">
                <!-- item-->
                <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
                    data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title=""
                    data-original-title="Email"><i class="ti-email"></i></a>
                <!-- item-->
                <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
                    data-original-title="Logout"><i class="ti-lock"></i></a>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xl-2 col-6">
                            <div class="box overflow-hidden pull-up">
                                <div class="box-body">
                                    <div class="icon bg-primary-light rounded w-60 h-60">
                                        <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                    </div>
                                    <div>
                                        <p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
                                        <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                                    class="fa fa-caret-up"></i> +2.5%</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-6">
                            <div class="box overflow-hidden pull-up">
                                <div class="box-body">
                                    <div class="icon bg-warning-light rounded w-60 h-60">
                                        <i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
                                    </div>
                                    <div>
                                        <p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p>
                                        <h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i
                                                    class="fa fa-caret-up"></i> +2.5%</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-6">
                            <div class="box overflow-hidden pull-up">
                                <div class="box-body">
                                    <div class="icon bg-info-light rounded w-60 h-60">
                                        <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                                    </div>
                                    <div>
                                        <p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
                                        <h3 class="text-white mb-0 font-weight-500">$1,250 <small
                                                class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-6">
                            <div class="box overflow-hidden pull-up">
                                <div class="box-body">
                                    <div class="icon bg-danger-light rounded w-60 h-60">
                                        <i class="text-danger mr-0 font-size-24 mdi mdi-phone-incoming"></i>
                                    </div>
                                    <div>
                                        <p class="text-mute mt-20 mb-0 font-size-16">Inbound Call</p>
                                        <h3 class="text-white mb-0 font-weight-500">1,460 <small class="text-danger"><i
                                                    class="fa fa-caret-up"></i> -1.5%</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-6">
                            <div class="box overflow-hidden pull-up">
                                <div class="box-body">
                                    <div class="icon bg-success-light rounded w-60 h-60">
                                        <i class="text-success mr-0 font-size-24 mdi mdi-phone-outgoing"></i>
                                    </div>
                                    <div>
                                        <p class="text-mute mt-20 mb-0 font-size-16">Outbound Call</p>
                                        <h3 class="text-white mb-0 font-weight-500">1,700 <small class="text-success"><i
                                                    class="fa fa-caret-up"></i> +0.5%</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-6">
                            <div class="box overflow-hidden pull-up">
                                <div class="box-body">
                                    <div class="icon bg-light rounded w-60 h-60">
                                        <i class="text-white mr-0 font-size-24 mdi mdi-chart-line"></i>
                                    </div>
                                    <div>
                                        <p class="text-mute mt-20 mb-0 font-size-16">Total Revune</p>
                                        <h3 class="text-white mb-0 font-weight-500">$4,500k <small
                                                class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">
                                        Earning Summary
                                    </h4>
                                </div>
                                <div class="box-body py-0">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="box no-shadow mb-0">
                                                <div class="box-body px-0">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div>
                                                            <div id="chart41"></div>
                                                        </div>
                                                        <div>
                                                            <h5>Top Order</h5>
                                                            <h4 class="text-white my-0 font-weight-500">$39k</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="box no-shadow mb-0">
                                                <div class="box-body px-0">
                                                    <div class="d-flex justify-content-start align-items-center">
                                                        <div>
                                                            <div id="chart42"></div>
                                                        </div>
                                                        <div>
                                                            <h5>Average Order</h5>
                                                            <h4 class="text-white my-0 font-weight-500">$24k</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="charts_widget_43_chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <div class="box bg-info bg-img"
                                style="background-image: url({{ asset('admin-theme/images/bg-1.png') }})">
                                <div class="box-body text-center">
                                    <img src="{{ asset('admin-theme/images/trophy.png') }}" class="mt-50"
                                        alt="" />
                                    <div class="max-w-500 mx-auto">
                                        <h2 class="text-white mb-20 font-weight-500">Best Employee Johen,</h2>
                                        <p class="text-white-50 mb-10 font-size-20">You've got 50.5% more sales today.
                                            You've reached 8th milestone, checkout author section</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body pb-0">
                                            <div>
                                                <h2 class="text-white mb-0 font-weight-500">18.8k</h2>
                                                <p class="text-mute mb-0 font-size-20">Total users</p>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div id="revenue1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="box overflow-hidden">
                                        <div class="box-body pb-0">
                                            <div>
                                                <h2 class="text-white mb-0 font-weight-500">35.8k</h2>
                                                <p class="text-mute mb-0 font-size-20">Average reach per post</p>
                                            </div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div id="revenue2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxxl-5 col-xl-6 col-12">
                            <div class="box overflow-hidden">
                                <div class="box-body p-0">
                                    <div class="row no-gutters">
                                        <div class="col-md-6 col-12">
                                            <div class="box no-shadow mb-0 rounded-0">
                                                <div class="box-header no-border">
                                                    <h4 class="box-title mb-0">
                                                        Last Posts
                                                    </h4>
                                                </div>
                                                <div class="box-body p-0">
                                                    <div class="media-list media-list-hover">
                                                        <a class="media media-single hover-white" href="#">
                                                            <div class="media-body">
                                                                <h5>Meet Craftwork. Thoroghly Handpicked UI Freebies</h5>
                                                            </div>
                                                        </a>
                                                        <a class="media media-single hover-white" href="#">
                                                            <div class="media-body">
                                                                <h5>Cook Design Right!</h5>
                                                            </div>
                                                        </a>
                                                        <a class="media media-single hover-white" href="#">
                                                            <div class="media-body">
                                                                <h5>5 Reasons to Start Own Bussines</h5>
                                                            </div>
                                                        </a>
                                                        <a class="media media-single hover-white" href="#">
                                                            <div class="media-body">
                                                                <h5>How to Make Interface</h5>
                                                            </div>
                                                        </a>
                                                        <a class="media media-single hover-white" href="#">
                                                            <div class="media-body">
                                                                <h5>Show Me Your Design</h5>
                                                            </div>
                                                        </a>
                                                        <a class="media media-single hover-white" href="#">
                                                            <div class="media-body">
                                                                <h5>She gave my mother such a turn, that I have always
                                                                    bee...</h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="box no-shadow mb-0 bg-img rounded-0" data-overlay="5"
                                                style="background-image: url({{ asset('admin-theme/images/gallery/landscape7.jpg') }}../)">
                                                <div class="box-header no-border">
                                                    <h4 class="box-title mb-0">
                                                        <span class="avatar avatar-lg bg-success">DK</span>
                                                    </h4>
                                                    <ul class="box-controls">
                                                        <li><a href="javascript:void(0)"><i
                                                                    class="ti-reload text-white"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="box-body">
                                                    <div class="text-right mt-100 pt-20">
                                                        <h3 class="text-white"><small class="mr-10"><i
                                                                    class="fa fa-commenting"></i></small> 3</h3>
                                                        <h2 class="text-white"><small class="mr-10"><i
                                                                    class="fa fa-heart"></i></small> 23</h2>
                                                        <h1 class="text-white"><small class="mr-10"><i
                                                                    class="fa fa-eye"></i></small> 189</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxxl-7 col-xl-6 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Recent Stats</h4>
                                </div>
                                <div class="box-body">
                                    <div id="recent_trend"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title align-items-start flex-column">
                                        New Arrivals
                                        <small class="subtitle">More than 400+ new members</small>
                                    </h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <thead>
                                                <tr class="text-uppercase bg-lightest">
                                                    <th style="min-width: 250px"><span
                                                            class="text-white">products</span></th>
                                                    <th style="min-width: 100px"><span class="text-fade">pruce</span>
                                                    </th>
                                                    <th style="min-width: 100px"><span
                                                            class="text-fade">deposit</span></th>
                                                    <th style="min-width: 150px"><span class="text-fade">agent</span>
                                                    </th>
                                                    <th style="min-width: 130px"><span class="text-fade">status</span>
                                                    </th>
                                                    <th style="min-width: 120px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 mr-20">
                                                                <div class="bg-img h-50 w-50"
                                                                    style="background-image: url({{ asset('admin-theme/images/gallery/creative/img-1.jpg') }})">
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#"
                                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                                    consectetur</a>
                                                                <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                                    Aliquet</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Sophia
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            Pharetra
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-primary-light badge-lg">Approved</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-bookmark-plus"></span></a>
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-arrow-right"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 mr-20">
                                                                <div class="bg-img h-50 w-50"
                                                                    style="background-image: url({{ asset('admin-theme/images/gallery/creative/img-2.jpg') }})">
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#"
                                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                                    consectetur</a>
                                                                <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                                    Aliquet</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Sophia
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            Pharetra
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning-light badge-lg">In Progress</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-bookmark-plus"></span></a>
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-arrow-right"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 mr-20">
                                                                <div class="bg-img h-50 w-50"
                                                                    style="background-image: url({{ asset('admin-theme/images/gallery/creative/img-3.jpg') }})">
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#"
                                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                                    consectetur</a>
                                                                <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                                    Aliquet</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Sophia
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            Pharetra
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-light badge-lg">Success</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-bookmark-plus"></span></a>
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-arrow-right"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 mr-20">
                                                                <div class="bg-img h-50 w-50"
                                                                    style="background-image: url({{ asset('admin-theme/images/gallery/creative/img-4.jpg') }})">
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#"
                                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                                    consectetur</a>
                                                                <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                                    Aliquet</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Sophia
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            Pharetra
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger-light badge-lg">Rejected</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-bookmark-plus"></span></a>
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-arrow-right"></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 mr-20">
                                                                <div class="bg-img h-50 w-50"
                                                                    style="background-image: url({{ asset('admin-theme/images/gallery/creative/img-5.jpg') }})">
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#"
                                                                    class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus
                                                                    consectetur</a>
                                                                <span class="text-fade d-block">Pharetra, Nulla , Nec,
                                                                    Aliquet</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Paid
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            $45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade font-weight-600 d-block font-size-16">
                                                            Sophia
                                                        </span>
                                                        <span class="text-white font-weight-600 d-block font-size-16">
                                                            Pharetra
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning-light badge-lg">In Progress</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-bookmark-plus"></span></a>
                                                        <a href="#"
                                                            class="waves-effect waves-light btn btn-info btn-circle mx-5"><span
                                                                class="mdi mdi-arrow-right"></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase Now</a>
                    </li>
                </ul>
            </div>
            &copy; 2020 <a href="#">Psd to Html Expert</a>. All Rights Reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar">

            <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i
                        class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
            <!-- Create the tabs -->
            <ul class="nav nav-tabs control-sidebar-tabs">
                <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"
                        class="active">Chat</a></li>
                <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>
                        <p>Users</p>
                        <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                        <input type="text" name="s" placeholder="Search" class="w-p100">
                    </div>
                    <div class="media-list media-list-hover mt-20">
                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/1.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/2.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/3.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/4.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-success" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/1.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                                </p>
                                <p>Praesent tristique diam...</p>
                                <span>Just now</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-danger" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/2.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Luke</strong></a>
                                </p>
                                <p>Cras tempor diam ...</p>
                                <span>33 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-warning" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/3.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                        <div class="media py-10 px-0">
                            <a class="avatar avatar-lg status-primary" href="#">
                                <img src="{{ asset('admin-theme/images/avatar/4.jpg') }}" alt="...">
                            </a>
                            <div class="media-body">
                                <p class="font-size-16">
                                    <a class="hover-primary" href="#"><strong>Evan</strong></a>
                                </p>
                                <p>In posuere tortor vel...</p>
                                <span>42 min ago</span>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <div class="flexbox">
                        <a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>
                        <p>Todo List</p>
                        <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                    </div>
                    <ul class="todo-list mt-20">
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                            <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                            <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                            <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                            <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                            <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                            <span class="text-line">Maecenas scelerisque</span>
                            <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                            <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                            <span class="text-line">Vivamus nec orci</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                            <label for="basic_checkbox_7" class="mb-0 h-15"></label>
                            <!-- todo text -->
                            <span class="text-line">Nulla vitae purus</span>
                            <!-- Emphasis label -->
                            <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                            <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                            <span class="text-line">Phasellus interdum</span>
                            <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5 by-1">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                            <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                            <span class="text-line">Quisque sodales</span>
                            <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li class="py-15 px-5">
                            <!-- checkbox -->
                            <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                            <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                            <span class="text-line">Proin nec mi porta</span>
                            <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->
@endsection
