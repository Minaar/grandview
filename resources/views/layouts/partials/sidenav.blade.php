<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="index.html">
                <img class="hide-on-med-and-down" src="{{ asset('assets/images/logo/materialize-logo.png') }}" alt="materialize logo" />
                <img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('assets/images/logo/materialize-logo-color.png') }}" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Grand View</span>
            </a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li class="{{ Request::is('/') ? 'active' : 'bold' }}">
            <a class="{{ Request::is('/') ? 'active' : '' }}" href="/">
                <i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span>
            </a>
        </li>

        <li class="{{ Request::is('rooms*') ? 'active' : 'bold' }}">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">invoice</i><span class="menu-title" data-i18n="Invoice">Rooms</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{ Route::is('rooms.index') ? 'active' : 'bold' }}">
                        <a class="waves-effect waves-cyan {{ Route::is('rooms.index') ? 'active' : '' }}" href="{{ route('rooms.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Rooms</span></a>
                    </li>
                    <li class="{{ Route::is('rooms.add') ? 'active' : 'bold' }}">
                        <a class="waves-effect waves-cyan {{ Route::is('rooms.add') ? 'active' : '' }}" href="{{ route('rooms.add') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Add Room</span></a>
                    </li>
                    <li class="{{ Route::is('rooms.guest') ? 'active' : 'bold' }}">
                        <a class="waves-effect waves-cyan {{ Route::is('rooms.guest') ? 'active' : '' }}" href="{{ route('rooms.guest') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Inhouse Guest</span></a>
                    </li>
                    
                </ul>
            </div>
        </li>

        <li class="{{ Request::is('reservation*') ? 'active' : 'bold' }}">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">invoice</i><span class="menu-title" data-i18n="Invoice">Reservation</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{ Route::is('reservation.index') ? 'active' : 'bold' }}">
                        <a class="waves-effect waves-cyan {{ Route::is('reservation.index') ? 'active' : '' }}" href="{{ route('reservation.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Reservation</span></a>
                    </li>
                    <li class="{{ Route::is('reservation.add') ? 'active' : 'bold' }}">
                        <a class="waves-effect waves-cyan {{ Route::is('reservation.add') ? 'active' : '' }}" href="{{ route('reservation.add') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Add Reservation</span></a>
                    </li>
                </ul>
            </div>
        </li>
        
        <li class="bold">
            <a class="waves-effect waves-cyan" href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">ToDo</span></a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan" href="app-kanban.html"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan" href="app-file-manager.html"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">File manager</span></a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan" href="app-contacts.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Contacts">Contacts</span></a>
        </li>
        <li class="bold">
            <a class="waves-effect waves-cyan" href="app-calendar.html"><i class="material-icons">today</i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
        </li>
        <li class="{{ Request::is('invoice*') ? 'active' : 'bold' }}">
            <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">invoice</i><span class="menu-title" data-i18n="Invoice">invoice</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{ Route::is('invoice.index') ? 'active' : 'bold' }}">
                        <a class="waves-effect waves-cyan {{ Route::is('invoice.index') ? 'active' : '' }}" href="{{ route('invoice.index') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">invoice</span></a>
                    </li>
                    <li class="{{ Route::is('invoice.add') ? 'active' : 'bold' }}">
                        <a class="waves-effect waves-cyan {{ Route::is('invoice.add') ? 'active' : '' }}" href="{{ route('invoice.add') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Add invoice</span></a>
                    </li>
                </ul>
            </div>
        </li>
    

  
        
    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
