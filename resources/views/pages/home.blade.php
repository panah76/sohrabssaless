@include('header')
<div class="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 order-2 mt-5" data-aos="fade-up" data-aos-delay="100">
                    <h1 class="container-fluid">
                        Sohrab Shahid-Saless
                        <br>
                    </h1>
                    <h2 class="container-fluid">His biography and cinema</h2>
                    <p class="w-75 p-3">                        Iranian film director and screenwriter
                    </p>

                    <div class="col-lg-12 mt-4 container-fluid col-md-4 col-sm-6 align-content-start">


                    </div>
                </div>
                <div class="col-lg-6 order-1 float-lg-start" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('assets/img/stillLife.jpg') }}" alt="sohrab-image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- ======= Tabs Section ======= -->
    <section>
        <div class="tabs">
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 p-5" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="container-fluid mt-5"></h2>
                            <p class="container-fluid py-5 p-3">

                            </p>
                            <div class="container-fluid">
                                <a href="{{ url('/artworks') }}" class="btn1-get  scrollto">Movies</a>
                                <a href="{{ url('printing') }}" class="btn-get-started scrollto">Events</a>
                            </div>
                        </div>
                        <div class="col-lg-6  order-1" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ asset('assets/img/New-Framing.jpg') }}" alt="" class="img-fluid-panama">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Tabs Section -->

    <!-- ======= Service Section ======= -->
    <section id="about" class="about section-ba">
        <div class="container" data-aos="fade-up">
            <div class="col-lg-12 mt-4 mb-4 d-flex align-items-center">
                <div class="icon-boxes d-flex flex-column justify-content-lg-between">
                    <div class="row">
                        <div class="col-md-3 text-center icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/Satisfaction-Garanteed.png" class="rounded opacity-50 mx-auto d-block" alt="...">
                            <!--                  <img src="assets/img/Satisfaction-Garanteed.png" class="icon-box" alt="">-->
                            <h5 class="text-center mt-4">Satisfaction Guaranteed</h5>
                            <p>100% guaranteed satisfaction. We go above and
                                beyond to make you happy with our service, and
                                your satisfaction is our goal</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/Delivery.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Reliable Delivery</h5>
                            <p>Reliable and express delivery service national wid</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/Customer-Service.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Great Customer Service</h5>
                            <p>Constantly improving our services to make it easier
                                for you to have a more enjoyable experience using
                                our services</p>
                        </div>
                        <div class="col-md-3 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <img src="assets/img/Trusted-by-expert.png" class="rounded mx-auto opacity-50 d-block" alt="...">

                            <h5 class="text-center mt-4">Trusted by Professional</h5>
                            <p>Working with the bests in the field of art and framing
                                has made us an attractive choice for collectors,
                                auctioneers and art enthusiasts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->
    <section class="container">
        <div class="section-title mt-4 mb-4"><a href="">
            <h2 class="text-start">Blog</h2></a>
        </div>
        <div class="row gallery">
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail " src="{{asset('assets/img/black.jpg')}}" alt="Blog Image"></figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail" src="assets/img/black.jpg" alt="Random Image"></figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail" src="assets/img/black.jpg" alt="Random Image"></figure>
                </a>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="" class="blog-hover">
                    <figure><img class="img-fluid img-thumbnail" src="assets/img/black.jpg" alt="Random Image"></figure>
                </a>
            </div>





        </div>
        <div class="container-fluid col-lg-3 align-items-center col-sm-6 mt-3 mb-5">


            <a href="" class="btn-get scrollto">View More </a>
        </div>

    </section><!-- End Blog Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg-video">
        <div class="row">
            <div class="col-md-6 col-lg-6 mt-2">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="section-title w-100">
                        <h3 class="text-center mb-3 mt-5">Sohrab Shahid-Saless
                        </h3>
                        <p class="container-fluid text-center">One of the most important aims of S-saless is promoting
                            both talented and professional artists on an international level
                            to a wide audience. We aim to promote Asian and European
                            arts as well as holding cultural art festivals, biennials and
                            exhibitions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mt-4 px-5  mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="videoWrapper">
                        {{-- <iframe src="./assets/img/FaamGallery.mp4" sandbox></iframe> -->--}}
                        <video class="video" controls>
                            <source src="./assets/img/FaamGallery.mp4" type="video/mp4">
                        </video>
                        <style>
                            .video {
                                width: 100%;
                                outline: none;
                                border: solid #330202;
                                height: auto;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Services Section -->
    <div class="col-md-12 col-lg-12">


        <img src="./assets/img/FaamGalleryInteriorView.jpg" style="width: 100%;" alt="FaamGalleryInteriorView">
    </div>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="container-fluid">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-4 justify-content-lg-between">
                    <div class="col mt-5 mb-5">
                        <div class="h-100">
                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body mt-3">
                                <div class="text-start">
                                    <!-- Product name-->
                                    <h1 class="fw-bolder">Featured
                                        Artworks</h1>
                                    <!-- Product price-->

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-0 border-top-0 bg-transparent">
                                <div class="text-start text-black text-decoration-underline"><a href="#">View the full collection</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-5 mt-5">
                        <div class=" h-100">
                            <!-- Sale badge-->

                            <!-- Product image-->

                            <!-- Product details-->
                            <div class="card-body">
                                <div class="text-start">
                                    <!-- Product name-->
                                    <h1 class="fw-bolder">Sale</h1>
                                    <!-- Product price-->

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer pt-0 border-top-0 bg-transparent">
                                <div class="text-start text-decoration-underline text-black"><a href="#">View the full collection</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5 mt-5">
                        <div class="card bg-transparent h-90">
                            <!-- Sale badge-->

                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/girl.jpg" alt="..." />
                            <!-- Product details-->
                            <!--                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">-->

                            <ul class="list-group bg-transparent list-group-flush">
                                <li class="list-group-item bg-transparent opacity-75">jungle</li>
                                <li class="list-group-item bg-transparent opacity-75"><small><small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> Diana Rosa
                                                </div>
                                                <div class="col-4">
                                                    £ 3,045</div>
                                            </div>
                                        </small></li>
                                <li class="list-group-item bg-transparent opacity-50"><small class="justify-content-between">Painting - 20*30cm |<small> Rent for £214/mo</small> </small></small></li>
                            </ul>

                            <div class="card-footer border-top-0 bg-transparent">
                                <div class="d-flex justify-content-between opacity-75 small text-black">

                                    <div class="col-2">
                                        <i class="bi bi-heart"></i></i>
                                    </div>
                                    <div class="col-8"><i class="bi bi-eye"></i> </div>
                                    <div class="col-2 mx-3"> <i class="bi bi-bag"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->


    </main><!-- End #main -->

</div>
@include('footer')
