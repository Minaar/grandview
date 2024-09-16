<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
    <!-- BEGIN: Head-->
    <head>
        @include('layouts.partials.head')
    </head>
    <!-- END: Head-->

    <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
        <!-- BEGIN: Header-->
        @include('layouts.partials.header')
        <!-- END: Header-->

        <!-- BEGIN: SideNav-->
        @include('layouts.partials.sidenav')
        <!-- END: SideNav-->

        <!-- BEGIN: Page Main-->
        <div id="main">
            <div class="row">
              
                <div class="col s12">
                    <div class="container">
                        <div class="section">
                            @yield('content')
                        </div>
                    </div>
                    <div class="content-overlay"></div>
                </div>
            </div>
        </div>
        <!-- END: Page Main-->

        <!-- BEGIN: Footer-->
        @include('layouts.partials.footer')

        <!-- END: Footer-->
        @include('layouts.partials.scripts')
    </body>
</html>
