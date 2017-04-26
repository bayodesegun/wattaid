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
                        <b>Get Started</b>
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
                            <h3>Power Plan</h3>
                            <p>Get up-to-date information on how and when power would be supplied to area, new consumers requirements for connection.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="service_3_item">
                            <i class="fa fa-briefcase"></i>
                            <h3>Power Information</h3>
                            <p>Wattaid enables efficient dissemination of information. You can <a href="/register">create an account</a> to interact with other power consumers in your area.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="service_3_item">
                            <i class="fa fa-rocket"></i>
                            <h3>Power Education</h3>
                            <p>Dos and Don’ts from Discos to consumers, faults/power problems. Get information on the latest happenings with the distribution companies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end info service-->

    <!--Start DISCOS-->
    <section class="latest_work">
        <div class="container">
            <div class="row sub_content">
                <div class="carousel-intro">
                    <div class="col-md-12">
                        <div class="dividerLatest">
                            <h4>Distribution Companies</h4>
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
                    <!-- Distribution company -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <iframe width="400" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://ekedp.com">
                                    </iframe>
                                </div>
                                <figcaption class="item-description">
                                    <a href="https://ekedp.com"><p>Eko Electricity Distribution Company</p></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    
                    <!-- Distribution company -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <iframe width="400" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://phed.com.ng/">
                                    </iframe>
                                </div>
                                <figcaption class="item-description">
                                    <a href="http://phed.com.ng"><p>Port Harcourt Electricity Distribution Company</p></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Distribution company -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <iframe width="400" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://yedc.com.ng/">
                                    </iframe>
                                </div>
                                <figcaption class="item-description">
                                    <a href="http://yedc.com.ng"><p>Yola Electricity Distribution Company</p></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    
                    <!-- Distribution company -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <iframe width="400" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://bedcpower.com/">
                                    </iframe>
                                </div>
                                <figcaption class="item-description">
                                    <a href="http://bedcpower.com"><p>Benin Electricity Distribution Company</p></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Distribution company -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <iframe width="400" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ibedc-ng.com/">
                                    </iframe>
                                </div>
                                <figcaption class="item-description">
                                    <a href="http://ibedc-ng.com"><p>Ibadan Electricity Distribution Company</p></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>

                    <!-- Distribution company -->
                    <li class="col-sm-3 col-md-3 col-lg-3">
                        <div class="recent-item">
                            <figure>
                                <div class="bwWrapper touching medium">
                                    <iframe width="400" height="215" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ikejaelectric.com/">
                                    </iframe>
                                </div>
                                <figcaption class="item-description">
                                    <a href="http://ikejaelectric.com"><p>Ikeja Electricity Distribution Company</p></a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End DISCOS-->
        
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
                                <h3>Informative</h3>
                                <p>Wattaid brings the Discos to the consumers for free in an informal and way enhances the understanding of consumer needs and. It aids the efficient dissemination   information between Discos and consumers nationwide.</p>
                                <ul class="list_style circle">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Efficient dissemination of information</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Power plans</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Dos and Don’ts from Discos to consumers</b></a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Referral to the individual website of the 11 Discos in the country</b></a></li>
                                </ul>
                            </div><!-- end popular posts --> 
                            
                            <div id="tab2" class="tab_content">  
                                <h3>Dynamic</h3>
                                <p>The site is daily updated with information from users and the power distribution companies. You can get to know the daily power plan for your area.</p>
                                <ul class="list_style">
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Daily power plan.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Help on power problems.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Interact with other power users.</a></li>
                                </ul>
                            </div><!-- end popular articles --> 
                            
                            <div id="tab3" class="tab_content">  
                                <h3>Interactive</h3>
                                <p><a href="/register">Create an account</a>, and you'll have access to posts from all power users in your area. You can post questions or observations, as well as give answers to questions.</p>
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
