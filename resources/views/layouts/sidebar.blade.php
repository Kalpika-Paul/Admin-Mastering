<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('admin-assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">LARAVEL SHOP</span>
    </a>
    <!-- Sidebar -->

    <div class="sidebar">
       <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
               
                    <a href="{{route('account.dashboard')}}"
                        class="nav-link  ">
                        <i class="nav-icon far fa-chart-bar" aria-hidden="true"></i>
                        {{-- <i class="nav-icon fas fa-users"></i> --}}
                        <p>
                            Dashboard
                            {{-- <i class="fas fa-angle-left right"></i> --}}
                        </p>
                    </a>
                   
                        </li>
            <li class="nav-item">
               
                <a href="#"
                    class="nav-link  ">
                    <i class="nav-icon far fa-chart-bar" aria-hidden="true"></i>
                    {{-- <i class="nav-icon fas fa-users"></i> --}}
                    <p>
                        Product
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('account.categories')}}"
                                class="nav-link  ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=""
                                class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>subcategory</p>
                            </a>
                        </li>
                     </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-chart-bar" aria-hidden="true"></i>
                            <p>
                                Product1 
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>category2</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>subcategory2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </nav>
                
{{-- 
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item {{ request()->routeIs(['admin.category1', 'admin.subcategory1']) ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->routeIs(['admin.category1', 'admin.subcategory1']) ? 'active' : '' }}">
                                <i class="nav-icon far fa-chart-bar" aria-hidden="true"></i>
                                <p>
                                    Product1 <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.category1') }}" class="nav-link {{ request()->routeIs('admin.category1') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>category1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.subcategory1') }}" class="nav-link {{ request()->routeIs('admin.subcategory1') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>subcategory2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav> --}}

    





    </div>
    <!-- /.sidebar -->

   
    <!-- /.sidebar -->
 </aside>