<?php require APPROOT . '/views/layout/header.php'; ?>


<!-- Start About Us Section  -->



<section id="about" class="py-5 aboutuss"
    style="background: linear-gradient(30deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo URLROOT; ?>/public/assest/img/banner/banner2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo URLROOT; ?>/public/assest/img/users/staffgirl1.png">
            </div>
            <div class="col-sm-6 text-center text-light">

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-uppercase">Who are we !!!</h2>
                        <div class="lines"></div>
                        <div class="lines"></div>
                        <div class="lines"></div>
                    </div>

                    <div class="col-md-12">
                        <h5 class="fst-italic">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. </p>
                        <a href="#" class="btn btn-danger rounded-0">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- End About Us Section  -->

<!-- Start Property Section  -->
<section id="Properties" class="py-5">

    <div class="container-fluid">

        <!-- Start title  -->
        <div class="row text-center">

            <div class="col">
                <h3 class="titles">Properties</h3>
            </div>
        </div>
        <!-- end title  -->

        <ul class="list-inline text-center text-uppercase fw-bold">
            <li class="list-inline-item propertylists activeitems" data-filter="all">All <span
                    class="text-muted mx-md-5 mx-3">/</span></li>
            <li class="list-inline-item propertylists" data-filter="house">House <span
                    class="text-muted mx-md-5 mx-3">/</span></li>
            <li class="list-inline-item propertylists" data-filter="decoration">Decoration <span
                    class="text-muted mx-md-5 mx-3">/</span></li>
            <li class="list-inline-item propertylists" data-filter="furniture">Furniture <span
                    class="text-muted mx-md-5 mx-3">/</span></li>
            <li class="list-inline-item propertylists" data-filter="office">Office</li>
        </ul>

        <div class="container-fluid">

            <div class="d-flex flex-wrap justify-content-center">
                <div class="filters house">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image1.jpg" data-lightbox="property"
                        data-title="image1"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image1.jpg"
                            width="200px" alt="image1" /></a>
                </div>
                <div class="filters house">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image2.jpg" data-lightbox="property"
                        data-title="image2"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image2.jpg"
                            width="200px" alt="image2" /></a>
                </div>
                <div class="filters house">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image3.jpg" data-lightbox="property"
                        data-title="image3"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image3.jpg"
                            width="200px" alt="image3" /></a>
                </div>
                <div class="filters decoration">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image4.jpg" data-lightbox="property"
                        data-title="image4"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image4.jpg"
                            width="200px" alt="image4" /></a>
                </div>
                <div class="filters decoration">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image5.jpg" data-lightbox="property"
                        data-title="image5"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image5.jpg"
                            width="200px" alt="image5" /></a>
                </div>
                <div class="filters decoration">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image6.jpg" data-lightbox="property"
                        data-title="image6"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image6.jpg"
                            width="200px" alt="image6" /></a>
                </div>
                <div class="filters decoration">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image7.jpg" data-lightbox="property"
                        data-title="image7"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image7.jpg"
                            width="200px" alt="image7" /></a>
                </div>
                <div class="filters furniture">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image8.jpg" data-lightbox="property"
                        data-title="image8"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image8.jpg"
                            width="200px" alt="image8" /></a>
                </div>
                <div class="filters furniture">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image9.jpg" data-lightbox="property"
                        data-title="image9"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image9.jpg"
                            width="200px" alt="image9" /></a>
                </div>
                <div class="filters furniture">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image1.jpg" data-lightbox="property"
                        data-title="image1"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image1.jpg"
                            width="200px" alt="image1" /></a>
                </div>
                <div class="filters office">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image2.jpg" data-lightbox="property"
                        data-title="image2"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image2.jpg"
                            width="200px" alt="image2" /></a>
                </div>
                <div class="filters office">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image3.jpg" data-lightbox="property"
                        data-title="image3"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image3.jpg"
                            width="200px" alt="image3" /></a>
                </div>
                <div class="filters decoration">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image4.jpg" data-lightbox="property"
                        data-title="image4"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image4.jpg"
                            width="200px" alt="image4" /></a>
                </div>
                <div class="filters decoration">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image5.jpg" data-lightbox="property"
                        data-title="image5"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image5.jpg"
                            width="200px" alt="image5" /></a>
                </div>
                <div class="filters furniture">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image6.jpg" data-lightbox="property"
                        data-title="image6"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image6.jpg"
                            width="200px" alt="image6" /></a>
                </div>
                <div class="filters furniture">
                    <a href="<?php echo URLROOT; ?>/public/assest/img/gallery/image7.jpg" data-lightbox="property"
                        data-title="image7"><img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image7.jpg"
                            width="200px" alt="image7" /></a>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Property Section  -->

