@extends('layout.master')

@push('contacts','class="active"')

@section('content')

    <hr class="offset-top">


    <div class="white">
        <hr class="offset-sm">

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div id="Address">
                        <address>
                            <label class="h3">Unistore Pro, Inc.</label><br>
                            1305 Market Street, Suite 800<br>
                            San Francisco, CA 94102<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <address>
                            <strong>Support</strong><br>
                            <a href="mailto:#">sup@example.com</a>
                            <br><br>

                            <strong>Partners</strong><br>
                            <a href="mailto:#">col@example.com</a>
                        </address>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div id="GoMap"></div>
                </div>
            </div>
        </div>

        <hr class="offset-lg">
    </div>

    <div class="gray">
        <hr class="offset-lg">

        <div class="container align-center">
            <h1 class="upp"> Need our help? </h1>
            <p> Please insert question to a form below. </p>
            <hr class="offset-md">

            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <form class="contact" action="{{url('user/message')}}" method="post">
                        {{csrf_field()}}
                        <textarea class="form-control" name="message" placeholder="Message" required="" rows="5"></textarea>
                        <br>

                        <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                        <br>



                        <button type="submit" class="btn btn-primary justify"> Send question </button>



                    </form>
                </div>
            </div>
        </div>
        <br>
    </div>


    <hr class="offset-lg">
    <hr class="offset-sm">


@endsection