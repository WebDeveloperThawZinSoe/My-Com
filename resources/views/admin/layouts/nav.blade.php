    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" target="_blank" class="nav-link">Website</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->




            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin/home" class="brand-link">
            {{-- <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            <span class="brand-text font-weight-light" style="text-decoration: none !important;">Yangon Mall</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    {{-- <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image"> --}}
                </div>
                <div class="info">
                    <a href="/dashboard" class="d-block" style="text-decoration: none"> {{ Auth::user()->name }} </a>
                </div>
            </div>


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="{{route('dashboard')}}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : null }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard

                            </p>
                        </a>

                    </li>

                    <!-- Vendor Start -->
                    <li class="nav-item">
                        <a href="" class="nav-link {{ request()->routeIs('admin#vendor') ? 'active' : null }} {{ request()->routeIs('admin#vendor#create#route') ? 'active' : null }} ">
                            {{-- <i class=" fas fa-copy"></i> --}}
                            <i class="nav-icon fas fa-copy "></i>
                            <p>
                                Vendor
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin#vendor') }}" class="nav-link {{ request()->routeIs('admin#vendor') ? 'active' : null }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View ALl Vendor List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin#vendor#create#route') }}" class="nav-link {{ request()->routeIs('admin#vendor#create#route') ? 'active' : null }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Vendor</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- Vendor End -->

                    <!-- Purchase Start -->
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            {{-- <i class=" fas fa-copy"></i> --}}
                            <i class="nav-icon fas fa-copy "></i>
                            <p>
                                Purchase
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View ALl Purchase List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Purchase</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- Purchase End -->

                    <!-- Product Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ request()->routeIs('home#product#category') ? 'active' : null }} {{ request()->routeIs('home#product#category#subcategory') ? 'active' : null }}{{ request()->routeIs('home#product') ? 'active' : null }} {{ request()->routeIs('home#product#create') ? 'active' : null }}">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Product
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin#category#home') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Product End -->

                    <!-- Partner Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ request()->routeIs('admin#partner') ? 'active' : null }} {{ request()->routeIs('admin#partner#create') ? 'active' : null }} ">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Partner
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin#partner') }}" class="nav-link {{ request()->routeIs('admin#partner') ? 'active' : null }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All Partner</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin#partner#create') }}" class="nav-link {{ request()->routeIs('admin#partner#create') ? 'active' : null }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create New Partner</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Partner End -->

                    <!-- Customer Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Customer
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Customer End -->

                    <!-- Sale Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Sale
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Sale End -->

                    <!-- Order Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Order
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Order End -->

                    <!-- Cupon Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Cupon
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Cupon End -->

                    <!-- Member Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Member
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Member End -->

                    <!-- Content Management Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Content Management
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Content Management End -->

                    <!-- Logs Management Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Logs Management
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Logs Management End -->

                    <!-- Static Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Static
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Static End -->

                    <!-- SEO Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                SEO Management
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- SEO End -->

                    <!-- Store Management Start -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Store Management
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home/product/category" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Category</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/category/subcategory" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SubCategory</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Product</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/home/product/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New Product</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--  Store Management End -->

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