<!-- Start Adv Section  -->
<section class="p-5 missions">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <img src="<?php echo URLROOT; ?>/public/assest/img/etc/building4.png" alt="" class="advimg">
            </div>

            <div class="col-lg text-center text-white text-lg-end  advtext">
                <h1>What is Plannco & how we started our business in Myanmar</h1>
                <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Adv Section  -->

<!-- Start Services Section  -->
<section id="services" class="py-4 services">
    <div class="container-fluid">

        <!-- Start title  -->
        <div class="row text-center">
            <div class="col-12">
                <h3 class="text-light">Our Services</h3>
                <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum molestias
                    repudiandae eius est voluptatum quod sint, laudantium, voluptates illo officia laboriosam cum aut
                    odit ex magni consequatur. Dicta, id possimus!</p>
            </div>

        </div>
        <!-- End title  -->

        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 servicecard">
                    <img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image1.jpg" alt="img1">
                    <h5 class="text-light text-uppercase fw-bold py-2 servicetext">Mini Bar</h5>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 servicecard">
                    <img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image3.jpg" alt="img1">
                    <h5 class="text-light text-uppercase fw-bold py-2  servicetext">Dinning Room</h5>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 servicecard">
                    <img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image4.jpg" alt="img1">
                    <h5 class="text-light text-uppercase fw-bold py-2  servicetext">Bed Room</h5>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 servicecard">
                    <img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image5.jpg" alt="img1">
                    <h5 class="text-light text-uppercase fw-bold py-2  servicetext">Pantry Room</h5>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 servicecard">
                    <img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image6.jpg" alt="img1">
                    <h5 class="text-light text-uppercase fw-bold py-2  servicetext">Living Room</h5>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <div class="card border-0 servicecard">
                    <img src="<?php echo URLROOT; ?>/public/assest/img/gallery/image1.jpg" alt="img1">
                    <h5 class="text-light text-uppercase fw-bold py-2  servicetext">Living Room</h5>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Services Section  -->

<!-- Start Client Section  -->
<section class="p-3">
    <div class="container-fluid">

        <!-- start title  -->
        <div class="row text-center">
            <div class="col-12">
                <h3 class="titles">Satisfied Clients</h3>
                <p class="small">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore quam quis,
                    consequatur itaque at officiis perferendis pariatur impedit vel odit et dolore, temporibus porro
                    fugit enim, quos sint maxime quidem.</p>

            </div>
        </div>
        <!-- end title  -->

        <div class="row">
            <div class="col-md-12">
                <ul class="clientlists">
                    <li class="list-inline-item"><img src="<?php echo URLROOT; ?>/public/assest/img/clients/client1.png"
                            alt=""></li>
                    <li class="list-inline-item"><img src="<?php echo URLROOT; ?>/public/assest/img/clients/client2.png"
                            alt=""></li>
                    <li class="list-inline-item"><img src="<?php echo URLROOT; ?>/public/assest/img/clients/client3.png"
                            alt=""></li>
                    <li class="list-inline-item"><img src="<?php echo URLROOT; ?>/public/assest/img/clients/client4.png"
                            alt=""></li>
                    <li class="list-inline-item"><img src="<?php echo URLROOT; ?>/public/assest/img/clients/client5.png"
                            alt=""></li>

                </ul>
            </div>
        </div>


    </div>
