<div class="side-content-wrap">
    <div class="sidebar-left open" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item active"><a class="nav-item-hold" href="{{route('home_system')}}"><i class="i-Shop-4 text-3xl"></i>
                    <p>Inicio</p>
                </a></li>
            <li class="nav-item" data-item="apps"><a class="nav-item-hold" href="#"><i class="i-Computer-Secure text-3xl"></i>
                    <p>Mis Pedidos</p>
                </a></li>
            <li class="nav-item" data-item="profile"><a class="nav-item-hold" href="#"><i class="i-Find-User text-3xl"></i>
                    <p>Usuarios</p>
                </a>
            </li>
            <!-- <li class="nav-item" data-item="dashboard"><a class="nav-item-hold" href="#"><i class="i-Bar-Chart text-3xl"></i>
                    <p>Estadisticas</p>
                </a>
            </li>
            <li class="nav-item" data-item="components"><a class="nav-item-hold" href="#"><i class="i-Wallet text-3xl"></i>
                    <p>Mi Perfil</p>
                </a>
            </li>
            <li class="nav-item" data-item="widgets"><a class="nav-item-hold" href="#"><i class="i-Atom text-3xl"></i>
                    <p>Widgets</p>
                </a>
            </li>
            <li class="nav-item" data-item="sessions"><a class="nav-item-hold" href="#"><i class="i-Administrator text-3xl"></i>
                    <p>Session</p>
                </a>
            </li>
            <li class="nav-item" data-item="charts"><a class="nav-item-hold" href="#"><i class="i-Pie-Chart-2 text-3xl"></i>
                    <p>Charts</p>
                </a>
            </li>
            <li class="nav-item"><a class="nav-item-hold" href="#"><i class="i-Pie-Chart-2 text-3xl"></i>
                    <p>Doc</p>
                </a>
            </li> -->
        </ul>
    </div>
    <div class="sidebar-left-secondary shadow" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="mb-4 childNav" data-parent="dashboard" style="display:block">
            <li class="active"><a href="dashboards/dashboard.dashboard.v1.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Version One</span></a></li>
            <li><a href="dashboards/dashboard.dashboard.v2.html"><i class="nav-icon i-Clock-4 text-base mr-2"></i><span class="item-name">Version Two</span></a></li>
            <li><a href="dashboards/dashboard.dashboard.v3.html"><i class="nav-icon i-Over-Time text-base mr-2"></i><span class="item-name">Version Three</span></a></li>
            <li><a href="dashboards/dashboard.dashboard.v4.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Version Four </span></a></li>
            <li><a href="dashboards/dashboard.Analytic-2.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Version Five </span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="apps" style="display:none">
            <li><a class="flex" href="{{route('create_order')}}"><i class="nav-icon i-Add-Cart text-base mr-2"></i><span class="item-name">Crear Pedido</span></a></li>
            <li><a class="flex" href="#"><i class="nav-icon i-Add-Cart text-base mr-2"></i><span class="item-name">Mis Pedidos</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="profile" style="display:none">
            <li><a href="#"><i class="nav-icon i-Find-User text-base mr-2"></i><span class="item-name">Registrar usuarios</span></a></li>
            <li><a href="#"><i class="nav-icon i-Find-User text-base mr-2"></i><span class="item-name">Permisos por usuario</span></a></li>
            <li><a href="#"><i class="nav-icon i-Find-User text-base mr-2"></i><span class="item-name">Listado de Permisos</span></a></li>
        </ul>
        <!-- <ul class="mb-4 childNav" data-parent="widgets" style="display:none">
            <li><a href="widgets/widgets.charts.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Charts</span></a></li>
            <li><a href="widgets/widgets.general.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">General</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="components" style="display:none">
            <li><a href="components/components.animation.html"><i class="nav-icon i-Clock-4 text-base mr-2"></i><span class="item-name">Animation</span></a></li>
            <li><a href="components/components.alert.html"><i class="nav-icon i-Over-Time text-base mr-2"></i><span class="item-name">Alert</span></a></li>
            <li><a href="components/components.avatar.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Avatars</span></a></li>
            <li><a href="components/components.badge.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Badge</span></a></li>
            <li><a href="components/components.buttons.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Buttons</span></a></li>
            <li><a href="components/components.dropdown.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Dropdown</span></a></li>
            <li><a href="datatables/basic/table.datatables.html"><i class="nav-icon i-Clock-3 text-base mr-2"></i><span class="item-name">Datatable Basic</span></a></li>
            <li><a href="components/components.forms.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Forms</span></a></li>
            <li><a href="components/components.modal.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Modal</span></a></li>
            <li><a href="components/components.pagination.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Pagination</span></a></li>
            <li><a href="components/components.progressbar.html"><i class="nav-icon i-Clock text-base mr-2"></i><span class="item-name">Progressbar</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="sessions" style="display:none">
            <li><a href="pages/sessions/signin.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In</span></a></li>
            <li><a href="pages/sessions/signin2.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In 2</span></a></li>
            <li><a href="pages/sessions/signin3.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In 3</span></a></li>
            <li><a href="pages/sessions/signin4.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign In 4</span></a></li>
            <li><a href="pages/sessions/signup.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 1</span></a></li>
            <li><a href="pages/sessions/signup2.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 2</span></a></li>
            <li><a href="pages/sessions/signup3.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 3</span></a></li>
            <li><a href="pages/sessions/signup4.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">Sign Up 4</span></a></li>
            <li><a href="pages/sessions/404.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">404</span></a></li>
            <li><a href="pages/sessions/forgot.html"><i class="nav-icon i-Checked-User text-base mr-2"></i><span class="item-name">forgot</span></a></li>
        </ul>
        <ul class="mb-4 childNav" data-parent="charts" style="display:none">
            <li><a href="charts/apexCharts/apexCharts.bar.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Bar</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.bubble.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Bubble</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.area.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Charts</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.candleStick.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Candle Stick</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.column.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Column</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.line.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Line</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.pie.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Pie</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.radar.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Radar</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.radialBar.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">RadialBar</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.sparkline.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Sparkline</span></a></li>
            <li><a href="charts/apexCharts/apexCharts.scatter.html"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Scatter</span></a></li>
            <li class="dropdown-sidemenu"><a href="#"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Scatter</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li><a class="hover:text-primary-500" href="#">Submneu One</a></li>
                    <li><a class="hover:text-primary-500" href="#">Submneu Two</a></li>
                </ul>
            </li>
            <li class="dropdown-sidemenu"><a href="#"><i class="nav-icon i-Bar-Chart-2 text-base mr-2"></i><span class="item-name">Scatter</span><i class="dd-arrow i-Arrow-Down"></i></a>
                <ul class="submenu">
                    <li><a class="hover:text-primary-500" href="#">test One</a></li>
                    <li><a class="hover:text-primary-500" href="#">test Two</a></li>
                </ul>
            </li>
        </ul> -->
    </div>
</div>