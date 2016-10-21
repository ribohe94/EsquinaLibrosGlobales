@extends('layouts.master')

@section('content')

<!--Page content goes here, fixed elements go above the all elements class-->

            <div class="homepage-slider container-fullscreen">
                <div class="homepage-slider-transition" data-snap-ignore="true">
                    <div class="homepage-slider-item">
                        <h5 class="left-text">Welcome, stranger</h5>
                        <p class="left-text">Swipe the image to begin.</p>
                        <img src="images/pictures/4l.jpg" alt="img">
                        <div class="overlay bg-black"></div>
                    </div>
                    <div class="homepage-slider-item">
                        <h5 class="center-text">This slider has CSS3 transitions</h5>
                        <p class="center-text">And they are just awesome!</p>
                        <img src="images/pictures/5l.jpg" alt="img">
                        <div class="overlay bg-black"></div>
                    </div>
                    <div class="homepage-slider-item">
                        <h5 class="right-text">Just add a simple class</h5>
                        <p class="right-text">And you got yourself transitions!</p>
                        <img src="images/pictures/6l.jpg" alt="img">
                        <div class="overlay bg-black"></div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="decoration"></div>
                <div class="container large-title no-bottom">
                    <h4 class="center-text">Touch your page</h4>
                    <p class="center-text">
                        A user experience, design focused template, created to make navigating as easy and
                        as comfortable as possible even on huge screens! Swipe to the left!
                    </p>

                    <div class="center-socials">
                        <a href="#" class="facebook-color facebook-social"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google-color google-social"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="twitter-color twitter-social"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="decoration"></div>
            </div>

            <!-- Content Heding -->
            <div class="content-heading container-fullscreen">
                <h4>features</h4>
                <p>Perfecting everything!</p>
                <i class="fa fa-star-o"></i>
                <div class="overlay"></div>
                <img src="images/pictures/1w.jpg" alt="img">
            </div>

            <div class="content">
                <div class="decoration"></div>
                <h4 class="center-text">App Styles and Page Templates</h4>
                <p class="center-text">
                    Are you ready to see all the awesome mobile specific features we have for you?
                    These features are designed to work and mimic your  mobile phone apps.

                    Simple, elegant, and coded using the latest web standards for maximum compatibility
                </p>
                <div class="one-half-responsive">
                    <img src="images/demo_img2.png" class="responsive-image full-bottom" alt="img">
                </div>
                <div class="decoration hide-if-responsive"></div>
                <div class="one-half-responsive last-column">
                    <div class="one-half">
                        <ul class="font-icon-list larger-font">
                            <li><i class="fa fa-user"></i>User List</li>
                            <li><i class="fa fa-refresh"></i>Activity</li>
                            <li><i class="fa fa-calendar-o"></i>Calendar</li>
                            <li><i class="fa fa-file-o"></i>Coverpage</li>
                            <li><i class="fa fa-bold"></i>Typography</li>
                            <li><i class="fa fa-flash"></i>jQuery</li>
                            <li><i class="fa fa-home"></i>Landing</li>
                            <li><i class="fa fa-exclamation"></i>404 Page</li>
                            <li><i class="fa fa-clock-o"></i>Soon Page</li>
                            <li><i class="fa fa-navicon"></i>Timeline </li>
                            <li><i class="fa fa-file-o"></i>Coverpage</li>
                            <li><i class="fa fa-lock"></i>Login Page</li>
                        </ul>
                    </div>
                    <div class="one-half last-column">
                        <ul class="font-icon-list larger-font ">
                            <li><i class="fa fa-power-off"></i> CSS3 But</li>
                            <li><i class="fa fa-comment-o"></i>Bubbles</li>
                            <li><i class="fa fa-apple"></i>Detection</li>
                            <li><i class="fa fa-toggle-on"></i>OS Toggles</li>
                            <li><i class="fa fa-share-alt"></i>Share</li>
                            <li><i class="fa fa-pie-chart"></i>Charts</li>
                            <li><i class="fa fa-warning"></i>Updates</li>
                            <li><i class="fa fa-youtube-play"></i>Videos</li>
                            <li><i class="fa fa-envelope-o"></i>Contact</li>
                            <li><i class="fa fa-pencil"></i>Blog Page</li>
                            <li><i class="fa fa-picture-o"></i>Portfolios</li>
                            <li><i class="fa fa-camera full-bottom"></i>Galleries</li>
                        </ul>
                    </div>
                </div>
                <div class="decoration"></div>
            </div>

            <!-- Content Heding -->
            <div class="content-heading container-fullscreen">
                <h4>Services</h4>
                <p>The things we love to do, for you!</p>
                <i class="fa fa-cog"></i>
                <div class="overlay"></div>
                <img src="images/pictures/5w.jpg" alt="img">
            </div>

            <!-- Page Content-->
                <div class="decoration"></div>
                <div class="container no-bottom">
                    <!-- Page Columns-->
                    <div class="one-half-responsive">
                        <p class="thumb-left no-bottom">
                            <img src="images/pictures/1s.jpg" alt="img">
                            <strong>Mobile app feel </strong>
                            <em><br>Lorem Ipsum is simply dummy text of the printing and typeset. </em>
                        </p>
                        <div class="thumb-clear"></div>
                    </div>
                    <div class="decoration hide-if-responsive"></div>
                    <div class="one-half-responsive last-column">
                        <p class="thumb-right no-bottom">
                            <img src="images/pictures/2s.jpg" alt="img">
                            <strong>Elite Quality Product</strong>
                            <em><br>Lorem Ipsum is simply dummy text of the printing and typeset. </em>
                        </p>
                        <div class="thumb-clear"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="full-bottom hide-if-mobile"></div>
                    <div class="decoration hide-if-responsive"></div>
                    <div class="one-half-responsive">
                        <p class="thumb-left no-bottom">
                            <img src="images/pictures/3s.jpg" alt="img">
                            <strong>Mobile and Tablet</strong>
                            <em><br>Lorem Ipsum is simply dummy text of the printing and typeset. </em>
                        </p>
                        <div class="thumb-clear"></div>
                    </div>
                    <div class="decoration hide-if-responsive"></div>
                    <div class="one-half-responsive last-column">
                        <p class="thumb-right no-bottom">
                            <img src="images/pictures/4s.jpg" alt="img">
                            <strong>Smooth transitions</strong>
                            <em><br>Lorem Ipsum is simply dummy text of the printing and typeset. </em>
                        </p>
                        <div class="thumb-clear"></div>
                    </div>
                </div>
                <div class="decoration"></div>

                <!-- Content Heading -->
                <div class="content-heading container-fullscreen">
                    <h4>The Staff</h4>
                    <p>Meet our awesome staff!</p>
                    <i class="fa fa-user"></i>
                    <div class="overlay"></div>
                    <img src="images/pictures/6w.jpg" alt="img">
                </div>

                <!-- Page Content-->
                <div class="decoration"></div>
                <!-- Staff Slider-->
                <div class="container">
                    <a href="#" class="next-staff"></a>
                    <a href="#" class="prev-staff"></a>
                    <div class="staff-slider staff-slider-transition" data-snap-ignore="true">
                        <div>
                            <div class="staff-item">
                                <img src="images/pictures/1s.jpg" alt="img">
                                <h4>John Doe</h4>
                                <em>Web Designer</em>
                                <strong>We love quotes, and sometimes it's annoying to see tons of them that you need to scroll to!</strong>
                                <a href="#" class="button button-red button-center">Call</a>
                            </div>
                        </div>
                        <div>
                            <div class="staff-item">
                                <img src="images/pictures/2s.jpg" alt="img">
                                <h4>Jane Hidden</h4>
                                <em>Front End Developer</em>
                                <strong>We love quotes, and sometimes it's annoying to see tons of them that you need to scroll to!</strong>
                                <a href="#" class="button button-green button-center">Text</a>
                            </div>
                        </div>
                        <div>
                            <div class="staff-item">
                                <img src="images/pictures/3s.jpg" alt="img">
                                <h4>Johanna Pear</h4>
                                <em>Business Manager</em>
                                <strong>We love quotes, and sometimes it's annoying to see tons of them that you need to scroll to!</strong>
                                <a href="#" class="button button-blue button-center">Mail</a>
                            </div>
                        </div>
                        <div>
                            <div class="staff-item">
                                <img src="images/pictures/4s.jpg" alt="img">
                                <h4>Mike Grape</h4>
                                <em>Web Designer</em>
                                <strong>We love quotes, and sometimes it's annoying to see tons of them that you need to scroll to!</strong>
                                <a href="#" class="button button-dark button-center">Read More</a>
                            </div>
                        </div>
                        <div>
                            <div class="staff-item">
                                <img src="images/pictures/5s.jpg" alt="img">
                                <h4>Victor Leaf</h4>
                                <em>Front End Developer</em>
                                <strong>We love quotes, and sometimes it's annoying to see tons of them that you need to scroll to!</strong>
                                <a href="#" class="button button-orange button-center">Facebook</a>
                            </div>
                        </div>
                        <div>
                            <div class="staff-item">
                                <img src="images/pictures/6s.jpg" alt="img">
                                <h4>Snow White</h4>
                                <em>Business Manager</em>
                                <strong>We love quotes, and sometimes it's annoying to see tons of them that you need to scroll to!</strong>
                                <a href="#" class="button button-red button-center">Twitter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="decoration"></div>

                <!-- Content Heading-->
                <div class="content-heading container-fullscreen">
                    <h4>Featured Project</h4>
                    <p>Check and enjoy our featured item</p>
                    <i class="fa fa-star-o"></i>
                    <div class="overlay"></div>
                    <img src="images/pictures/7w.jpg" alt="img">
                </div>

                <!-- Page Content-->
                <div class="decoration"></div>
                    <div class="container">
                        <div class="one-half-responsive">
                            <img src="images/demo_img.png" alt="img" class="responsive-image full-bottom">
                        </div>
                        <div class="one-half-responsive last-column">
                            <h3 class="center-if-mobile no-bottom">Awesome project title</h3>
                            <em class="center-if-mobile small-text half-bottom">Awesome project subtitle</em>
                            <p class="center-if-mobile no-bottom">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in quam mauris.
                                Nam condimentum convallis lectus, ac tempus massa eleifend sit amet. Ut nec orci
                                ut urna mollis elementum a et diam. Donec varius orci a convallis convallis.
                            </p>
                        </div>
                    </div>
                <div class="decoration"></div>

                <!-- Content Heading -->
                <div class="content-heading container-fullscreen">
                    <h4>Testimonials</h4>
                    <p>Awesome reviews by our customers!</p>
                    <i class="fa fa-quote-left"></i>
                    <div class="overlay"></div>
                    <img src="images/pictures/6w.jpg" alt="img">
                </div>

                <div class="decoration"></div>
                <div class="quote-slider quote-slider-transition full-bottom" data-snap-ignore="true">
                    <div>
                        <h4>
                            Great all around product, with some of the best documentation I have ever seen. Really thorough and easy to follow!
                            Also the support responsiveness is really fantastic. Extremely happy with everything. Thanks again!
                        </h4>
                        <a href="#">ChrisPizzoDesign - ThemeForest</a>
                    </div>
                    <div>
                        <h4>
                            Exceptional theme. Completely customisable, the best customer service I've ever had from a theme/plugin. Not only are
                            they fast but polite and don't make you feel like a doofus even when you are probably being one.
                        </h4>
                        <a href="#">larzick27 - ThemeForest</a>
                    </div>
                    <div>
                        <h4>
                            One of the best themes I've used so far and is very well documented, coded and very clean. Got it intergrated with
                            wordpress in less than an hour! But this is an amazing template built with a load of features!
                        </h4>
                        <a href="#">ramseycosay18 - ThemeForest</a>
                    </div>
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
    </div>
    <a href="#" class="back-to-top-badge"><i class="fa fa-caret-up"></i>Back to top</a>
