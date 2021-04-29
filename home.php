
    <!-- ============================
        Slider
    ============================== -->
    <section id="slider3" class="slider slider-3">
      <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
        data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
        data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <?php
          foreach ($slider as $slider) {
        ?>
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="<?php echo $slider->img_kategori;?>" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8"  style="background-color: rgba(15, 116, 188, 0.5);border-radius: 10px;padding: 20px;border:2px solid #0f74bc">
                <div class="slide__content">
                  <h2 class="slide__title"><?php echo $slider->nama_kategori;?></h2>
                  <p class="slide__desc"><?php echo $slider->ket_kategori;?></p>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <?php } ?>
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- =========================
      projects carousel 3
      =========================== -->
    <style type="text/css">
      .projects-carousel-3 .project-item .project__content {
        padding: 10px;
      }
    </style>
    <section id="projectsCarousel3" class="projects-carousel-3 pt-50 pb-90">
      <div class="container">

        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__title">Produk</h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row-->
        <div class="row">
              <?php foreach ($produk as $produk) {?>
          <div class="col-sm-6 col-lg-4 col-md-4">
              <div class="project-item">
                <a href="<?php echo site_url('produk/'.$produk->id_kategori);?>">
                <div class="project__img">
                  <img src="<?php echo $produk->img_kategori;?>" alt="project img">
                </div><!-- /.project-img -->
                </a>
                <div class="project__content">
                  <h4 class="project__title"><a href="<?php echo site_url('produk/'.$produk->id_kategori);?>"><?php echo $produk->nama_kategori;?></a></h4>
                </div><!-- /.project-content -->
              </div><!-- /.project-item -->
          </div><!-- /.col-lg-12 -->
              <?php } ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.projects carousel 3 -->

    <!-- ========================
      Features List  2
    =========================== -->
    <section id="featuresListLayout2" style="padding-bottom:50px;" class="features-list features-list-layout2 bg-overlay bg-overlay-gradient bg-parallax pt-50">
      <div class="bg-img"><img src="<?php frontend("/images/blog/grid/3.jpg");?>" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__title" style="color: #fff;">Why Choose Us?</h2>
              <hr style="background-color: #fff" />
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row-->
        <div class="row heading mb-30">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h2 class="heading__title color-white"><?php echo $choose->nama_kategori;?></h2>
          </div><!-- /.col-lg-6-->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="heading__desc color-white"><?php echo $choose->ket_kategori;?></p>
          </div><!-- /.col-lg-6-->
        </div><!-- /.row -->
        <div class="row">
          <?php foreach ($list_choose as $list) {?>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title"><?php echo $list->nama_kategori;?></h4>
                <p class="feature__desc"><?php echo $list->ket_kategori;?></p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div>
            <?php } ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Features List 2 -->

    <!-- ========================
        Services Layout 4
    =========================== -->
    <section id="servicesLayout4" class="services services-layout3 services-layout4 pt-50 pb-10">
      <div class="container col-padding-0">

        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__title">Expertise</h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row-->

        <div class="row service-items-wrap">
          <?php 
            $list_expert = array();
            foreach ($expert as $expert) {
              array_push($list_expert,$expert->nama_kategori);
          ?>
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon" style="text-align:center"><i class="<?php echo ($expert->img_kategori!=""?$expert->img_kategori:"icon-eco");?>"></i></div>
                <h4 class="service__title"><?php echo $expert->nama_kategori;?></h4>
                <p class="service__desc"><?php echo $expert->ket_kategori;?></p>
                <a href="<?php echo site_url('expertise/'.$expert->id_kategori);?>" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right2"></i>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-3 -->
          <?php } ?>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 4 -->


    <!-- ======================
          Blog Grid
        ========================= -->
    <section id="blogGrid" class="blog blog-grid pt-50 pb-20">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <h2 class="heading__title">Artikel Terbaru</h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row-->
        <div class="row">
          <?php foreach ($artikel as $artikel){ ?>
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="<?php echo $artikel->img;?>" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#"><?php echo $artikel->judul;?></a></h4>
                <span class="blog__meta-date"><?php echo convert_date($artikel->tgl_create);?></span>
                <p class="blog__desc">
                  <?php echo $artikel->txt;?>
                </p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>Read More</span>
                  <i class="icon-arrow-right2"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          <?php } ?>
        </div><!-- /.row-->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
