@section('page', 'welcome')
@extends('guest')
@section('title', '')

@section('content')
    <div class="welcome text-center">
        <h1 id="watt-text" class="text-center">
            <b class="text-center"><span class="red">Watt</span><span>Aid</span></b><br>
        </h1>
    </div>

    <section class="promo_box">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="promo_content no-padd">
                        <h3>Your one-stop site for power information.</h3>
                        <p>Whatever you need. Wherever you are.</p>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <a class="btn btn-large btn-default" href="/register">
                        <i class="fa fa-user-o"></i>
                        Sign Up Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--start info service-->
        <section class="info_service">
            <div class="container">
                <div class="row sub_content">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="service_3_item">
                            <i class="fa fa-lightbulb-o"></i>
                            <h3>Power Services</h3>
                            <p>Integer ultrices scelerisque nulla fringilla. Praesent leo massa, ullamcorper venenatis tempor.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="service_3_item">
                            <i class="fa fa-briefcase"></i>
                            <h3>Power Information</h3>
                            <p>Integer ultrices scelerisque nulla fringilla. Praesent leo massa, ullamcorper venenatis tempor.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="service_3_item">
                            <i class="fa fa-rocket"></i>
                            <h3>Power Education</h3>
                            <p>Integer ultrices scelerisque nulla fringilla. Praesent leo massa, ullamcorper venenatis tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end info service-->

    <!--Start recent work-->
    <section class="latest_work">
        <div class="container">
            <div class="row sub_content">
                <div class="carousel-intro">
                    <div class="col-md-12">
                        <div class="dividerLatest">
                            <h4>Recent Work</h4>
                            <div class="gDot"></div>
                        </div>
                        <div class="carousel-navi">
                            <div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
                            <div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <div class="jcarousel recent-work-jc">
                <ul class="jcarousel-list">
                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_1.jpg" alt="" />
                                    <a href="img/portfolio/full/portfolio_1.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    
                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_2.jpg" alt="" />
                                    <a href="img/portfolio/full/portfolio_2.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Touch and Swipe</h5>
                                    <span>Technology</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_3.jpg" alt="" />
                                    <a href="img/portfolio/full/portfolio_3.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Working in Shop</h5>
                                    <span>Photography</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    
                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_4.jpg" alt="" />
                                    <a href="img/portfolio/full/portfolio_4.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Sailing</h5>
                                    <span>Photography</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_5.jpg" alt="" />
                                    <a href="img/portfolio/full/portfolio_5.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>House</h5>
                                    <span>Architecture</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_1.jpg" alt="" />
                                    <a href="portfolio_single.html" class="hover-link alone"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Nevide</h5>
                                    <span>Motion</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    
                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_2.jpg" alt="" />
                                    <a href="img/portfolio/full/portfolio_2.jpg" class="hover-zoom mfp-image"><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Sunrise</h5>
                                    <span>Photography</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    
                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/portfolio_3.jpg" alt="" />
                                    <a href="img/portfolio/full/portfolio_3.jpg" class="hover-zoom mfp-image"><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Vena Branding</h5>
                                    <span>Identity</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Start recent work-->
        
    <section class="fetaure_bottom">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="dividerLatest">
                        <h4>WattAid Features</h4>
                        <div class="gDot"></div>
                    </div>
                    
                    <div id="tabs">
                        <ul class="tabs">  
                            <li class="active"><a href="#tab1">Services</a></li>
                            <li><a href="#tab2">Info</a></li>
                            <li class="last"><a href="#tab3"><i class="fa fa-comments-o"></i></a></li>
                        </ul><!-- /# end tab links --> 
                        
                        <div class="tab_container"> 
                            <div id="tab1" class="tab_content"> 
                                <h3>Excellent Power Services</h3>
                                <p>Scepter Concept Engineering. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum. Donec in ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo ad gravida.</p>
                                <ul class="list_style circle">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Donec convallis, metus nec tempus aliquet</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Aenean commodo ligula eget dolor</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Cum sociis natoque penatibus mag dis parturient</a></li>
                                </ul>
                            </div><!-- end popular posts --> 
                            
                            <div id="tab2" class="tab_content">  
                                <h3>Up to date information</h3>
                                <p>Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum. Donec in ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo ad gravida.</p>
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Donec convallis, metus nec tempus aliquet</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Aenean commodo ligula eget dolor</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Cum sociis natoque penatibus mag dis parturient</a></li>
                                </ul>
                            </div><!-- end popular articles --> 
                            
                            <div id="tab3" class="tab_content">  
                                <h3>Online interaction with other users</h3>
                                <p>Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum. Donec in ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo ad gravida.</p>
                                <ul class="list_style square">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Donec convallis, metus nec tempus aliquet</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Aenean commodo ligula eget dolor</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Cum sociis natoque penatibus mag dis parturient</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="dividerLatest">
                        <h4>Featured Posts</h4>
                        <div class="gDot"></div>
                    </div>
                    <p>Cras mattis consectetur purus sit amet fermen. Lorem ipsum dolor sit amet, consec adipiscing elit. Maecenas sed diam eget risus varius bland sit amet non fringilla ullamcorper magna. Nulla eu mi magna. Etiam suscipit commodo ad gravida.</p>
                    <ul class="list_style circle">
                        <li><a href="#"><i class="fa fa-angle-right"></i> Donec convallis, metus nec tempus aliquet</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Aenean commodo ligula eget dolor</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Cum sociis natoque penatibus mag ipsum</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet cons adipiscing</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Accumsan vulputate faucibus turpis dictum</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Nullam ultrices eros accumsan vulputate</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Nunc aliquet tincidunt metus sit amet</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="clients">
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="dividerLatest">
                        <h4>Powered By</h4>
                        <div class="gDot"></div>
                    </div>
                    
                    <div class="our_clients">
                        <ul class="client_items clearfix">
                            <li>
                                <a class="bwWrapper text" href="services.html"  data-placement="bottom" data-toggle="tooltip" title="Scepter Concept" ><img src="img/scepterconcept.png" alt="" /></a>
                            </li>
                        </ul><!--/ .client_items-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
