        @include('partial.header',['title' => 'Welcome'])

        <!--  HOME SLIDER BLOCK  -->
        
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true" data-autoplaytimeout="17000">

                <div class="slider_item_container" data-bg_img="images/home_1_slider_1.jpg" data-bg_color="#555555" data-bg_opacity="0.0">
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-left">
                                <div class="row">
                                    <div class="slider-bg">                                    
                                        <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">  
                                            
                                            <h3>Donate blood,save life !</h3>
                                            <h2>
                                                YOUR BLOOD  
                                                <br>
                                                CAN BRING SMILE  
                                                <br />
                                                IN OTHER PERSON FACE
                                            </h2>
                                            <a href="#" class="btn btn-theme margin-top-24">Find Donors</a>
                                        </div>                                      
                                    </div> <!-- end .col-sm-12  -->
                                </div> <!-- end .row  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->
            </div> <!-- end .slider_1  -->
        </div> <!-- end .slider-wrap.  -->
        
        <!--  FEATURED ABOUT US SECTION-->

        <section class="section-content-block">
 
            <div class="container">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        
                        <div class="about-us-container theme-custom-box-shadow">

                            <div class="row section-heading-wrapper margin-bottom-11">

                                <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator" id="whoweare">
                                    <h2><strong>Who We Are?</strong></h2>
                                    <span class="heading-separator heading-separator-horizontal"></span>
                                </div> <!-- end .col-sm-10  --> 

                            </div>

                            <div class="about-details"> 

                                <p>The Emergency Blood Hub is a very handy application with a very important goal. 

                                    It aim at providing a critical blood donor to those in life or death situations. 
                                    
                                    It is created with the sole purpose of saving lives.</p>

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
        
        <!-- SECTION TESTIMONIAL   -->

        <section class="section-content-block section-custom-bg" data-bg_img='images/testimony_feat_bg.jpg' data-bg_size='cover' data-bg_position='top center' data-bg_opacity="0">
            
            <div class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">
                
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        
                        <div class="testimonial-container owl-carousel text-left" data-items  ="1">

                            <div class="col-md-12 col-sm-12">

                                <div class="testimony-layout-1">
                                    <h3 class="people-quote">Find Donor</h3>
                                    <p class="testimony-text">
                                        In need of blood, find a donor with the blood group you need who is in your community      
                                    </p>
                                    
                                    <form class="appoinment-form" method="POST" action="{{URL::to('/find-donors')}}"> 
                                        {{ csrf_field() }}
                                        <div class="form-group col-md-6">
                                            <label for="">Blood Type</label>
                                            <div class="select-style">    
                                                <select name="" id="" class="form-control">
                                                    <option value="">All blood type</option>
                                                    @foreach ($blood_type as $type)
                                                        <option value="{{$type->code}}">{{$type->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="">Communities</label>
                                            <div class="select-style">    
                                                <select name="" id="" class="form-control">
                                                    <option value="">All Communities</option>
                                                    @foreach ($communities as $community)
                                                        <option value="{{$community->id}}">{{$community->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <button id="btn_submit" class="btn btn-theme" type="submit">Find Donors</button>
                                        </div>
                                    </form>

                                </div> <!-- end .testimony-layout-1  -->

                            </div> <!--  end col-md-10  -->

                        </div>  <!--  end .row  -->   
                    </div>
                
                    <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                        <figure>
                            <img src="images/testimony_feat_img.jpg" alt="" class="db"/>
                        </figure>
                    </div>
                    
                </div>

                

            </div> <!-- end .container  -->

        </section>
        
        <!--  SECTION CAMPAIGNS   -->

        <section class="section-content-block section-pure-white-bg" >

            <div class="container">
                
                
                <div class="row">
                    
                    <div class="col-sm-12 col-md-5">

                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h2>BLOOD DRIVES</h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h4 class="margin-top-24">
                                    
                                    <small>All over the world we have arranged total sixty thousands donation campaign 
                                        and visit thousands of other venues on various occasions. </small>
                                </h4>
                            <a class="btn btn-theme margin-top-32" href="{{URL::to('blood-drive')}}">Load All Blood Drives</a>
                            </div> <!-- end .col-sm-12  -->  

                        </div> <!-- end .row  -->

                    </div>

                    <div class="col-sm-12 col-md-7">
                        
                        <div class="row wow fadeInRight">

                            <div class="event-carousel owl-carousel"  data-nav="false" data-dots="true" data-items="1">

                                @foreach ($blood_drive->chunk(3) as $chunk)
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
                                                    <a href="#"> <i class="fa fa-map-marker"></i>{{$drive->location}}, {{$drive->community->name}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach

                            </div>     
                        </div> 
                        
                    </div>
                    
                </div>

            </div> <!--  end .container  --> 

        </section> 
        
        
        <!--  SECTION APPOINTMENT BOX -->
        
        <section class="section-content-block section-custom-bg section-custom-bg-extra-padding" data-bg_img='images/appointment_female_bg.jpg' data-bg_color='#000000' data-bg_opacity='0.1'>

            <div class="container">
                <div class="custom-empty-space" data-height="160px" data-class="col-sm-hidden"></div>
            </div>

        </section>

        <!--  SECTION APPOINTMENT   -->

        <section class="section-content-block section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-6"> 
                        
                        <div class="row section-heading-wrapper">

                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h4>Good To Know</h4>
                                <span class="heading-separator heading-separator-horizontal"></span>
                                <h2>Helpful Information
                                </h2>

                            </div> <!-- end .col-sm-10  --> 

                        </div>

                        <div class="about-details"> 

                            <ul class="custom-bullet-list">
                                <li>Maintain a healthy iron level by eating iron rich foods.</li>
                                <li>Drink an extra 16 oz. of water prior to your donation.</li>
                                <li>Avoid alcohol consumption before your blood donation.</li>
                                <li>Remember to bring the donor card or national ID/Passport.</li>
                                <li>Finally, Try to get a good night sound sleep after donation.</li>
                            </ul>

                        </div> <!--  end .about-details -->  
               
                    </div> <!--  end col-lg-6  -->


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-top-appointment-reverse"> 

                        <div class="appointment-form-wrapper theme-custom-box-shadow text-center clearfix wow zoomIn">
                            <h3 class="join-heading join-heading-alt">Request Appointment</h3>
                            <form class="appoinment-form"> 
                                <div class="form-group col-md-6">
                                    <input id="your_name" class="form-control" placeholder="Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_email" class="form-control" placeholder="Email" type="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <input id="your_phone" class="form-control" placeholder="Phone" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" name="your_center">
                                            <option>Donation Center</option>
                                            <option>Los Angles</option>
                                            <option>California</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <input id="your_date" class="form-control" placeholder="Date" type="text">
                                </div>


                                <div class="form-group col-md-6">
                                    <input id="your_time" class="form-control" placeholder="Time" type="text">
                                </div>

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..."></textarea>
                                </div>         

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn btn-theme" type="submit">Get Appointment</button>
                                </div>

                            </form>

                        </div> <!-- end .appointment-form-wrapper  -->

                    </div> <!--  end .col-lg-6 -->

                </div> <!--  end .row  -->
                
                <div class="row wow fadeIn">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-users icon"></i>
                            <span class="counter">{{count($communities)}}</span>                             
                            <h4 class="text-capitalize">Communities</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-heart-o icon"></i>
                            <span class="counter">{{count($donations)}}</span>                            
                            <h4 class="text-capitalize">Donations</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-heartbeat icon"></i>
                            <span class="counter">{{count($donors)}}</span>                            
                            <h4 class="text-capitalize">Donors</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                        <div class="counter-block-1 text-center">

                            <i class="fa fa-stethoscope icon"></i>
                            <span class="counter">{{count($blood_requests)}}</span>                            
                            <h4 class="text-capitalize">Blood Requests</h4>

                        </div>

                    </div> <!--  end .col-lg-3  -->

                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section>  <!--  end .appointment-section  -->

        <section class="section-content-block section-pure-white-bg">

            <div class="container">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center no-img-separator">
                        <h2>BLOOD REQUESTS</h2>
                        <span class="heading-separator"></span>
                        <h4>Blood requests you might be able to help with</h4>
                    </div> <!-- end .col-sm-10  -->                      


                </div> <!-- end .row  -->

            </div> <!--  end .container -->

            <div class="container">
                <div class="row">
                    <div class="donor-list">
                        @foreach ($requests->chunk(3) as $chunk)
                            @foreach ($chunk as $request)
                                <div class="col-md-4">
                                    <div class="donor">
                                        <div class="donor-body clearfix">
                                            <div class="avatar">
                                                <div class="substr">
                                                    {{$request->bloodType->name}}
                                                </div>
                                            </div>
                                            <div class="info">
                                                <h4>{{$request->user->name}}</h4>
                                                <div>
                                                    <i class="fa fa-map-marker"></i>
                                                    {{$request->community->name}} <br /> 
                                                    <i class="fa fa-phone"></i>
                                                    <a href="tel: {{$request->requester_phone}}">{{$request->requester_phone}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                        {{$requests->render()}}
                    </div>
                </div>
            </div>

            

        </section> <!-- end .section-content-block  -->

        <!-- HIGHLIGHT CTA  -->  
        
        {{-- <section class="padding-bottom-100 padding-top-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                            <h2 class="text-capitalize">Become A Part Of Great Work Today</h2>
                            <p>
                                You can give blood at any of our blood donation venues all over the world. 
                                <br />
                                We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                            </p>
                            <a class="btn btn-theme margin-top-24 wow bounceIn" href="#">JOIN WITH US</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- START FOOTER  -->

        @include('partial.footer')
    </body>
</html>