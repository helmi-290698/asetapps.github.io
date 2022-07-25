@extends('layoutfront.main')
@section('container')
    <div class="wrapper">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid mx-auto" src="{{ asset('/img/banner1.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid mx-auto" src="assets/images/small/img-2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid mx-auto" src="assets/images/small/img-1.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="wrapper">
            <div class="container-fluid">
                <!-- Page-Title -->


                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="text-center">
                            <h5>Frequently asked Questions</h5>
                            <p class="text-muted">If several languages coalesce, the grammar of the resulting language is
                                more simple and regular than that of the individual languages will be more simple and
                                regular.</p>
                        </div>
                    </div>
                </div>

                <div class="row m-t-30">
                    <div class="col-lg-6">
                        <div class="card faq-box border-success">
                            <div class="card-body">
                                <div class="faq-icon float-right">
                                    <i class="fas fa-question-circle font-24 mt-2 text-success"></i>
                                </div>
                                <h5 class="text-success">01.</h5>
                                <h5 class="font-16 mb-3 mt-4">What is Lorem Ipsum?</h5>
                                <p class="text-muted mb-0">Phasellus eros odio Curabitur hendrerit neque at vestibulum
                                    consequat Cras nibh ipsum tempor ac ex eget eu elit eget cursus Fusce eu consequat nisl
                                    Praesent vel dictum enim ac convallis dolor Proin in velit vel enim laoreet cursus.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card faq-box border-primary">
                            <div class="card-body">
                                <div class="faq-icon float-right">
                                    <i class="fas fa-question-circle font-24 mt-2 text-primary"></i>
                                </div>
                                <h5 class="text-primary">02.</h5>
                                <h5 class="font-16 mb-3 mt-4">Where can I get some?</h5>
                                <p class="text-muted mb-0">Aliquam sed efficitur urna Integer mattis metus risus egestas
                                    hendrerit condimentum dolor auctor quis In vitae dictum eros
                                    Vestibulum aliquet tortor sapien
                                    ut sodales massa faucibus nec cras tristique condintum rsum a tincidunt Ut lacinia
                                    ornare tempor.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card faq-box border-warning">
                            <div class="card-body">
                                <div class="faq-icon float-right">
                                    <i class="fas fa-question-circle font-24 mt-2 text-warning"></i>
                                </div>
                                <h5 class="text-warning">03.</h5>
                                <h5 class="font-16 mb-3 mt-4">Where does it come from?</h5>
                                <p class="text-muted mb-0">Quisque aliquet egestas vel tincidunt sem pretium mattis
                                    suspendisse euismod at elit eu tempor Nunc ac vehicula dolor Maecenas
                                    at tincidunt accumsan nibh Sed dapibus
                                    augue quis dignissim ultrices turpis mauris porta lectus sed ullamcorper leo risus in
                                    metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card faq-box border-danger">
                            <div class="card-body">
                                <div class="faq-icon float-right">
                                    <i class="fas fa-question-circle font-24 mt-2 text-danger"></i>
                                </div>
                                <h5 class="text-danger">04.</h5>
                                <h5 class="font-16 mb-3 mt-4">Why do we use it?</h5>
                                <p class="text-muted mb-0">Nullam odio justo ullamcorper aliquet ex sit amet efficitur
                                    facilisis ligula Aenean euismod vel tellus ac feugiat Morbi finibus nisl
                                    in dui facilisis
                                    ut iaculis urna facilisis Suspendisse potenti Proin interdum nulla nulla sed faucibus
                                    Integer sapien pretium vestibulum.</p>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
            <!-- end container-fluid -->
        </div>
        <div class="row ">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="text-center">
                                    <h5>Frequently asked Questions</h5>
                                    <p class="text-muted">If several languages coalesce, the grammar of the resulting
                                        language is
                                        more simple and regular than that of the individual languages will be more simple
                                        and
                                        regular.</p>
                                </div>
                            </div>
                        </div>

                        <section id="cd-timeline" class="cd-container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="main-timeline">
                                        <div class="timeline">
                                            <span class="timeline-icon"></span>
                                            <span class="year">2017 - 2019</span>
                                            <div class="timeline-content">
                                                <h3 class="title">Timeline Event One</h3>
                                                <p class="description text-muted">
                                                    Vestibulum mollis nec lorem eget euismod. Quisque auctor sapien nunc, id
                                                    feugiat sem finibus convallis. Proin quis libero id odio tincidunt
                                                    facilisis. Fusce vel elit eu nulla aliquam facilisis vel sit amet nisl.
                                                    Etiam eu felis nunc. Vivamus egestas ac nulla ac varius. Donec nec
                                                    fermentum purus.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline">
                                            <span class="timeline-icon"></span>
                                            <span class="year">2018 - 2019</span>
                                            <div class="timeline-content">
                                                <h3 class="title">Timeline Event Two</h3>
                                                <p class="description text-muted">
                                                    Aenean aliquet, nisl eu ultrices sodales, libero tellus molestie nunc,
                                                    vitae consequat lectus nisl ac libero. Vivamus mollis, ante eu sagittis
                                                    rhoncus, neque felis gravida ante, vel fermentum neque neque a nibh.
                                                    Pellentesque tellus quam, pellentesque ac hendrerit quis, volutpat eget
                                                    sem.
                                                </p>
                                                <div class="mt-4">
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect waves-light">See more
                                                        detail</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline">
                                            <span class="timeline-icon"></span>
                                            <span class="year">2017 - 2019</span>
                                            <div class="timeline-content">
                                                <h3 class="title">Timeline Event Three</h3>
                                                <p class="description text-muted">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi,
                                                    obcaecati, quisquam id molestias eaque asperiores voluptatibus
                                                    cupiditate error assumenda delectus odit similique earum voluptatem
                                                    doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt
                                                    corporis vero ipsum nisi eius odio natus ullam provident pariatur
                                                    temporibus quia eos repellat.. <a href="#">Read more</a>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline">
                                            <span class="timeline-icon"></span>
                                            <span class="year">2018 - 2020</span>
                                            <div class="timeline-content">
                                                <h3 class="title">Timeline Event Four</h3>
                                                <p class="description text-muted">
                                                    Consectetur adipiscing elit. Vivamus mattis justo id pulvinar suscipit.
                                                    Pellentesque rutrum vehicula erat sed dictum. Integer quis turpis magna.
                                                    Suspendisse tincidunt elit at erat tincidunt, vel vulputate arcu
                                                    dapibus. Etiam accumsan ornare posuere.
                                                </p>
                                                <div class="mt-4">
                                                    <img src="assets/images/small/img-3.jpg" alt=""
                                                        class="rounded" style="width: 120px;">
                                                    <img src="assets/images/small/img-4.jpg" alt=""
                                                        class="rounded" style="width: 120px;">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="timeline">
                                            <span class="timeline-icon"></span>
                                            <span class="year">2018 - 2020</span>
                                            <div class="timeline-content">
                                                <h3 class="title">Timeline Event Five</h3>
                                                <p class="description text-muted">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio,
                                                    dolorum provident rerum.
                                                </p>
                                                <div class="mt-4">
                                                    <button type="button"
                                                        class="btn btn-primary waves-effect waves-light">See more
                                                        detail</button>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="timeline">
                                            <span class="timeline-icon"></span>
                                            <span class="year">2019 - 2020</span>
                                            <div class="timeline-content">
                                                <h3 class="title">Timeline Event End</h3>
                                                <p class="description text-muted">
                                                    Consectetur adipisicing elit. Excepturi, obcaecati, quisquam id
                                                    molestias eaque asperiores voluptatibus cupiditate error assumenda
                                                    delectus odit similique earum voluptatem doloremque dolorem ipsam quae
                                                    rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio
                                                    natus ullam provident pariatur temporibus.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row mt-5 justify-content-center">
                <div class="col-md-6">
                    <div class="text-center">
                        <h5>Choose your Plan</h5>
                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language is
                            more simple and regular than that of the individual languages will be more simple and regular.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row m-t-30">
                <div class="col-xl-3 col-md-6">
                    <div class="card pricing-box mt-4">
                        <div class="pricing-icon">
                            <i class="ti-shield bg-success"></i>
                        </div>
                        <div class="pricing-content">
                            <div class="text-center">
                                <h5 class="text-uppercase mt-5">Starter</h5>
                                <div class="pricing-plan mt-4 pt-2">
                                    <h1><sup>$ </sup>19 <small class="font-16">/ month</small></h1>
                                </div>
                                <div class="pricing-border mt-5"></div>
                            </div>
                            <div class="pricing-features mt-4">
                                <p class="font-14 mb-2"><i class="ti-check-box text-success mr-3"></i> Free Setup </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-success mr-3"></i> GB Storage</p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-success mr-3"></i> Unlmited Users </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-success mr-3"></i> SEO optimization
                                </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-success mr-3"></i> Customer Support
                                </p>
                            </div>
                            <div class="pricing-border mt-4"></div>
                            <div class="mt-4 pt-3 text-center">
                                <a href="" class="btn btn-success btn-lg w-100 btn-round">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card pricing-box mt-4">
                        <div class="pricing-icon">
                            <i class="ti-shield bg-primary"></i>
                        </div>
                        <div class="pricing-content">
                            <div class="text-center">
                                <h5 class="text-uppercase mt-5">Professional</h5>
                                <div class="pricing-plan mt-4 pt-2">
                                    <h1><sup>$ </sup>39 <small class="font-16">/ month</small></h1>
                                </div>
                                <div class="pricing-border mt-5"></div>
                            </div>
                            <div class="pricing-features mt-4">
                                <p class="font-14 mb-2"><i class="ti-check-box text-primary mr-3"></i> Free Setup </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-primary mr-3"></i> GB Storage</p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-primary mr-3"></i> Unlmited Users
                                </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-primary mr-3"></i> SEO optimization
                                </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-primary mr-3"></i> Customer Support
                                </p>
                            </div>
                            <div class="pricing-border mt-4"></div>
                            <div class="mt-4 pt-3 text-center">
                                <a href="" class="btn btn-primary btn-lg w-100 btn-round">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card pricing-box mt-4">
                        <div class="pricing-icon">
                            <i class="ti-shield bg-warning"></i>
                        </div>
                        <div class="pricing-content">
                            <div class="text-center">
                                <h5 class="text-uppercase mt-5">Enterprise</h5>
                                <div class="pricing-plan mt-4 pt-2">
                                    <h1><sup>$ </sup>79 <small class="font-16">/ month</small></h1>
                                </div>
                                <div class="pricing-border mt-5"></div>
                            </div>
                            <div class="pricing-features mt-4">
                                <p class="font-14 mb-2"><i class="ti-check-box text-warning mr-3"></i> Free Setup </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-warning mr-3"></i> GB Storage</p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-warning mr-3"></i> Unlmited Users
                                </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-warning mr-3"></i> SEO optimization
                                </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-warning mr-3"></i> Customer Support
                                </p>
                            </div>
                            <div class="pricing-border mt-4"></div>
                            <div class="mt-4 pt-3 text-center">
                                <a href="" class="btn btn-warning btn-lg w-100 btn-round">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card pricing-box mt-4">
                        <div class="pricing-icon">
                            <i class="ti-shield bg-info"></i>
                        </div>
                        <div class="pricing-content">
                            <div class="text-center">
                                <h5 class="text-uppercase mt-5">Unlimited</h5>
                                <div class="pricing-plan mt-4 pt-2">
                                    <h1><sup>$ </sup>99 <small class="font-16">/ month</small></h1>
                                </div>
                                <div class="pricing-border mt-5"></div>
                            </div>
                            <div class="pricing-features mt-4">
                                <p class="font-14 mb-2"><i class="ti-check-box text-info mr-3"></i> Free Setup </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-info mr-3"></i> GB Storage</p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-info mr-3"></i> Unlmited Users </p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-info mr-3"></i> SEO optimization</p>
                                <p class="font-14 mb-2"><i class="ti-check-box text-info mr-3"></i> Customer Support</p>
                            </div>
                            <div class="pricing-border mt-4"></div>
                            <div class="mt-4 pt-3 text-center">
                                <a href="" class="btn btn-info btn-lg w-100 btn-round">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end container-fluid -->
    </div>
@endsection
