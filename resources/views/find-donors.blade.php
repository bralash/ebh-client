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
                <div class="donor-list">
                    @foreach ($donors->chunk(3) as $chunk)
                        @foreach ($chunk as $donor)
                            @php
                                $fullname = ucfirst($donor->firstname) . " " . ucfirst($donor->lastname)
                            @endphp
                            <div class="col-md-4">
                                <div class="donor">
                                    <div class="donor-body clearfix">
                                        <div class="avatar">
                                            <div class="substr">
                                                {{ucfirst(substr($donor->firstname, 0, 1))}}{{ucfirst(substr($donor->lastname, 0, 1))}}
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
                            </div>
                        @endforeach
                    @endforeach
                    
                </div>
                
            </div>
            {{$donors->render()}}
        </div>
    </section>


@include('partial.footer')