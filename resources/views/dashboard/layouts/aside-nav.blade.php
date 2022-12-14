<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item pt-2">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                        aria-expanded="false">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item ">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('layanan')}}"
                        aria-expanded="false">
                        <i class="fas fa-stream"></i>
                        <span class="hide-menu">Layanan Tersedia</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.daftarTransaksi')}}"
                        aria-expanded="false">
                        <i class="fas fa-cart-plus"></i>
                        <span class="hide-menu">Pemesanan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('teknisi')}}"
                        aria-expanded="false">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="hide-menu">Teknisi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('ulasan')}}"
                        aria-expanded="false">
                        <i class="fas fa-scroll"></i>
                        <span class="hide-menu">Review/Ulasan</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="fontawesome.html"
                        aria-expanded="false">
                        <i class="far fa-star"></i>
                        <span class="hide-menu">Testimoni</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.riwayat_transaksi')}}"
                        aria-expanded="false">
                        <i class="fas fa-history"></i>
                        <span class="hide-menu">Riwayat Pemesanan</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('user.index')}}"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Manajemen Akun</span>
                    </a>
                </li>

            
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>