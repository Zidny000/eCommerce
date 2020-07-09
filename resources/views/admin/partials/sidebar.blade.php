<header>
    <div class="side-menus">
        <div class="side-header">
            <div class="logo"><a title="" href="index.html"><img alt="" src="images/logo2.png"></a></div>
            <nav class="slide-menu">
                <span><h3>Navigation</h3></span>
                <ul class="parent-menu">
                    <li > <a title="index.html" href="{{url('/admin/adminDashboard')}}"><i class="fa fa-address-card" aria-hidden="true"></i><span>Dashboard</span></a></li>



                    <li class="menu-item-has-children active"> <a title=""><i class="fa fa-shopping-cart"></i><span>WooCommercee</span></a>
                        <ul class="mega" style="display: block;">
                            <li><a class="active" href="{{url('/admin/showProduct')}}" title="">product</a></li>

                            <li><a href="{{url('/admin/product_order')}}">product-order</a></li>
                            <li><a href="{{url('/admin/product_add')}}">add product</a></li>

                        </ul>
                    </li>

                    <li > <a title="index.html" href="{{url('/admin/question')}}"><i class="fa fa-comment" aria-hidden="true"></i><span> Message</span></a></li>

                    @if(\Illuminate\Support\Facades\Auth::user()->type == 'admin')

                    <li> <a title="index.html" href="{{url('/admin/product_detail')}}"><i class="fa fa-id-badge" aria-hidden="true"></i><span>Manager Table</span></a></li>

                    @endif

                </ul>
            </nav>
        </div>
    </div>
</header>