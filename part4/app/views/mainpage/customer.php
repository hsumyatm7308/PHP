<?php require APPROOT . '/views/layout/header.php'; ?>
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
<?php require APPROOT . '/views/layout/footer.php'; ?>