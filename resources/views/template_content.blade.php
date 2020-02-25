@extends('template')

@section('content')

    <!--Header-Area-->
    <header class="header-area overlay" id="home-area">
        <div class="vcenter">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <div class="header-text">
                            <div class="wow fadeInUp upper latter-space" data-wow-delay="0.2s">WE PROVIDE BEST BUSINESS SOLUTION</div>
                            <h2 class="header-title wow fadeInUp upper" data-wow-delay="0.4s">One State One Township</h2>
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <a href="#contact-area" class="bttn bttn-lg bttn-primary">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="smoth">
            <a href="#about-area" class="scrolldown"><i class="icofont icofont-bubble-down"></i></a>
        </div>
    </header>
    <!--Header-Area-/-->

    <!-- About-Area -->
    <section class="section-padding gray-bg" id="about-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="video-box">
                        <img src="{{asset('frontend/images/video-image.png')}}" alt="">
                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="video-bttn"><img src="images/video-button.png" alt=""></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1 wow fadeInUp">
                    <div class="page-title">
                        <h2 class="title">Why Choose Us?</h2>
                        <ul class="tabs-list">
                            <li class="active"><a data-toggle="pill" href="#our_mission">Our Mission</a></li>
                            <li><a data-toggle="pill" href="#our_vission">Our Vission</a></li>
                            <li><a data-toggle="pill" href="#our_support">Our Support</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="our_mission" class="tab-pane fade in active">
                            <h4 class="upperabout thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upperabout">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                        <div id="our_vission" class="tab-pane fade">
                            <h4 class="upperabout thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upperabout">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                        <div id="our_support" class="tab-pane fade">
                            <h4 class="upperabout thing">SINCE WE HAVE 25 YEARS </h4>
                            <h3 class="upperabout">EXPERIENCE IN THIS PASSION</h3>
                            <p>Aenean rutrum, lorem sed cursus tristique, turpis velit ullamcorper ligula, id pretium elit augue in libero. Suspendisse in porttitor orci. Pellentesque vel gravida augue.</p>
                            <br />
                            <a href="#" class="bttn bttn-sm bttn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area / -->

    <!-- Service Area -->
    <section class="section-padding" id="service-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Our Best Service</h2>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-idea"></i>
                        </div>
                        <h4>Unique Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="icofont icofont-code-alt"></i>
                        </div>
                        <h4>Clean Layout</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="icofont icofont-monitor"></i>
                        </div>
                        <h4>Well Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1.2s">
                        <div class="box-icon">
                            <i class="icofont icofont-chart-bar-graph"></i>
                        </div>
                        <h4>Pro Developing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="1s">
                        <div class="box-icon">
                            <i class="icofont icofont-files"></i>
                        </div>
                        <h4>Well Documented</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="box-icon">
                            <i class="icofont icofont-money-bag"></i>
                        </div>
                        <h4>Quick Marketing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area  / -->

    <!-- count area -->
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row counters">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="count-icon">
                            <i class="icofont icofont-bag-alt"></i>
                        </div>
                        <span class="count_title">Project Complete</span>
                        <h2 class="count">1172</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="count-icon">
                            <i class="icofont icofont-emo-simple-smile"></i>
                        </div>
                        <span class="count_title">Happy Client’S</span>
                        <h2 class="count">1000</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="count-icon">
                            <i class="icofont icofont-businessman"></i>
                        </div>
                        <span class="count_title">Total Client’s</span>
                        <h2 class="count">1200</h2>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <div class="count-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="count-icon">
                            <i class="icofont icofont-money"></i>
                        </div>
                        <span class="count_title">Wining Award</span>
                        <h2 class="count">1172</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Count Area / -->

    <!-- Contact-Area -->
    <section class="section-padding" id="contact-area">
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h3 class="bar-title">Contact Now</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="contact-form">
                            <form action="process.php" id="contact-form" method="post">
                                <div class="form-double">
                                    <input type="text" id="form-name" name="form-name" placeholder="Full Name" required="required">
                                    <input type="number" placeholder="Phone Number">
                                </div>
                                <div class="form-double">
                                    <input type="email" name="form-email" name="email" id="form-email" placeholder="Your Email" required="required">
                                    <input type="text" name="form-subject" id="form-subject" placeholder="Subject" required="required">
                                </div>
                                <textarea name="form-message" id="message" id="form-message" rows="5" required="required" placeholder="Message"></textarea>
                                <button class="bttn bttn-primary">Send Now</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="contact-info">
                            <ul class="info">
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-social-google-map"></i>
                                    </span> 160 L ink Road <br /> Dhaka-1216, Bangladesh
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-ui-cell-phone"></i>
                                    </span> (+00) 99 33 247
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <i class="icofont icofont-envelope"></i>
                                    </span> Info@fabiocode.com
                                </li>
                            </ul>
                            <div class="social-menu-2">
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-skype"></i></a>
                                <a href="#"><i class="icofont icofont-social-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area / -->
    <div id="maps" style="margin-top: 160px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.0510047255752!2d96.56040423063666!3d20.62677773247648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ceb7996093ec95%3A0xf17bab75fc64bbb8!2sKalaw!5e0!3m2!1sen!2smm!4v1582538916243!5m2!1sen!2smm" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>


@endsection