</div>


<!--Fly up share box and notifications go here -->
<!--These are the only features that should be placed outside the all-elements class-->

<div class="share-bottom">
    <h3>Share Page</h3>
    <div class="share-socials-bottom">
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.themeforest.net/">
            <i class="fa fa-facebook facebook-color"></i>
            Facebook
        </a>
        <a href="https://twitter.com/home?status=Check%20out%20ThemeForest%20http://www.themeforest.net">
            <i class="fa fa-twitter twitter-color"></i>
            Twitter
        </a>
        <a href="https://plus.google.com/share?url=http://www.themeforest.net">
            <i class="fa fa-google-plus google-color"></i>
            Google
        </a>

        <a href="https://pinterest.com/pin/create/button/?url=http://www.themeforest.net/&media=https://0.s3.envato.com/files/63790821/profile-image.jpg&description=Themes%20and%20Templates">
            <i class="fa fa-pinterest-p pinterest-color"></i>
            Pinterest
        </a>
        <a href="sms:">
            <i class="fa fa-comment-o sms-color"></i>
            Text
        </a>
        <a href="mailto:?&subject=Check this page out!&body=http://www.themeforest.net">
            <i class="fa fa-envelope-o mail-color"></i>
            Email
        </a>
        <div class="clear"></div>
    </div>
    <a href="#" class="close-share-bottom">Close</a>
</div>

<div class="top-notification-1 top-notification bg-blue-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-top-notification"><i class="fa fa-times"></i></a>
</div>
<div class="bottom-notification-1 bottom-notification bg-green-dark">
    <h4>Did you know?</h4>
    <p>
        Easy way to make sure your messages get read!
    </p>
    <a href="#" class="close-bottom-notification"><i class="fa fa-times"></i></a>
</div>
<div class="bottom-notification-2 bottom-notification bg-orange-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>
<div class="top-notification-2 top-notification bg-red-dark timeout-notification">
    <h4>Timeout: 5 Seconds</h4>
    <p>
        I'll go away on my own after a few seconds!
    </p>
</div>
@stop
