@include('header')

<main id="main">

    <section id="activities" class="about section-ba">
        <div class="container" data-aos="fade-up">
            <div class="code-arti bg-transparent">
                <div class="image-container">
                    <div class="slide">
                        <div class="row pb-5">
                            <div class="d-flex col col-6 mt-5 amin2">
                                @foreach($all_exhibitions as $exhibition)
                                    <div class="text-slider-amin w-100">
                                        <h1 class="fw-bold mt-lg-5 text-start"
                                            value="{{ $exhibition->id}}">{{ $exhibition->exhibition_name }}</h1>
                                        <p class="text-black  mt-4 mb-5  text-start " style="height:150px">
                                            {{$exhibition->exhibition_short_des}}
                                        </p>
                                    </div>
                                @endforeach

                                <div class="d-flex amin">
                                    <a class="previous" onclick="moveSlides(-1)">
                                        <i class="bi bi-chevron-compact-left Slide-Size"></i>
                                    </a>
                                    <div style="text-align:start">
                                        <span class="footerdot" onclick="activeSlide(1)"></span>
                                        <span class="footerdot" onclick="activeSlide(2)"></span>
                                        <span class="footerdot" onclick="activeSlide(3)"></span>
                                    </div>
                                    <a class="next" onclick="moveSlides(1)">
                                        <i class="bi bi-chevron-compact-right Slide-Size"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 mt-3">
                                @foreach($all_exhibitions as $exhibition)
                                    <img class="image-slider-amin" src="{{asset($exhibition->image_exhibition)}}"
                                         style="height: 400px;object-fit: contain;"/>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="artists" class="artists section-artists">
        <div class="container" data-aos="fade-up">
            <div class="col justify-content-between">

                <h4 class="hr-h4">

                    <nav class="navbar-nav" style="border-bottom: 6px solid #d9d9d9;">

                        <ul>
                            <li class="nav-item-Gallery p-2" style="box-shadow: 0px 6px #0a0a0a;">
                                <a class="nav-link-G active" href="#">Art Wall</a>
                            </li>
                            <li class="nav-item-Gallery px-2">
                                <a class="nav-link-G" href="{{route('artfairs')}}">Art Fairs</a>
                            </li>
                            <li class="nav-item-Gallery px-2">
                                <a class="nav-link-G" href="{{route ('exhibition')}}">Exhibitions</a>
                            </li>
                            <li class="nav-item-Gallery px-2">
                                <a class="nav-link-G" href="{{route('festival.event')}}">Festivals & Events</a>
                            </li>

                        </ul>

                    </nav>
                </h4>
            </div>

            <div class="container">
                <div class="row mt-5">
                    @foreach($all_6_exhibitions as $exhibition)
                        <div class="col-lg-3 mb-4 text-start">
                            <a href="{{route('singleactivity',$exhibition->id)}}" class="card border-0">
                                <img style="width:100%;aspect-ratio:3/2;object-fit:cover"
                                     src="{{asset($exhibition->image_exhibition)}}" class="card-img-top" alt="..."/>
                                <div class="card-body card-ex">
                                    <h5 class="card-title">{{$exhibition->title}}</h5>
                                    <h6 class="card-subtitle mb-2 text-body-red">{{$exhibition->date}}</h6>
                                    <p class="card-text">{{substr($exhibition->exhibition_short_des,0,40)}}....</p>
                                </div>

                            </a>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </section>

    <section id="about" class="about section-ba">
        <div class="container" data-aos="fade-up">
            <div class="about">
                <div class="row">
                    <div class="col-lg-5  px-2 order-1 mt-5 " data-aos="fade-up" data-aos-delay="100">
                        <h1 class="fw-bold  text-start  ">Marziyeh Ramezani</h1>
                        <p class="text-start px-2 mt-3">
                            Painter, Photographer
                        </p>
                        <p class="text-start px-2 mt-4">
                            b.1969
                        </p>

                        <h4 class="col-5 px-2 mt-5">
                            <i class="bi bi-share"></i>
                        </h4>
                    </div>
                    <div class="col-lg-7   order-2  container-fluid text-center " data-aos="fade-up"
                         data-aos-delay="100">

                        <div class="col-lg-12  order-1" data-aos="fade-up" data-aos-delay="200">
                            <img src="./assets/img/MarziyehRamezani/Page2Profile.png" alt="" class="img-fluid-panama">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="artists section-artists">
        <div class="container" data-aos="fade-up">
            <h4 class="hr-h4">
                Biography</h4>
            <hr class="hr-style"/>
            <p class="mt-5">
                She graduated in Graphic Design from the Tehran University of Art in 1992.
                She is an international artist whose work has appeared in exhibitions in Iran and Italy, Germany, China,
                South Korea and the United Kingdom.
            </p>
            <p class="mt-3">
                She has achieved many international awards on watercolour and acrylic painting. She achieved silver
                medal in China in 2005, followed by a gold medal in 2006 awarded by China Expo.  Ramezani founded Faam
                Gallery (previously Known as Fam Gallery - "fam" in the Persian Language means colour, form and shape).
                Ramezani, as the owner and art director of Faam Gallery has organised over 231 group and solo
                exhibitions covering a spectrum of visual arts. Faam Gallery has also held exhibitions in Italy,
                Germany, China, South Korea and the United Kingdom.

            </p>
            <p class="mt-3">
                One of the main aims of Faam Gallery is to promote Eastern art in all media by organising exhibitions
                and Expos around the world.
                Among notable festivals of Persian art organised by the Faam Gallery was the First Persian Contemporary
                Artists Movement.
                This festival forged a ground-breaking collaboration between artists and the private sector who came
                together to support the development
                of art in Persia and to honour Persian masters such as Master Mohammed Javadipur.
            </p>
            <p class="mt-1 mb-3">
                Faam Gallery’s exceptional efforts to showcase Persian artists and their work earned the Gallery a
                silver medal in China in 2005,
                followed by a gold medal in 2006 awarded by China Expo. In 2007, at an exhibition in Seoul, Popular
                Persian Painters, Faam Gallery’s aims
                and achievements were officially recognised in the award of a Certificate for consistent effort in
                promoting Persian art to worldwide audiences.
                Faam Gallery has also worked to introduce Persian art and culture to younger audiences by holding
                exhibitions and festivals for children, and
                organising creative workshops on themes such as Persian Myths and Identity.

            </p>
            <p class="mb-3">
                <a class="fw-bold text-decoration-underline" href="#">Read More</a>
            </p>

            <h4 class="hr-h4">
                Credentials
            </h4>
            <hr class="hr-style"/>
            <div class="row">
                <div class="col-6">
                    <p class="mt-3 fw-bold">2022</p>
                    Solo Exhibition, "Mosaic Art", Faam Gallery, London, United Kingdom.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2020</p>
                    Group Exhibition, "Horse Painting Exhibition", Faam Gallery, London, United Kingdom.
                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2019 </p>
                    Group Exhibition, "Exhibition 26" - opening of the gallery, Faam Gallery, London, United Kingdom.


                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2007 </p>
                    Group Exhibition, Faam Gallery; "The First Exhibtion of Iraninan Artists in South Korea", Korea
                    Foundation Cultural Centre, South Korea.
                    Group Exhibition, Faam Gallery; "The First Contemporary Iranian Artists Movement", Talash Cultural
                    Centre Tehran, Iran.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2006</p>
                    Gold Medal Award, Group Exhibition, "China International Expo", China Expo Centre, China.


                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold"> 2005</p>
                    Silver Medal Award, Group Exhibition, "China International Expo", China Expo Centre, China.


                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2004</p>
                    Group Exhibition, "Tehran Expo", Tehran, Iran.
                    Solo Exhibition, Faam Gallery, Tehran, Iran.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2003</p>
                    Solo Exhibition, Faam Gallery, Tehran, Iran.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2002</p>
                    Solo Exhibition, Faam Gallery, Tehran, Iran.
                    Group Exhibition, "Yas Girls", Barg Gallery, Tehran, Iran.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">2000</p>
                    Solo Exhibition, Faam Gallery, Tehran, Iran.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold"> 1999</p>
                    Solo Exhibition, Faam Gallery, Tehran, Iran.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">1997</p>
                    Solo Exhibition, Faam Gallery, Tehran, Iran.


                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold"> 1994</p>
                    Group Exhibition, Andishe Gallery, Tehran, Iran.

                </div>
                <div class="col-6">
                    <p class="mt-3 fw-bold">1994</p>
                    Group Exhibition, Sabz Gallery, Tehran, Iran.
                    <br>
                    Group Exhibition, Vali Gallery, Tehran, Iran.


                </div>

            </div>
            <h4 class="hr-h4">
                Artworks
            </h4>
            <hr class="hr-style"/>
            <div class="container-fluid mb-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-4 justify-content-lg-between">

                    @foreach($activities_products as $product)
                        <div class="col mb-2 mt-2">
                            <a href="{{route('singleproduct',[$product->id,$product->name])}}" class="card bg-transparent h-90">
                                <img class="card-img-top" style="width:100%;aspect-ratio: 1/1;object-fit: cover;"
                                     src="{{asset($product->image)}}" alt="..."/>
                                <ul class="list-group bg-transparent list-group-flush">
                                    <li class="list-group-item bg-transparent opacity-75">{{$product->name}}</li>
                                    <li class="list-group-item bg-transparent opacity-75">
                                        <small class="text-start">
                                            <div class="row justify-content-between">
                                                <div class="col-6"> {{$product->artist->full_name}} </div>
                                                <div class="col-4"> £{{$product->price }}</div>
                                            </div>
                                        </small>
                                    </li>
                                    <li class="list-group-item bg-transparent opacity-50">
                                        <small class="justify-content-between">
                                            Painting - {{$product->width}}*{{$product->height}}cm |
                                            <small> Rent for £214/mo</small>
                                        </small>
                                    </li>
                                </ul>

                                <div class="card-footer border-top-0 bg-transparent">
                                    <div class="d-flex justify-content-between opacity-75 small text-black">

                                        <div class="col-2">
                                            <i class="bi bi-heart"></i>
                                        </div>
                                        <div class="col-8"><i class="bi bi-eye"></i></div>
                                        <div class="col-2 mx-3"><i class="bi bi-bag"></i></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>


</main><!-- End #main -->
@include('footer')
<script src="{{asset('assets/js/activities.js')}}"></script>

