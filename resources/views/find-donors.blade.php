@include('partial.header',['title' => 'Find Donors'])

    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        Find Donors
                    </h3>

                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <section class="section-content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 offset-md-3"></div>
                <div class="col-md-6">
                    
                    
                    <div class="donor-list">
                        @foreach ($donors as $donor)
                            @php
                                $fullname = ucfirst($donor->firstname) . " " . ucfirst($donor->lastname);
                            @endphp
                        <div class="donor">
                            <div class="donor-body clearfix">
                                <div class="avatar">
                                    <div class="substr">
                                        {{substr($donor->firstname, 0, 1)}}{{substr($donor->lastname, 0, 1)}}
                                    </div>
                                </div>
                                <div class="info">
                                    <h4>{{$fullname}}</h4>
                                    <div>
                                        <i class="fa fa-map-marker"></i>
                                        {{$donor->community->name}} <br /> 
                                        <i class="fa fa-phone"></i>
                                        <a href="tel: {{$donor->phone}}">{{$donor->phone}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('partial.footer')