<!--hero section start-->

<section class="hero-banner position-relative custom-pt-1 custom-pb-2 bg-dark" data-bg-img="<?= base_url() ?>assets/images/bg/02.png">
    <div class="container">
        <div class="row text-white text-center z-index-1">
            <div class="col">
                <h1 class="text-white">Deteksi Covid</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Deteksi</a>
                        </li>
                        <li class="breadcrumb-item active text-primary">X-Ray</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="shape-1 bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,288L48,288C96,288,192,288,288,266.7C384,245,480,203,576,208C672,213,768,267,864,245.3C960,224,1056,128,1152,96C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

    <!--feature start-->

    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h2 class="mb-0"><span class="font-w-4 d-block">Silakan upload hasil rontgen X-Ray anda</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <!-- Load the model -->
                    <input type="hidden" id="base" value="<?php echo base_url("assets/"); ?>model/xray/model.json">
                    <input id="image-selector" class="form-control border-0" type="file" onchange="PreviewImage();" />
                </div>
                <div class="col-6">
                    <button id="predict-button" class="btn btn-dark float-right" onclick="getPred()">Predict</button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <h2 class="ml-3">Image</h2>
                    <img id="selected-image" style="width: 250px; height: 250px;" class="ml-3" src="https://networkprogramming.files.wordpress.com/2019/02/content.jpg" />
                </div>
                <div class="col-6">
                    <h2 class="ml-3">Predictions</h2>
                    <ol id="prediction-list"></ol>
                </div>
            </div>
        </div>
    </section>

    <!--feature end-->


    <!--about start-->

    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <img src="<?= base_url() ?>assets/images/about/06.png" alt="Image" class="img-fluid">
                </div>
                <div class="col-12 col-lg-5 mt-5 mt-lg-0">
                    <div class="mb-4">
                        <h2><span class="font-w-4 d-block">Easily manage</span> your own business</h2>
                        <p class="lead mb-0">We use the latest technologies it voluptatem accusantium doloremque laudantium.</p>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-sm">
                            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                                <div class="d-flex align-items-center">
                                    <div> <i class="las la-angle-right"></i>
                                    </div>
                                    <p class="mb-0 ms-3">Perfect Design</p>
                                </div>
                            </div>
                            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                                <div class="d-flex align-items-center">
                                    <div> <i class="las la-angle-right"></i>
                                    </div>
                                    <p class="mb-0 ms-3">More Flexible</p>
                                </div>
                            </div>
                            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                                <div class="d-flex align-items-center">
                                    <div> <i class="las la-angle-right"></i>
                                    </div>
                                    <p class="mb-0 ms-3">High Performance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                                <div class="d-flex align-items-center">
                                    <div> <i class="las la-angle-right"></i>
                                    </div>
                                    <p class="mb-0 ms-3">Key Features</p>
                                </div>
                            </div>
                            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                                <div class="d-flex align-items-center">
                                    <div> <i class="las la-angle-right"></i>
                                    </div>
                                    <p class="mb-0 ms-3">Based On Bootstrap 4</p>
                                </div>
                            </div>
                            <div class="mb-3 me-4 ms-lg-0 me-lg-4">
                                <div class="d-flex align-items-center">
                                    <div> <i class="las la-angle-right"></i>
                                    </div>
                                    <p class="mb-0 ms-3">Built with Sass</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-primary mt-4">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--about end-->

</div>

<!--body content end-->