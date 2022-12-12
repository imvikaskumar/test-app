<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li class="">
                    {{-- <a href="{{route('admin')}}" class="waves-effect {{ request()->is(" admin") ||
                        request()->is("admin/*") ? "mm active" : "" }}"> --}}
                        <a href="javascript:;">
                            <i class="ti-home"></i><span class="badge badge-primary badge-pill float-right">2</span>
                            <span>
                                Dashboard </span>
                        </a>
                </li>
                <li class="">
                    {{-- <a href="{{route('admin')}}" class="waves-effect {{ request()->is(" admin") ||
                        request()->is("admin/*") ? "mm active" : "" }}"> --}}
                        <a href="{{ route('books.index') }}">
                            <i class="ti-home"></i><span class="badge badge-primary badge-pill float-right">2</span>
                            <span>
                                Books </span>
                        </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
