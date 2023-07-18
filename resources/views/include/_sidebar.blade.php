<ul class="nav sidebar-inner" id="sidebar-menu">
    <!-- MENU -->
    <li>
        <h6 class="px-4 py-2">Menu</h6>
    </li>
    <li class="has-sub {{ request()->is('prediksi') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="{{ url('prediksi') }}">
            <i class="mdi mdi-pen"></i>
            <span class="nav-text">Prediksi</span>
        </a>
    </li>
    <li class="has-sub {{ request()->is('komputer*') ? 'active' : '' }}">
        <a class="sidenav-item-link" href="{{ route('komputer.index') }}">
            <i class="mdi mdi-office-building"></i>
            <span class="nav-text">Data Penjualan Komputer</span>
        </a>

        <hr>
    </li>
</ul>