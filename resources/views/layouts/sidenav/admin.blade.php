<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        TIS Admin
                        <small>Super User</small>
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                    <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
       <ul class="nav">
            <li class="nav-header">Navigation</li>
          
              {{-- <li class="{{Request::is('dashboard')?'active':''}}">
                <a href="{{url('dashboard')}}">
                    <i class="fa fa-th"></i>
                    <span>Dashboard </span>
                </a>
            </li>
            <li class="has-sub {{(Route::is('prodList')||Route::is('prodCat'))?'active':''}}">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-shopping-cart"></i>
                    <span>Products</span>

                </a>
                <ul class="sub-menu">
                    <li class="{{Route::is('prodList')?'active':''}}"><a href="{{url('product/list')}}">Product List</a></li>
                    <li class="{{Route::is('prodCat')?'active':''}}"><a href="{{url('product/category')}}">Product Category</a></li>

                </ul>
            </li>
            <li class="has-sub {{(Request::is('inventory-remaining')||Request::is('inventory-manage')||Route::is('sku'))?'active':'' }}">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-chart-pie"></i>
                    <span>Inventory</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{Request::is('inventory-remaining')||Route::is('sku')?'active':''}}"><a href="{{url('inventory-remaining')}}">


            <li class="{{Request::is('orders')?'active':''}}">
                <a href="{{url('orders')}}">
                    <i class="fa fa-truck"></i>
                    <span>Orders</span>
                </a>
            </li>

            <li class="{{Request::is('sales')?'active':''}}">
                <a href="{{url('sales')}}">
                    <i class="fa fa-money-bill-alt"></i>
                    <span>Sales</span>
                </a>
            </li> --}}
           
            <li class="has-sub {{Route::is('manageTenants')?'active':''}}">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
                
                <ul class="sub-menu">
                    <li class="{{Route::is('manageTenants')?'active':''}}"><a href="{{route('manageTenants')}}">Tenants's List</a></li>
                    

                </ul>
            </li>

            
            {{--<li class="has-sub {{(Route::is('tax')||Route::is('currency'))?'active':''}}">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa fa-cogs"></i>
                    <span>Configurations</span>
                </a>
                <ul class="sub-menu">
                    <li class="{{Route::is('tax')?'active':''}}"><a href="{{url('tax')}}">Tax & Fees</a></li>
                    <li class="{{Route::is('currency')?'active':''}}"><a href="{{url('currency')}}">Currencies</a></li>
                    <li class="{{Route::is('compliance')?'active':''}}"><a href="{{url('compliance')}}">Compliance</a></li>

                </ul>
            </li>--}}


            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul> 
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
