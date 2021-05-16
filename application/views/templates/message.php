<?php
    if(! isset($message_heading))
        $message_heading = "";

    if(! isset($message_text))
        $message_text = "";

?>

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title"></h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="<?php echo base_url() ?>">home</a></li>
                            <li></li>
                        </ul>
                    </div><!-- end breadcrumb-inner -->
                    <div class="text-outline"></div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->


<!-- ================================
       START ABOUT AREA
================================= -->
<section class="about-area about-area3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-item">
                    <div class="sec-heading">
                        <div class="heading-circle"></div>
                        <h2 class="sec__title"><?php echo $message_heading ?></h2>
                        <p class="sec__desc">
                            <?php echo $message_text ?>
                        </p>
                    </div><!-- end sec-heading -->
                    <a href="about.html" class="theme-btn readmore__btn">read more</a>
                </div><!-- end about-item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
       START ABOUT AREA
================================= -->
