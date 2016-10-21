@extends('layouts.master')

@section('content')
<!--Page content goes here, fixed elements go above the all elements class-->
          <div class="homepage-slider container-fullscreen">
          <div class="pageapp-login bg-5 cover-screen">
              <div class="pageapp-login-content cover-center">
                  <div class="unboxed-layout">
                    <form method="POST" action="auth/begin">
                      {!! csrf_field() !!}
                      <a class="pageapp-login-logo" href="#"></a>
                      <div class="pageapp-login-field">
                          <i class="fa fa-user"></i>
                          <input type="text" value="Username" onfocus="if (this.value=='Username') this.value = ''" onblur="if (this.value=='') this.value = 'Username'">
                      </div>
                      <div class="pageapp-login-field">
                          <i class="fa fa-lock"></i>
                          <input type="password" value="password" onfocus="if (this.value=='password') this.value = ''" onblur="if (this.value=='') this.value = 'password'">
                      </div>
                      <button type="submit" class="pageapp-login-button button button-small button-green button-fullscreen">- Login -</button>
                      <div class="decoration"></div>
                      <a href="#" class="facebook-login facebook-color"><i class="fa fa-facebook"></i>Login with Facebook</a>
                      <a href="#" class="twitter-login twitter-color no-bottom"><i class="fa fa-twitter"></i>Signin with Twitter</a>
                    </form>
                  </div>
              </div>
              <div class="overlay bg-black"></div>
              <a href="pageapp-login2.html" class="left-button"><i class="fa fa-square"></i>Boxed Version</a>
              <a href="page-login.html" class="right-button">Page Version <i class="fa fa-star"></i></a>
          </div>

          <!-- End of entire page content-->
      </div>

  <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>



<!--Fly up share box and notifications go here -->
<!--These are the only features that should be placed outside the all-elements class-->


@stop
