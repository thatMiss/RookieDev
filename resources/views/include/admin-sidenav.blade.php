<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Dashboard
                </a>

                @if(Auth::user()->user_role=='missing-person-admin' || Auth::user()->user_role=='super-admin')
                <div class="sb-sidenav-menu-heading">Manage Missing Persons</div>
                <a class="nav-link" href="{{route('missing.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
                    Missing Person List
                </a>

                <a class="nav-link" href="{{route('missing.create')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                    Add New Report
                </a>
                @endif

                @if(Auth::user()->user_role=='most-wanted-admin' || Auth::user()->user_role=='super-admin')
                <div class="sb-sidenav-menu-heading">Manage Most Wanted</div>

                <a class="nav-link" href="{{route('wanted.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-th-list"></i></div>
                    Most Wanted List
                </a>

                <a class="nav-link" href="{{route('wanted.create')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                    Add New Report
                </a>
                @endif

                <div class="sb-sidenav-menu-heading">Manage Complaints</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                    Complaints
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('crimes.index')}}">Crime Reports</a>
                        <a class="nav-link" href="{{route('accidents.index')}}">Accident Reports</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-plus-circle"></i></div>
                    New Complaint
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{route('crimes.create')}}">
                            Crime Form
                        </a>

                        <a class="nav-link" href="{{route('accidents.create')}}">
                            Accident Form
                        </a>

                    </nav>
                </div>
                @if(Auth::user()->user_role=='super-admin')
                <div class="sb-sidenav-menu-heading">Administration</div>
                <a class="nav-link" href="{{route('users.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    View Administrators
                </a>
                <a class="nav-link" href="{{route('users.create')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Add New Admin
                </a>
                @endif

                <div class="sb-sidenav-menu-heading">Miscellaneous</div>
                <a class="nav-link" href="{{route('officers-details')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Officer Details
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>