</section>

<!-- End Client Section  -->

<!-- Start Customer Section  -->
<section id="customer" class="py-3 customers" style="background-image: linear-gradient(rgba(0, 0, 0, 0),
            rgba(0, 0, 0, 1)), url('<?php echo URLROOT ?>/assest/img/banner/banner3.jpg');">
    <div class="container-fluid">
        <!-- start title  -->
        <div class="row text-center">
            <div class="col">
                <h3 class="titles text-white">What Customers Say?</h3>

            </div>
        </div>
        <!-- end title  -->

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div id="customercarousels" class="carousel slide" data-bs-ride="carousel">

                    <ol class="carousel-indicators">
                        <li class="active" data-bs-target="#customercarousels" data-bs-slide-to="0"></li>
                        <li data-bs-target="#customercarousels" data-bs-slide-to="1"></li>
                        <li data-bs-target="#customercarousels" data-bs-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <!-- start user 1  -->
                        <div class="carousel-item text-center active">
                            <img src="<?php echo URLROOT; ?>/public/assest/img/users/user1.jpg" alt="" width="150px"
                                class="rounded-circle my-5">
                            <blockquote class="text-light">
                                <p>Lorem ipsum dolor, sit excepturi dicta neque quis veniam eveniet dignissimos illum
                                    odit sapiente! Possimus accusamus numquam </p>
                            </blockquote>
                            <h5 class="text-light text-uppercase fw-bold mb-3">Ms.July</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>

                            </ul>
                        </div>
                        <!-- end user 1  -->

                        <!-- start user 2 -->
                        <div class="carousel-item text-center">
                            <img src="<?php echo URLROOT; ?>/public/assest/img/users/user2.jpg" alt="" width="150px"
                                class="rounded-circle my-5">
                            <blockquote class="text-light">
                                <p>Lorem ipsum dolor, sit excepturi dicta neque quis veniam eveniet dignissimos illum
                                    odit sapiente! Possimus accusamus numquam </p>
                            </blockquote>
                            <h5 class="text-light text-uppercase fw-bold mb-3">Mr.Anton</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>

                            </ul>
                        </div>
                        <!-- end user 2  -->

                        <!-- start user 3-->
                        <div class="carousel-item text-center">
                            <img src="<?php echo URLROOT; ?>/public/assest/img/users/user3.jpg" alt="" width="150px"
                                class="rounded-circle my-5">
                            <blockquote class="text-light">
                                <p>Lorem ipsum dolor, sit excepturi dicta neque quis veniam eveniet dignissimos illum
                                    odit sapiente! Possimus accusamus numquam </p>
                            </blockquote>
                            <h5 class="text-light text-uppercase fw-bold mb-3">Ms.Yoon</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>

                            </ul>
                        </div>
                        <!-- end user 3  -->
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Customer Section  -->


<!-- Start Request Quotation  -->
<section>
    <div class="container">
        <div class="quotes">

            <div class="infos">
                <div class="me-5"> <img src="<?php echo URLROOT; ?>/public/assest/img/icon/phoneicon.png"
                        class="phoneicon" width="30px" alt="phoneicon" /></div>
                <div class="text-light">
                    <h2 class="fw-bold text-uppercase">Request A Free Quote</h2>
                    <p class="lead">Get answers and advice from people you want it from.</p>
                </div>
            </div>

            <div class="">
                <a href="tel:09255432727" class="btn btn-calls">Call Now <i class="fas fa-phone"></i></a>
            </div>

        </div>
    </div>
</section>

<!-- End Request Quotation  -->

