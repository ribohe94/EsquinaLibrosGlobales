@extends('layouts.master')

@section('content')
<!--Page content goes here, fixed elements go above the all elements class-->
          <div class="homepage-slider container-fullscreen">
          <div class="pageapp-login bg-5 cover-screen">
              <div class="pageapp-login-content cover-center">
                  <div class="unboxed-layout">
                    <form method="POST" action="/auth/begin">
                      {!! csrf_field() !!}
                      <a class="pageapp-login-logo" href="#"></a>
                      <div class="pageapp-login-field">
                          <i class="fa fa-user"></i>
                          <input type="text" type="email" name="email" id="email" value="email" onfocus="if (this.value=='email') this.value = ''" onblur="if (this.value=='') this.value = 'Email'">
                      </div>
                      <div class="pageapp-login-field">
                          <i class="fa fa-lock"></i>
                          <input type="password" name="password" id="password" value="password" onfocus="if (this.value=='password') this.value = ''" onblur="if (this.value=='') this.value = 'password'">
                      </div>
                        <input  class="fa fa-lock" type="checkbox" name="remember" id="remember" checked>
                      <button type="submit" class="pageapp-login-button button button-small button-green button-fullscreen">Login</button>
                      <div class="decoration"></div>
                      <a href="/signup" class="pageapp-login-button button button-small button-blue button-fullscreen">Sign Up</a>
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
