@include('partial.header',['title' => 'About Us'])

    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        About Us
                    </h3>

                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <section class="section-content-block">
    
        <div class="container">
            
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="about-us-container theme-custom-box-shadow">

                        <div class="row section-heading-wrapper margin-bottom-11">

                            <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                <h2><strong>Who We Are?</strong></h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                            </div> <!-- end .col-sm-10  --> 

                        </div>

                        <div class="about-details"> 

                            <p>
                                The Emergency Blood Hub is a very handy application with a very important goal. 
                                It aim at providing a critical blood donor to those in life or death situations. 
                                It is created with the sole purpose of saving lives. 
                            </p>

                            <p>
                                The EBH connects users in such a way that if any case arises in which emergency blood
                                donation might be required, the user can send out a request demanding a certain blood
                                type. Notifications would be available to all the users, which would tell what type of
                                blood is required by someone and in what particular area. 
                            </p>

                            <p>
                                People willing to help can respond to that notification while sharing their contact information
                                with the person in need as well. Users are provided with blood group details of all the contacts
                                in the phone book that also have the application installed. In this way they can request for a
                                blood donor from their known links.
                            </p>
                            <p>
                                Our team would only consider this initiative a success if it manages to deliver help to someone when
                                they might need it the most.
                            </p>

                        </div> <!--  end .about-details -->  

                    </div>

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->  


                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <figure class="about-img theme-custom-box-shadow">
                        <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true" href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>                                
                        <img src="images/about_feat_bg.jpg" alt="about" />
                    </figure> <!-- end .cause-img  -->

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->                    

            </div> <!--  end .row  -->
        </div>

    </section> <!--  end .section-about-us -->

    <section class="section-content-block section-custom-bg" data-bg_img='images/team_feat_bg.jpg' data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">

        <div class="container margin-top-48 margin-bottom-48 wow fadeInLeft">
            
            <div class="row">

                    <div class="col-md-4 offset-md-4"></div>
                    <div class="col-md-4 col-sm-12">

                        <div class="team-layout-1 theme-custom-box-shadow theme-custom-box-animation">

                            <figure class="team-member">
                                <a href="#" title="MELISSA MUNOZ">
                                    <img src="images/team_6.jpg" alt="MELISSA MUNOZ" />
                                </a>

                            </figure> <!-- end. team-member  -->

                            <article class="team-info">
                                <h3>MELISSA MUNOZ</h3>                                   
                                <h4>Founder</h4>
                            </article>

                            <div class="team-content">

                                <div class="team-social-share text-center clearfix">
                                    <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                    <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                    <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                    <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                </div> <!-- end .author-social-box  -->

                            </div>                             

                        </div> <!--  end team layout-1 -->

                    </div> <!--  end .col-md-4 col-sm-12  -->

                    


                </div> <!-- end .row  --> 
                
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a class="btn btn-theme margin-top-24" href="#">Become A Volunteer</a>
                    </div>
                </div>

        </div> <!-- end .container  -->

    </section>

    <section class="section-content-block section-secondary-bg" >

        <div class="container wow fadeInUp">
            
            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2>OUR ACHIEVEMENTS</h2>   
                    <h4>We have been working since 1973 with a prestigious vision to helping patient to provide blood.</h4>
                </div> <!-- end .col-sm-12  --> 
                
            </div>
            
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-heartbeat icon"></i>
                        <span class="counter">{{count($communities)}}</span>                             
                        <h4 class="text-capitalize">Communities</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-stethoscope icon"></i>
                        <span class="counter">{{count($donations)}}</span>                            
                        <h4 class="text-capitalize">Donations</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-users icon"></i>
                        <span class="counter">{{count($donors)}}</span>                            
                        <h4 class="text-capitalize">Donors</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-building icon"></i>
                        <span class="counter">{{count($blood_requests)}}</span>                            
                        <h4 class="text-capitalize">Blood Requests</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->


            </div> <!-- end row  -->

        </div> <!--  end .container  -->

    </section>

    <section class="cta-section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>We are helping people from 40 years</h2>
                    <p>
                        You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                    </p>
                </div> <!--  end .col-md-8  -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a class="btn btn-cta-1 wow bounceIn" href="#">Request Appointment</a>
                </div> <!--  end .col-md-4  -->
            </div> <!--  end .row  -->
        </div>
    </section> 
    
@include('partial.footer')