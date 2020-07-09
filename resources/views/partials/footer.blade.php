<footer>
    <div class="about">
        <div class="container">
            <div class="row">
                <hr class="offset-md">

                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <i class="ion-ios-telephone-outline"></i>
                        <h1>24/7 free <br> <span>support</span></h1>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <i class="ion-ios-star-outline"></i>
                        <h1>Low price <br> <span>guarantee</span></h1>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <i class="ion-ios-gear-outline"></i>
                        <h1> Manufacturer’s <br> <span>warranty</span></h1>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="item">
                        <i class="ion-ios-loop"></i>
                        <h1> Full refund <br> <span>guarantee</span> </h1>
                    </div>
                </div>

                <hr class="offset-md">
            </div>
        </div>
    </div>

    <div class="subscribe">
        <div class="container align-center">
            <hr class="offset-md">

            <h1 class="h3 upp">Join our newsletter</h1>
            <p>Get more information and receive special discounts for our products.</p>
            <hr class="offset-sm">

            <form action="index.php" method="post">
                <div class="input-group">
                    <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control">
                    <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"> Subscribe <i class="ion-android-send"></i> </button>
                </span>
                </div><!-- /input-group -->
            </form>
            <hr class="offset-lg">
            <hr class="offset-md">

            <div class="social">
                <a href="#"><i class="ion-social-facebook"></i></a>
                <a href="#"><i class="ion-social-twitter"></i></a>
                <a href="#"><i class="ion-social-googleplus-outline"></i></a>
                <a href="#"><i class="ion-social-instagram-outline"></i></a>
                <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                <a href="#"><i class="ion-social-youtube-outline"></i></a>
            </div>


            <hr class="offset-md">
            <hr class="offset-md">
        </div>
    </div>


    <div class="container">
        <hr class="offset-md">

        <div class="row menu">
            <div class="col-sm-3 col-md-2">
                <h1 class="h4">Information <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

                <div class="list-group">
                    <a href="#" class="list-group-item">About</a>
                    <a href="#" class="list-group-item">Terms</a>
                    <a href="#" class="list-group-item">How to order</a>
                    <a href="#" class="list-group-item">Delivery</a>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

                <div class="list-group">
                    <a href="#" class="list-group-item">Laptops</a>
                    <a href="#" class="list-group-item">Tablets</a>
                    <a href="#" class="list-group-item">Servers</a>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <h1 class="h4">Support <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

                <div class="list-group">
                    <a href="#" class="list-group-item">Returns</a>
                    <a href="#" class="list-group-item">FAQ</a>
                    <a href="#" class="list-group-item">Contacts</a>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <h1 class="h4">Location</h1>

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Language
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#English"> <img src="{{asset('assets/img/flags/gb.png')}}" alt="Eng"/> English</a></li>
                        <li><a href="#Spanish"> <img src="{{asset('assets/img/flags/es.png')}}" alt="Spa"/> Spanish</a></li>
                        <li><a href="#Deutch"> <img src="{{asset('assets/img/flags/de.png')}}" alt="De"/> Deutch</a></li>
                        <li><a href="#French"> <img src="{{asset('assets/img/flags/fr.png')}}" alt="Fr"/> French</a></li>
                    </ul>
                </div>
                <hr class="offset-xs">

                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Currency
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#Euro"><i class="ion-social-euro"></i> Euro</a></li>
                        <li><a href="#Dollar"><i class="ion-social-usd"></i> Dollar</a></li>
                        <li><a href="#Yen"><i class="ion-social-yen"></i> Yen</a></li>
                        <li><a href="#Bitcoin"><i class="ion-social-bitcoin"></i> Bitcoin</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-3 col-md-3 col-md-offset-1 align-right hidden-sm hidden-xs">
                <h1 class="h4">Unistore Pro, Inc.</h1>

                <address>
                    1305 Market Street, Suite 800<br>
                    San Francisco, CA 94102<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>

                <address>
                    <strong>Support</strong><br>
                    <a href="mailto:#">sup@example.com</a>
                </address>

            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9 payments">
                <p>Pay your order in the most convenient way</p>

                <div class="payment-icons">
                    <img src="{{asset('assets/img/payments/paypal.svg')}}" alt="paypal">
                    <img src="{{asset('assets/img/payments/visa.svg')}}" alt="visa">
                    <img src="{{asset('assets/img/payments/master-card.svg')}}" alt="mc">
                    <img src="{{asset('assets/img/payments/discover.svg')}}" alt="discover">
                    <img src="{{asset('assets/img/payments/american-express.svg')}}" alt="ae">
                </div>
                <br>

            </div>
            <div class="col-sm-4 col-md-3 align-right align-center-xs">
                <hr class="offset-sm hidden-sm">
                <hr class="offset-sm">
                <p>Unistore Pro © 2016 <br> Designed By <a href="http://sunrise.ru.com/" target="_blank">Sunrise Digital</a></p>
                <hr class="offset-lg visible-xs">
            </div>
        </div>
    </div>
</footer>



<hr class="offset-lg">
<hr class="offset-sm">


<!-- Modal -->
<div class="modal fade" id="Modal-SignIn" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="modal-title text-center">Sign In</h2>
                            <br>

                            @if(session('error'))

                                <div class="alert alert-danger">{{ session('error') }}</div>

                            @endif


                            <form class="signin" action="{{url('/user/login')}}" method="post">
                                {{ csrf_field() }}
                                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                                <br>
                                <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                                <br>

                                <button type="submit" class="btn btn-primary">Ok</button>
                                <a href="#forgin-password" data-action="Forgot-Password">Password recovery ></a>
                            </form>
                            <br>

                            <div class="social-login">
                                <div class="or"><p>OR</p></div>
                                <a href="#"><i class="icon" data-src="assets/img/icons/facebook.svg"></i></a>
                                <p>via</p>
                                <a href="#"><i class="icon" data-src="assets/img/icons/google-plus.svg"></i></a>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal-Registration" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="modal-title text-center">Registration</h2>
                            <br>
                            @include('partials.errors')

                            <form class="join" action="{{url('/user/register')}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="name" value="" placeholder="Name" required="" class="form-control" />
                                <br>

                                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                                <br>

                                <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                                <br>

                                <input type="password" name="password_confirmation" value="" placeholder="Password again" required="" class="form-control" />
                                <br>

                                <button type="submit" class="btn btn-primary btn-sm">Ok </button> &nbsp;&nbsp;
                                <a href="#">Terms ></a>

                                <br><br>
                                <p>
                                    By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal-ForgotPassword" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="modal-title">Forgot Your Password?</h4>
                            <br>

                            <form class="join" action="{{url('/password/reset')}}" method="post">
                                {{csrf_field()}}
                                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                                <br>

                                <button type="submit" class="btn btn-primary btn-sm">Continue</button>
                                <a href="#Sign-In" data-action="Sign-In">Back ></a>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <br><br>
                            <p>
                                Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Modal-Registration" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="modal-title text-center">Registration</h2>
                            <br>
                            @include('partials.errors')

                            <form class="join" action="{{url('/user/register')}}" method="POST">
                                {{csrf_field()}}
                                <input type="text" name="name" value="" placeholder="Name" required="" class="form-control" />
                                <br>

                                <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                                <br>

                                <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                                <br>

                                <input type="password" name="password_confirmation" value="" placeholder="Password again" required="" class="form-control" />
                                <br>

                                <button type="submit" class="btn btn-primary btn-sm">Ok </button> &nbsp;&nbsp;
                                <a href="#">Terms ></a>

                                <br><br>
                                <p>
                                    By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

