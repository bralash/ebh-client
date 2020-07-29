@include('partial.header',['title' =>'Contact Us'])

    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        Contact Us
                    </h3>

                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class ="col-md-12">
                    <h2 class="contact-title">Contact us</h2>                           
                </div>               

                <div class="col-md-4">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-map-marker"></i></span>
                            <address>PT 192, Race Course Ridge, Tdi</address>
                        </li>
                    </ul>                        

                </div>

                <div class="col-md-4">

                    <ul class="contact-info">

                        <li>
                            <span class="icon-container"><i class="fa fa-phone"></i></span>
                            <address><a href="tel:+233 24 873 3024">+233 24 873 3024</a></address>
                        </li>

                    </ul>                        

                </div>

                <div class="col-md-4">
                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-envelope"></i></span>
                            <address><a href="mailto:ebloodhub@gmail.com">ebloodhub@gmail.com</a></address>
                        </li>
                    </ul>                        

                </div>                   

            </div> 

        </div>

    </section>

    <section class="section-content-block section-secondary-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <div class="contact-form-block">
                        <h2 class="contact-title">Say hello to us</h2>
                        <form role="form" action="#" method="post" id="contact-form">

                            <div class="form-group">
                                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Name" data-msg="Please Write Your Name" />
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" data-msg="Please Write Your Valid Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_subject" name="email_subject" placeholder="Subject" data-msg="Please Write Your Message Subject" />
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="email_message" id="email_message" placeholder="Message" data-msg="Please Write Your Message" ></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-theme">Send Now</button>
                            </div>

                        </form>
                    </div>
                </div>

                {{-- <div class="col-sm-6 wow fadeInRight">

                    <h2 class="contact-title">Our Location</h2>


                    <div class="section-google-map-block wow fadeInUp">

                        <div id="map_canvas"></div>

                    </div> <!-- end .section-content-block  -->                            

                </div> <!--  end col-sm-6  -->  --}}
            </div>
        </div>
    </section>

@include('partial.footer')