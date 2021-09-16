<!--hero section start-->

<section class="custom-py-1 position-relative hero-shape3 overflow-hidden">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-5 col-xl-6 order-lg-2 mb-8 mb-lg-0">
        <!-- Image -->
        <img src="<?= base_url() ?>assets/images/home2.png" class="img-fluid" alt="...">
      </div>
      <div class="col-12 col-lg-7 col-xl-6 order-lg-1">
        <h1 class="display-4 mb-3">
          Deteksi<span class="font-w-7">Covid</span>
        </h1>
        <!-- Text -->
        <p class="lead text-muted mb-4">DeteksiCovid adalah Aplikasi Deteksi COVID atau Infeksi Virus SARS-CoV-2 dengan menggunakan Convolutional Neural Network. Aplikasi ini dibuat dengan menggunakan Google Colaboratory dan Tensorflow.js. </p>
        <!-- Buttons -->
        <a href="<?= site_url('deteksi/xray') ?>" class="btn btn-sm btn-primary text-start me-1"> <i class="la la-check-circle me-2 ic-2x d-inline-block"></i>
          <div class="d-inline-block"> <small class="d-block">Citra</small>
            X-RAY</div>
        </a>
        <a href="<?= site_url('deteksi/ct') ?>" class="btn btn-sm btn-dark text-start"> <i class="la la-check-square me-2 ic-2x d-inline-block"></i>
          <div class="d-inline-block"> <small class="d-block">Citra</small>
            CT-Scan</div>
        </a>
      </div>
    </div>
    <!-- / .row -->
  </div>
  <!-- / .container -->
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

  <!--feature start-->

  <section id="covidtracker">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <div>
            <h2 class="mb-0"><span class="font-w-4 d-block">Statistik Kasus</span> COVID-19</h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center mt-6">
        <div class="col-lg-4 col-md-6">
          <div class="p-5" data-bg-color="#ffeff8">
            <div class="f-icon"><i class="la la-user-injured"></i>
            </div>

            <div class="counter-desc"> <span class="count-number h2 text-primary" data-to="<?= $positif ?>" data-speed="500">120</span>
              <span class="h2 text-primary">+</span>
              <h6 class="text-muted mb-0">Positif</h6>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          <div class="p-5" data-bg-color="#d0faec">
            <div class="f-icon">
              <i class="la la-user-check"></i>
            </div>

            <div class="counter-desc"> <span class="count-number h2 text-primary" data-to="<?= $sembuh ?>" data-speed="500">120</span>
              <span class="h2 text-primary">+</span>
              <h6 class="text-muted mb-0">Sembuh</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <div class="p-5" data-bg-color="#C8C8C8">
            <div class="f-icon"> <i class="la la-ribbon"></i>
            </div>

            <div class="counter-desc"> <span class="count-number h2 text-primary" data-to="<?= $meninggal ?>" data-speed="500">120</span>
              <span class="h2 text-primary">+</span>
              <h6 class="text-muted mb-0">Meninggal</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--feature end-->

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4">
          <div>
            <h2 class="mb-0"><span class="font-w-4 d-block">Statistik Vaksin</span> COVID-19</h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center mt-6">
        <div class="col-lg-4 col-md-6">
          <div class="p-5" data-bg-color="#b2ffba">
            <div class="f-icon"><i class="la la-heartbeat"></i>
            </div>

            <div class="counter-desc"> <span class="count-number h2 text-primary" data-to="<?= $totalsasaran ?>" data-speed="500">120</span>
              <span class="h2 text-primary">+</span>
              <h6 class="text-muted mb-0">Total Sasaran</h6>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          <div class="p-5" data-bg-color="#b2fff8">
            <div class="f-icon"> <i class="la la-syringe"></i>
            </div>

            <div class="counter-desc"> <span class="count-number h2 text-primary" data-to="<?= $vaksinasi1 ?>" data-speed="500">120</span>
              <span class="h2 text-primary">+</span>
              <h6 class="text-muted mb-0">Vaksin Dosis 1</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <div class="p-5" data-bg-color="#fffbb2">
            <div class="f-icon"><i class="la la-syringe"></i>
            </div>

            <div class="counter-desc"> <span class="count-number h2 text-primary" data-to="<?= $vaksinasi2 ?>" data-speed="500">120</span>
              <span class="h2 text-primary">+</span>
              <h6 class="text-muted mb-0">Vaksin Dosis 2</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--about start-->

  <!-- <section class="pb-0">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-lg-6 mb-6 mb-lg-0">
          <img src="<?= base_url() ?>assets/images/app/04.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-12 col-lg-6 col-xl-5">
          <div>
            <h2><span class="font-w-4 d-block">Unlimited features</span> awaiting for you</h2>
            <p class="lead">We use the latest technologies it voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
          </div>
          <div>
            <div class="mb-3">
              <div class="d-flex align-items-start">
                <div class="me-3"> <span class="list-dot" data-bg-color="#01a479" style="background-color: rgb(1, 164, 121);"></span>
                </div>
                <p class="mb-0">Fast Performance technologies it voluptatem</p>
              </div>
            </div>
            <div class="mb-3">
              <div class="d-flex align-items-start">
                <div class="me-3"> <span class="list-dot" data-bg-color="#2f2f41" style="background-color: rgb(47, 47, 65);"></span>
                </div>
                <p class="mb-0">Quick Access For Build With Static Bootstarp Code</p>
              </div>
            </div>
            <div>
              <div class="d-flex align-items-start">
                <div class="me-3"> <span class="list-dot" data-bg-color="#01a479" style="background-color: rgb(1, 164, 121);"></span>
                </div>
                <p class="mb-0">Easy to Manage Your All Data access to development</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!--about end-->


  <!--testimonial start-->

  <!--testimonial end-->


  <!--services start-->

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-12 order-lg-1 mb-5 mb-lg-0">
          <div class="owl-carousel no-pb" data-dots="false" data-items="1" data-md-items="2" data-sm-items="2" data-autoplay="true">
            <div class="item">
              <div class="p-3 m-5 shadow rounded">
                <img class="img-fluid" src="<?= base_url() ?>assets/images/app/01.jpg" alt="">
              </div>
            </div>
            <div class="item">
              <div class="p-3 m-5 shadow rounded">
                <img class="img-fluid" src="<?= base_url() ?>assets/images/app/02.jpg" alt="">
              </div>
            </div>
            <div class="item">
              <div class="p-3 m-5 shadow rounded">
                <img class="img-fluid" src="<?= base_url() ?>assets/images/app/03.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12">
          <div class="mb-5">
            <h2 class="mb-0"><span class="font-w-4 d-block"></span> smart features</h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex justify-content-between">
                <div class="me-3">
                  <div class="f-icon-s p-3 rounded" data-bg-color="#d0faec"> <i class="flaticon-dashboard"></i>
                  </div>
                </div>
                <div>
                  <h5 class="mb-2">Google Colaboratory</h5>
                  <p class="mb-0">Taking design from winck design and typography layouts.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
              <div class="d-flex justify-content-between">
                <div class="me-3">
                  <div class="f-icon-s p-3 rounded" data-bg-color="#ffeff8"> <i class="flaticon-relationship"></i>
                  </div>
                </div>
                <div>
                  <h5 class="mb-2">Tensorflow.js</h5>
                  <p class="mb-0">library open-source yang memungkinkan Anda mendefinisikan, melatih, dan menjalankan model machine learning dalam Javascript</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-5">
              <div class="d-flex justify-content-between">
                <div class="me-3">
                  <div class="f-icon-s p-3 rounded" data-bg-color="#d3f6fe"> <i class="flaticon-solution"></i>
                  </div>
                </div>
                <div>
                  <h5 class="mb-2">Code Igniter</h5>
                  <p class="mb-0">Taking design from winck design and typography layouts.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-5">
              <div class="d-flex justify-content-between">
                <div class="me-3">
                  <div class="f-icon-s p-3 rounded" data-bg-color="#fff5d9"> <i class="flaticon-system"></i>
                  </div>
                </div>
                <div>
                  <h5 class="mb-2">Bootstrap</h5>
                  <p class="mb-0">Taking design from winck design and typography layouts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--services end-->



  <!--blog start-->

  <!--blog end-->


  <!--newsletter start-->


  <!--newsletter end-->

</div>

<!--body content end-->