<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu Administration </span></li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Page</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{URL('/')}}" class="nav-link" data-key="t-analytics" target="_blank">Page d'accueil </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.dashboard')}}" class="nav-link" data-key="t-crm" > Page D'administration </a>
                        </li>
                    </ul>
                </div>
            </li> <!-- end Dashboard Menu -->
            <li class="nav-item">
                <a class="nav-link menu-link" href="{{route('admin.all.users'   )}}" >
                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Gestion Utilisateurs</span>
                </a>

            </li>


            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Menu Contextuel</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                    <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Gestion  Formateurs </span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarAuth">
                    <ul class="nav nav-sm flex-column">

                        <li class="nav-item">
                            <a href="{{route('admin.teacher.disable')}}" class="nav-link" >Liste des formateurs
                            </a>

                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                    <i class="ri-pages-line"></i> <span data-key="t-pages">Gestion Catégories </span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarPages">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link" data-key="t-starter"> Liste des catégories </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                    <i class="ri-rocket-line"></i> <span data-key="t-landing">Gestion des Cours</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarLanding">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{route('all.admin.course')}}" class="nav-link" data-key="t-one-page"> Liste des cours </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Gestion Commandes</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                    <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Gestion Commandes</span>
                </a>
                <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Liste Des Commandes </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                    <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Gestion Coupons</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                    <ul class="nav nav-sm flex-column">

                        <li class="nav-item">
                            <a href="{{route('coupon.index')}}" class="nav-link" data-key="t-nestable-list">Liste Des Coupons </a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="widgets.html">
                    <i class="ri-honour-line"></i> <span data-key="t-widgets">Like Formation </span>
                </a>
            </li> --}}



            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                    <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Gestion Boostage</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarTables">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                        </li>
                        <li class="nav-item">
                            <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                        </li>
                        <li class="nav-item">
                            <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                        </li>
                        <li class="nav-item">
                            <a href="tables-datatables.html" class="nav-link" data-key="t-datatables">Datatables</a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                    <i class="ri-pie-chart-line"></i> <span data-key="t-charts">Gestion Articles</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarCharts">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">
                                Apexcharts
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="charts-apex-line.html" class="nav-link" data-key="t-line"> Line
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-area.html" class="nav-link" data-key="t-area"> Area
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-column.html" class="nav-link" data-key="t-column">
                                            Column </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar"> Bar </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed"> Mixed
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">
                                            Timeline </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick"> Candlstick </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot">
                                            Boxplot </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">
                                            Bubble </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">
                                            Scatter </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">
                                            Heatmap </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">
                                            Treemap </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie"> Pie </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar"> Radialbar </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar"> Radar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">
                                            Polar Area </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs"> Chartjs </a>
                        </li>
                        <li class="nav-item">
                            <a href="charts-echarts.html" class="nav-link" data-key="t-echarts"> Echarts </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                    <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Notifcations</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarIcons">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                        </li>
                        <li class="nav-item">
                            <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                        </li>
                        <li class="nav-item">
                            <a href="icons-materialdesign.html" class="nav-link" data-key="t-material-design">Material Design</a>
                        </li>
                        <li class="nav-item">
                            <a href="icons-lineawesome.html" class="nav-link" data-key="t-line-awesome">Line
                                Awesome</a>
                        </li>
                        <li class="nav-item">
                            <a href="icons-feather.html" class="nav-link" data-key="t-feather">Feather</a>
                        </li>
                        <li class="nav-item">
                            <a href="icons-crypto.html" class="nav-link"> <span data-key="t-crypto-svg">Crypto SVG</span></a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                    <i class="ri-map-pin-line"></i> <span data-key="t-maps">Configuration</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarMaps">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="maps-google.html" class="nav-link" data-key="t-google">
                                Google
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                Vector
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                Leaflet
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}



        </ul>
    </div>
    <!-- Sidebar -->
</div>
