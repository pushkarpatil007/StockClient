<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title">Profile</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="<?php echo base_url() ?>">home</a></li>
                            <li>Profile</li>
                        </ul>
                    </div><!-- end breadcrumb-inner -->
                    <div class="text-outline">Profile</div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START FORM AREA
================================= -->
<section class="form-shared reset-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="contact-form-action">
                    <div class="form-heading">
                        <h3 class="form__title">My Profile</h3>
                        <p class="form__desc reset__desc">
                            Enter the email of your account to reset password.
                            <a href="<?php echo base_url() ?>contact">contact us</a>
                        </p>
                    </div>

                    <?php
                        if(isset($member))
                        {

                    ?>
                            <!--Contact Form-->
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label class="control-label">Name : </label>
                                        <label class="control-label"><?php echo $member->first_name .' '.$member->last_name ?></label>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label class="control-label">Email : </label>
                                        <label class="control-label"><?php echo $member->email ?></label>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label class="control-label">Mobile : </label>
                                        <label class="control-label"><?php echo $member->mobile ?></label>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label class="control-label">Password : </label>
                                        <label class="control-label"><?php echo $member->password ?></label> <a href="<?php echo base_url() ?>change-password">Change</a>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12 col-sm-12 form-group">
                                        <label class="control-label">Registration Date : </label>
                                        <label class="control-label"><?php echo $member->updated_on ?></label>
                                    </div><!-- end col-lg-12 -->
                                </div><!-- end row -->
                            </form>
                    <?php
                        }
                    ?>

                </div><!-- end contact-form -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->
