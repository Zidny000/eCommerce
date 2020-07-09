@extends('layout.adminMaster')



@section('admin_content')


    <div class="gap no-gap">
        <div class="inner-bg">
            <div class="element-title">
                <h4>Product Orders</h4>
            </div>
            <table class="cart-table table table-responsive">
                <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Message</th>

                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $key => $message)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->message}}</td>

                    <td><a href="{{url('admin/'.$message->id.'/message/delete')}}" title=""><i class="icon-trash"></i></a> </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection