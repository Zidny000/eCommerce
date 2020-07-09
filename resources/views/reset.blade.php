
@extends('layout.master')

@section('content')

    <hr class="offset-top">


<form class="join" action="{{url('/reset')}}" method="POST">
    {{csrf_field()}}
    <input type="text" name="token" value="" placeholder="token" required="" class="form-control" />
    <br>



    <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
    <br>

    <input type="password" name="password_confirmation" value="" placeholder="Password again" required="" class="form-control" />
    <br>

    <button type="submit" class="btn btn-primary btn-sm">Reset </button> &nbsp;&nbsp;
    <a href="#">Terms ></a>


</form>

@endsection