@extends('layouts.master')

@section('content')
<div class="header-clear-large"></div>
                <!--Page content goes here, fixed elements go above the all elements class-->

                <div class="page-login full-bottom">
                    <a href="#" class="page-login-logo"></a>
                    <div class="login-input">
                        <i class="fa fa-user"></i>
                        <input onfocus="if (this.value=='Username') this.value = ''" onblur="if (this.value=='') this.value = 'Username'" type="text" value="Username">
                    </div>
                    <div class="login-mail">
                        <i class="fa fa-envelope-o"></i>
                        <input onfocus="if (this.value=='E-Mail') this.value = ''" onblur="if (this.value=='') this.value = 'E-Mail'" type="email" value="E-Mail">
                    </div>
                    <div class="login-date">
                        <i class="fa fa-calendar-o"></i>
                        <input class="set-today" type="date">
                    </div>
                    <div class="login-password">
                        <i class="fa fa-lock"></i>
                        <input onfocus="if (this.value=='password') this.value = ''" onblur="if (this.value=='') this.value = 'password'" type="password" value="password">
                    </div>
                    <a href="#" class="login-already">Already Registered?</a>
                    <a href="#" class="login-button button button-small button-green button-fullscreen full-bottom">Register</a>
                </div>

                <div class="decoration"></div>

                <div class="heading-style-1 container half-bottom">
                    <a href="#"><i class="fa fa-star"></i></a>
                    <h4>AppStyled Version</h4>
                    <div class="heading-block bg-red-dark"></div>
                    <div class="heading-decoration bg-red-dark"></div>
                </div>
                <div class="container">
                    <p>
                        A simple userlist or have follow buttons, maybe even socials if you need them! This page
                        can be used for your follower list or maybe just for staff purposes?
                    </p>
                    <a href="pageapp-signup.html" class="read-more-link"><i class="fa fa-link"></i>Go to AppStyled SignUp</a>
                </div>

                <div class="decoration"></div>

                <div class="footer">
                    <p class="center-text">Copyright 2015. All rights reserved.</p>
                    <div class="footer-icons">
                        <a href="#" class="scale-hover facebook-color social-ball"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="scale-hover twitter-color social-ball"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="scale-hover google-color social-ball"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="scale-hover back-to-top bg-green-dark social-ball"><i class="fa fa-angle-up"></i></a>
                        <a href="#" class="scale-hover show-share-bottom bg-magenta-dark social-ball"><i class="fa fa-retweet"></i></a>
                    </div>
                </div>
                <!-- End of entire page content-->
            </div>
        </div>
        <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>
    </div>
</div>
<!--Fly up share box and notifications go here -->
<!--These are the only features that should be placed outside the all-elements class-->
@stop
