{{--<div class="responsive-header">--}}
{{--    <div class="logo-area">--}}
{{--        <ul class="notify-area">--}}
{{--            <li>--}}
{{--                <div class="nav-icon3"> <span></span> <span></span> <span></span> <span></span> </div>--}}
{{--            </li>--}}

{{--        </ul>--}}

{{--        <div class="user-head">--}}
{{--            <div class="admin">--}}
{{--                <div class="admin-avatar"> <i class="fa fa-user-circle"   aria-hidden="true" id="icon"></i><span id="admin">{{ \Illuminate\Support\Facades\Auth::user()->type }}</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="drop setting"> <span class="drop-head"> {{ \Illuminate\Support\Facades\Auth::user()->name }} </span>--}}

{{--                <span class="drop-bottom"><a href="{{url('/admin/logout')}}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}

<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo"><a href="index.html" title=""><img src="images/logo.png" alt=""></a></div>
            </div>
            <div class="col-lg-9">
                <ul class="notify-area">
                    <li>
                        <div class="nav-icon3 "> <span></span> <span></span> <span></span> <span></span> </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-1">
                <div class="user-head">
                    <div class="admin">
{{--                        <div class="admin-avatar"><img src="images/resources/admin.png" alt=""> <i class="online"></i> </div>--}}
                        <div class="admin-avatar"> <i class="fa fa-user-circle"   aria-hidden="true" id="icon"></i><span id="admin">{{ \Illuminate\Support\Facades\Auth::user()->type }}</span>
                        </div>
                    </div>
                    <div class="drop setting"> <span class="drop-head">{{ \Illuminate\Support\Facades\Auth::user()->name }} </span>

                        <span class="drop-bottom"><a href="{{url('/admin/logout')}}" title=""><i class="fa fa-sign-out"></i>log Out</a></span> </div>
                </div>
            </div>
        </div>
    </div>
</div>