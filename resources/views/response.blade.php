@include('partial.header',['title' => 'Thanks for your request'])

    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        Request to be a donor
                    </h3>

                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <section class="section-content-block">
    
        <div class="container">
            
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h3>{{$result}}</h3>
                </div>
            </div>
        </div>
    </section>

@include('partial.footer')