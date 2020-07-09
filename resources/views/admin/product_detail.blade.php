@extends('layout.adminMaster')



@section('admin_content')

    <div class="panel-body">

        <div class="content-area">
            <div class="sub-bar">
                <div class="sub-title">
                    <h4>Dashboard:</h4>
                    <span>Welcome To web Admin Panel!</span>
                </div>
                <ul class="bread-crumb">
                    <li><a href="#" title="">Home</a></li>
                    <li>Dashbord</li>
                </ul>
            </div>
            <div class="gap no-gap">
                <div class="inner-bg">
                    <div class="element-title">
                        <h4>Moderator Table</h4>
                    </div>
                    <table class="cart-table table table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>user name</th>

                            <th>email</th>

                            <th>status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            @if($user->type == 'mod')
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>

                            <td>{{$user->email}}</td>

                            <td><span class="failed">{{$user->type}}</span></td>
                            <td>
                                <form method="POST" action="{{url('/admin/roleChange')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <select name="role" id="">
                                        @foreach($userType as $t)
                                            @if($t == $user->type)
                                                <option selected value="{{$user->role}}">{{$t}}</option>
                                            @else
                                                <option value="{{$t}}">{{$t}}</option>

                                            @endif
                                        @endforeach
                                    </select>
                                    <input type="submit" name="submit" value="update">
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="gap no-gap">
                <div class="inner-bg">
                    <div class="element-title">
                        <h4>User Table</h4>
                    </div>
                    <table class="cart-table table table-responsive">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>user name</th>

                            <th>email</th>

                            <th>status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                @if($user->type == 'user')
                                    <td>1</td>
                                    <td>{{$user->name}}</td>

                                    <td>{{$user->email}}</td>

                                    <td><span class="failed">{{$user->type}}</span></td>
                                    <td>
                                        <form method="POST" action="{{url('/admin/roleChange')}}">
                                            {{csrf_field()}}
                                            <input type="hidden" name="user_id" value="{{$user->id}}">
                                            <select name="role" id="">
                                                @foreach($userType as $t)
                                                    @if($t == $user->type)
                                                        <option selected value="{{$user->role}}">{{$t}}</option>
                                                    @else
                                                        <option value="{{$t}}">{{$t}}</option>

                                                    @endif
                                                @endforeach
                                            </select>
                                            <input type="submit" name="submit" value="update">
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- bottombar -->
    </div>

@endsection