<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{route('user.index')}}"><i class="fa fa-user"></i>User Management</a>
            </li>
            <li>
                <a href="{{route('category.index')}}"><i class="fa fa-table fa-fw"></i>Category management</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('color.index')}}">Color</a>
                    </li>
                    <li>
                        <a href="{{route('size.index')}}">Size</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-product-hunt"></i>Product Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('product.index')}}"><i class="fa fa-list-ol"></i>Product List</a>
                    </li>
                    <li>
                        <a href="{{route('product.create')}}"><i class="fa fa-plus-square"></i>Add Product</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="{{route('banner.index')}}"><i class="fa fa-edit fa-fw"></i>Banner Management</a>
            </li>
            <li>
                <a href="{{route('order.index')}}"><i class="fa fa-edit fa-fw"></i>Order Management</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i>Order Mangement<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Se</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i>Post Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('post.index')}}">Post List</a>
                    </li>
                    <li>
                        <a href="{{route('post.create')}}">Add Post</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
</div>