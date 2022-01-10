<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        POLICE
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/" class="active">Home</a></li>
                        <li><a href="{{ route('criminals')}}">Wanted Criminal</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Complaint</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('report-crime')}}?anonymous=false">report crime</a></li>
                                <li><a href="{{route('report-accident')}}?anonymous=false">report accident</a></li>
                                <li><a href="{{route('report-missing')}}?anonymous=false">report missing</a></li>
                            </ul>
                        <li><a href="{{route('list-missing')}}">Missing Persons</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->