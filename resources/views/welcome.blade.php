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
                        <p>You're not alone. Whatever you need. Wherever you are.</p>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <a class="btn btn-large btn-default" href="/register">
                        <b>Sign Up Now</b>
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
                            <p>Do you need inverters, solar panels, or any power device installed? Scepter Concept Engineering offers all these services, and more.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="service_3_item">
                            <i class="fa fa-briefcase"></i>
                            <h3>Power Information</h3>
                            <p>Get up to date information on the load shedding plan in your area. Interact with other power consumers in your area.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="service_3_item">
                            <i class="fa fa-rocket"></i>
                            <h3>Power Education</h3>
                            <p>Have any challenge with any of your power devices? Post it here. You can post questions, and answer questions.</p>
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
                                    <img src="img/portfolio/work_1.png" alt="" />
                                    <a href="img/portfolio/full/portfolio_1.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Inverters</h5>
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
                                    <img src="img/portfolio/work_2.png" alt="" />
                                    <a href="img/portfolio/full/portfolio_2.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Inverters</h5>
                                    <span>Installation</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Recent Work Item -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <img src="img/portfolio/work_3.png" alt="" />
                                    <a href="img/portfolio/full/portfolio_3.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>High Power Inverters</h5>
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
                                    <img src="img/portfolio/work_4.png" alt="" />
                                    <a href="img/portfolio/full/portfolio_4.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Solar Power</h5>
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
                                    <img src="img/portfolio/work_5.png" alt="" />
                                    <a href="img/portfolio/full/portfolio_5.jpg" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                </div>
                                <figcaption class="item-description">
                                    <h5>Power Banks</h5>
                                    <span>Technology</span>
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
                                <p>Scepter Concept Engineering provices products such as off- grid inverters (on-line and off-line inverter), Solar Panels with charge controllers of different ranges, Electrical wiring and installation of electrical panels.</p>
                                <ul class="list_style circle">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Competent Engineers and Technicians.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Top-notch testing equipment.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Strict measures towards achieving <b>zero fault occurences.</b></a></li>
                                </ul>
                            </div><!-- end popular posts --> 
                            
                            <div id="tab2" class="tab_content">  
                                <h3>Up to date information</h3>
                                <p>The site is daily updated with information from users and the power distribution companies. You can get to know the daily power plan for your area.</p>
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Daily power plan.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Help on power problems.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Interact with other power users.</a></li>
                                </ul>
                            </div><!-- end popular articles --> 
                            
                            <div id="tab3" class="tab_content">  
                                <h3>Online interaction with other users</h3>
                                <p><a href="/register">Create an account</a>, and you'll see have access to posts from all power users in your area. You can post questions or observations, as well as give answers to questions.</p>
                                <ul class="list_style square">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Make and view posts based on location.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Give or receive help in real time.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> You are not alone</a></li>
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
                    <p>This site is updated every minute with posts and comments from power users across the nation. Stay up-to-date with the most recent happenings in the power sector across the country!</p>
                    @if ($featured_posts)
                        <ul class="list_style circle">
                            @if (count($featured_posts) > 0)
                                @foreach ($featured_posts as $featured_post)
                                    <li><a href="#"><i class="fa fa-angle-right"></i> <a href="/post/view?id={{$featured_post->id}}"><?php echo $cont = substr(strip_tags($featured_post->post_title),0,40); if (strlen($cont) < strlen($featured_post->post_title)) echo "..." ?></a></li>
                                @endforeach
                            @endif 
                        </ul>   
                    @endif
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