<!-- Start Furniture Services Section  -->
<section id="furniture" class="bg-light text-center py-3">
    <div class="container">
        <!-- start title  -->
        <div class="row">
            <div class="col">
                <h3 class="titles">Furniture Services</h3>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit reprehenderit voluptatem,
                    animi laboriosam impedit hic! Non minima quos error laudantium perferendis repellendus vel quae est,
                    possimus eius unde eligendi aut.</p>

            </div>
        </div>
        <!-- end title  -->

        <div class="row furnitureicon">

            <div class="col-md-4">
                <img src="<?php echo URLROOT; ?>/public/assest/img/icon/services1.png" alt="">
                <h4>Fast Service</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, nemo quos culpa sed, labore
                    voluptatibus tenetur modi expedita ducimus totam distinctio quas repudiandae repellendus ipsum
                    dolorem? Mollitia aliquam corporis veritatis?</p>
            </div>

            <div class="col-md-4">
                <img src="<?php echo URLROOT; ?>/public/assest/img/icon/services2.png" alt="">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, nemo quos culpa sed, labore
                    voluptatibus tenetur modi expedita ducimus totam distinctio quas repudiandae repellendus ipsum
                    dolorem? Mollitia aliquam corporis veritatis?</p>

            </div>

            <div class="col-md-4">
                <img src="<?php echo URLROOT; ?>/public/assest/img/icon/services3.png" alt="">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, nemo quos culpa sed, labore
                    voluptatibus tenetur modi expedita ducimus totam distinctio quas repudiandae repellendus ipsum
                    dolorem? Mollitia aliquam corporis veritatis?</p>

            </div>

            <div class="col-md-4">
                <img src="<?php echo URLROOT; ?>/public/assest/img/icon/services4.png" alt="">
                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, nemo quos culpa sed, labore
                    voluptatibus tenetur modi expedita ducimus totam distinctio quas repudiandae repellendus ipsum
                    dolorem? Mollitia aliquam corporis veritatis?</p>

            </div>

            <div class="col-md-4">
                <img src="<?php echo URLROOT; ?>/public/assest/img/icon/services5.png" alt="">
                <h4>90 day warranly</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, nemo quos culpa sed, labore
                    voluptatibus tenetur modi expedita ducimus totam distinctio quas repudiandae repellendus ipsum
                    dolorem? Mollitia aliquam corporis veritatis?</p>

            </div>

            <div class="col-md-4">
                <img src="<?php echo URLROOT; ?>/public/assest/img/icon/services6.png" alt="">
                <h4>Award Winning</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, nemo quos culpa sed, labore
                    voluptatibus tenetur modi expedita ducimus totam distinctio quas repudiandae repellendus ipsum
                    dolorem? Mollitia aliquam corporis veritatis?</p>

            </div>

        </div>
    </div>

</section>
<!-- End Furiniture Services Section  -->


<!-- Start Contact Section -->
<section id="contact" class="p-5 contacts"
    style="background-image: linear-gradient(100deg, rgba(0, 0, 0, 0.9) 50%, rgba(0, 0, 0, 0.5) 30%, transparent 70%), url(<?php URLROOT ?>/public/assest/img/banner/banner3.jpg);">

    <div class="container-fluid">
        <div class="col-lg-5">
            <h5 class="display-4 text-light mb-3">Get New Letter</h5>

            <form class="" action="" method="">

                <div class="form-group py-4 mb-3">

                    <input type="text" name="name" class="form-control inputs " placeholder="Enter Your Name"
                        autocomplete="off">
                    <label for="name" class="labels">Name</label>
                </div>

                <div class="form-group  py-4 mb-3">

                    <input type="email" name="email" class="form-control inputs" placeholder="Enter Your email"
                        autocomplete="off">
                    <label for="email" class="labels">Email</label>
                </div>

                <div class="my-4">
                    <div class="form-check form-switch">
                        <input type="checkbox" name="accept" id="accept" class="form-check-input">
                        <label for="accept">I agree to get push notify</label>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn text-uppercase fw-bold rounded-0  submitbtns">Subscribe</button>
                </div>
            </form>
        </div>
    </div>

</section>
<!-- End Contact Section  -->

<?php require APPROOT . '/views/layout/footer.php'; ?>