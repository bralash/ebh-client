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
                <form method="POST" action="{{URL::to('donor/search')}}" class="appoinment-form">
                    {{ csrf_field() }}
                    <div class="form-group col-md-5">
                        <div class="select-style">    
                            <select name="blood_type_id" id="" class="form-control" required>
                                <option value="*">All blood types</option>
                                @foreach ($blood_type as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-5">
                        <div class="select-style">                                    
                            <select name="community_id" id="" class="form-control" required>
                                <option value="*">All communities</option>
                                @foreach ($communities as $community)
                                    <option value="{{$community->id}}">{{$community->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>   

                    <div class="form-group col-md-2">
                        <button id="btn_submit" class="btn btn-theme" type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="donor-list">
                    @if ($donors === null)
                        <h4>No donor found</h4>
                    @else
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
                    @endif
                    
                    
                </div>
                
            </div>
            @if($donors != null)
                {{$donors->render()}}
            @endif
        </div>
    </section>


@include('partial.footer')