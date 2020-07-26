    @include('partial.header', ['title' => 'Blood Drive'])

        <!--  PAGE HEADING -->

        <section class="page-header" data-stellar-background-ratio="1.2">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            Blood Drives
                        </h3>

                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->

        <!--  MAIN CONTENT  -->

        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block section-secondary-bg" >

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-left no-img-separator">
                        <h2>ALL BLOOD DRIVES</h2>
                        <span class="heading-separator heading-separator-horizontal"></span>
                        <h4>Encourage new donors to join and continue to give blood. We have total sixty thousands donor centers and visit thousands of other venues on various occasions. </h4>
                    </div> <!-- end .col-sm-12  -->                       

                </div> <!-- end .row  -->

                @foreach ($blood_drive->chunk(2) as $chunk)
                    <div class="row margin-top-48">
                        @foreach ($chunk as $drive)
                            <div class="col-md-6 col-sm-12">
                                <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                                    <figure class="event-img">
                                        <a href="#">
                                            <img src="images/event_1.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="event-info"> 
                                        <a class="event-date" href="#"><i class="fa fa-calendar-o"></i> {{date('d F, Y', strtotime($drive->scheduled_at))}}</a>
                                        <h4>
                                            <a href="#">{{$drive->event_name}}</a>
                                        </h4>
                                    <div class="event-exceprt">{{$drive->description}}</div>
                                        <div class="event-time">
                                            @php
                                                $datetime = explode(" ",$drive->scheduled_at);
                                                $time = $datetime[1];
                                            @endphp
                                            <a href="#"><i class="fa fa-clock-o"></i>{{date("h:ia",strtotime($time))}}</a>
                                            <a href="#"> <i class="fa fa-map-marker"></i> {{$drive->location}}, {{$drive->community->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
                
                
                

            </div> <!--  end .container  --> 

        </section>

        <!-- SECTION CTA  -->   

        <section class="cta-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2>We have been helping people from 40 years</h2>
                        <p>
                            You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                        </p>
                        <a class="btn btn-theme btn-theme-invert margin-top-24" href="#">BECOME VOLUNTEER</a>
                    </div> <!--  end .col-md-8  -->
                </div> <!--  end .row  -->
            </div>
        </section> 

        <!-- CLIENT LOGO SECTION  -->

        <section class="section-content-block section-secondary-bg">

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h2>Our Sponsors</h2>
                        <span class="heading-separator"></span>
                        <h4>The sponsors who give their valuable amount to fulfill our mission.</h4>
                    </div> <!-- end .col-sm-10  -->                      

                </div> <!-- end .row  -->


                <div class="row">

                    <div class="logo-items owl-carousel logo-layout-1 text-center">

                        <div class="client-logo">

                            <img src="images/logo_1.jpg" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_2.jpg" alt="" />

                        </div>


                        <div class="client-logo">

                            <img src="images/logo_3.jpg" alt="" />

                        </div>



                        <div class="client-logo">

                            <img src="images/logo_4.jpg" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_5.jpg" alt="" />

                        </div>



                        <div class="client-logo">

                            <img src="images/logo_6.jpg" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_7.jpg" alt="" />

                        </div>

                        <div class="client-logo">

                            <img src="images/logo_8.jpg" alt="" />

                        </div>


                    </div> <!-- end .testimonial-container  -->

                </div> <!-- end row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .section-client-logo -->


        <!-- START FOOTER  -->
        @include('partial.footer')
        <!-- END FOOTER -->
        </body>
        </html>