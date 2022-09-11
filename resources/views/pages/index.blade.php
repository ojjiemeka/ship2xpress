@extends('layouts/m_app')
@section('content')
    <div class="mian-content">
        <!-- main image slider container -->
        <div class="slide-window">
            <div class="slide-wrapper" style="width: 300%;">
                <div class="slide">
                    <div class="slide-caption">
                        <!--
                        <p>The right choice</p> -->
                        <h3>Find the right service your <span>business</span> needs.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="/contact">
                                Contact Us</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-caption">
                        <!-- <p>Ready to go</p> -->
                        <h3>We are among the world's largest <span>Logistics</span> specialist. </h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="/contact">
                                Contact Us</a>
                        </div>

                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-caption">
                        <!--
                        <p>Mail Services</p> -->
                        <h3>Whatever you need <span>Serviuno</span> Courier helps you succeed.</h3>
                        <div class="cont-btn">
                            <a class="btn text-uppercase" href="/contact">
                                Contact Us</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slide-controller">
                <div class="slide-control-left">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
                <div class="slide-control-right">
                    <div class="slide-control-line"></div>
                    <div class="slide-control-line"></div>
                </div>
            </div>
        </div>
        <!-- main image slider container -->

    </div>
    <!-- end of main image slider container -->
    <!-- banner-text -->
    <!-- ab -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <div class="n-right-w3ls">
                    <form action="/search" method="get">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" name="search"
                                placeholder="Tracking number / OTP here..." required="">
                        </div>

                        <div class="form-group">
                            <input class="form-control submit text-uppercase" type="submit" value="Track">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
            <div class="row mt-lg-5 mt-md-4 mt-4">
                <div class="col-lg-4 about-in text-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><strong>New to</strong> <span style="color:#ff4e00;">Serviuno</span>
                                Courier Delivery?</h5>
                            <p class="card-text">We help you find the right service for you and your business. Take a glance
                                at a list of our services <a href="/services" style="color:#ff4e00;">here</a>.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 about-in text-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-decoration:underline;"><strong>Logistics</strong> Services
                            </h5>
                            <p class="card-text">We are among the world's largest logistics specialist and the best in
                                Spain, from where we originated.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 about-in text-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-decoration:underline;">Mail Services</h5>
                            <p class="card-text">Whatever you need, Serviuno Courier helps you succeed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 about-in text-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-decoration:underline;">Sea Shipping</h5>
                            <p class="card-text">We uniquely combine local know-how and unrivaled personal customer service
                                with global reach, global strength and global expertise.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 about-in text-left">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-decoration:underline;">Air Transport</h5>
                            <p class="card-text">Great service calls for global thinking and as one of the world's leading
                                integrated logistics provider, we have a great deal to offer in the Air Transport industry
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- //ab -->
    <!-- banner-bottom-w3ls -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 about-img">
                </div>
                <div class="col-lg-6 about-right">
                    <h4>Who We Are</h4>
                    <h3>We give you complete control of your shipments.</h3>
                    <p class="my-4">Serviuno Courier service is an end-to-end online shipping and fulfillment solution for
                        small-to-medium sized businesses. With a focus on the needs of Online retailers, Serviuno Courier is
                        integrated with the leading eCommerce platforms and marketplaces including eBay, Magneto, Shopify,
                        Etsy, Zibbett, BigCommerce, Volusion and PrestaShop.</p>
                    <p class="my-4">While we look after your shipping needs, you have more time to look after other aspects
                        of your business.</p>
                    <div class="log-in mt-md-5 mt-3">
                        <a class="btn text-uppercase" href="/about">Read More</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-w3ls -->

    <!-- /services -->
    <section class="banner-bottom-w3ls py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">Services We Offer</h3>
                <div class="row middle-grids">
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-ship mb-2"></i>
                                <h5 class="card-title my-3">No custom Procedures</h5>
                                <p class="card-text">We take care of everything, just wait in the comfort of your home.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-plane mb-2"></i>
                                <h5 class="card-title my-3">Air Transport</h5>
                                <p class="card-text">Air Freight, delivering in no time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-truck mb-2"></i>
                                <h5 class="card-title my-3">Recoeve it at Home</h5>
                                <p class="card-text">Select where you want to receive your packages, at home or at one of
                                    our authorized branches</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row middle-grids">
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fas fa-box mb-2"></i> -->
                                <h5 class="card-title my-3">Repacking</h5>
                                <p class="card-text">We repackage your purchases, to eliminate the excessive volume by the
                                    original packaging of your packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fab fa-cc-paypal mb-2"></i> <i class="fab fa-bitcoin mb-2"></i> <i
                                    class="fas fa-euro-sign mb-2"></i>
                                <h5 class="card-title my-3">Multiple Payment Options</h5>
                                <p class="card-text">Make the payment of your bills easily and securely using your credit
                                    card, Bitcoin, S.E.P.A. (Bank Transfers not Availbale for now)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fas fa-clipboard-list"></i> -->
                                <h5 class="card-title my-3">Short Delivery Time</h5>
                                <p class="card-text">After you pay your bill, you will receive your purchases within a short
                                    time usually 7days depending on what is being sent, (Sending hard currencies takes
                                    longer to clear)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
    <!-- /bottom-last -->
    <section class="bottom-last py-5 text-center">
        <div class="bottom-bg">
            <h3>Imagination… What we can easily see is only a small percentage of what is possible.</h3>

        </div>
    </section>
    <!-- //bottom-last -->
    <!--/testimonials-->
    <section class="clients py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
                <h3 class="tittle text-center mb-md-5 mb-4">Some word from our Clients</h3>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">
                                <p>"I have been doing business with Serviuno Courier service for multiple years and I can
                                    say I haven't been disappoinnted. Using their service is fast and easy. Fast service and
                                    professionalism is what you can expect from their staff. When I need to get it there in
                                    a hurry I use Serviuno."</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/estaban.jpeg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Estaban Fererra</h5>
                                    <p>Madrid <span>(Spain)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">

                            <div class="feedback-top">
                                <p>"Terrific service. I can't say enough good about my experience with them. I asked them to
                                    provide some very-out-of-the-ordinary shipping needs which had been turned down by
                                    another courier but Serviuno came through for me. They did exactly what I asked them to
                                    do. Their cost was amazingly low too considering what they did for me. Thanks Serviuno!"
                                </p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/steve.jpeg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Steven Wilson</h5>
                                    <p>Florida
                                        <span>(United States)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">
                                <p>"On numerous occasions, I have had the need to use Serviuno Courier in emergency
                                    situations, when notice given to Seriuno was extremely short. They have always been
                                    courteous, rompt, and professional. For every reasonable pricing, Serviuno accommodated
                                    our needs without hesitation. I would recommend Serviuno to anyone needing delivery
                                    services. Whether my needs for deliveries were large, small, scheduled or emergency,
                                    Serviuno was and is the best!"</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/peter.jpeg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Peter Guptill</h5>
                                    <p>Chicago <span>(United States)</span></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">

                            <div class="feedback-top">
                                <p>"The first time I used the delivery service I had no idea what I was doing, the customer
                                    support officer was very helpful at walking me throught the process. I will continue to
                                    use them and refer them to all my friends."</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/linda.jpeg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>Linda Daniels</h5>
                                    <p>Merseyside
                                        <span>(Liverpool, United Kingdom)</span>
                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="feedback-info text-left">
                            <div class="feedback-top">
                                <p>"Serviuno is a great, local delivery service. The driver showed up in uniform and was
                                    very polite. The customer service people in the office were very friendly when taking my
                                    information. I recommend this service."</p>
                            </div>
                            <div class="feedback-grids">
                                <div class="feedback-img">
                                    <img src="images/james.jpeg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <div class="feedback-img-info">
                                    <h5>James Maddison</h5>
                                    <p>Dublin <span>(Ireland)</span></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//testimonials-->

@endsection
