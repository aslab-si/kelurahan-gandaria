<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <div class="d-flex gap-2 justify-content-center mb-2 align-items-center mt-4">

                <a href="./dashboard.php"><img src="../assets/img/jakarta-logo.png" alt="" width="50" height="50"></a>
                <h4 class="fw-bolder" style="color: #005e95;">KELURAHAN GANDARIA</h4>
            </div>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?php $_SERVER['REQUEST_URI'] === $_SERVER['REQUEST_URI'] ? 'active' : '' ?>" href="./dashboard.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">FEATURES</span>
                </li>
                <!-- <li class="sidebar-item">
                    <a class="sidebar-link <?php // $_SERVER['REQUEST_URI'] === $_SERVER['REQUEST_URI'] ? 'active' : '' ?>" href="./users.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Users</span>
                    </a>
                </li> -->
                <li class="sidebar-item">
                    <a class="sidebar-link <?php $_SERVER['REQUEST_URI'] === $_SERVER['REQUEST_URI'] ? 'active' : '' ?>" href="./berita.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i>
                        </span>
                        <span class="hide-menu">Berita</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?php $_SERVER['REQUEST_URI'] === $_SERVER['REQUEST_URI'] ? 'active' : '' ?>" href="./layanan.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-menu"></i>
                        </span>
                        <span class="hide-menu">Layanan</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">AUTH</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="../logout.php" aria-expanded="false">
                        <span>
                            <i class="ti ti-login"></i>
                        </span>
                        <span class="hide-menu">Logout</span>
                    </a>
                </li>


            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!--  Sidebar End -->