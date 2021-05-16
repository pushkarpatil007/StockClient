<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title">sign up.</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="<?php echo base_url() ?>">home</a></li>
                            <li>sign up</li>
                        </ul>
                    </div><!-- end breadcrumb-inner -->
                    <div class="text-outline">sign up</div>
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
<section class="form-shared">
    <div class="container">
        <div class="row">
        <div class="col-lg-6">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Create an account!</h3>
                        <p class="form__desc">We do not share your data with anyone.</p>
                    </div>
                    <!--Contact Form-->
                    <form method="post" action="<?php echo base_url() ?>auth/register">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <?php if(!empty($this->session->flashdata('validation_message'))) { ?>
                                <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('validation_message'); ?></div>
                            <?php } ?>

                            <div class="form-row">
                            <div class="col-lg-6 col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="first_name" placeholder="First Name" value="<?php if(isset($first_name)) echo $first_name ?>" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-6 col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php if(isset($last_name)) echo $last_name ?>" required="">
                            </div><!-- end col-lg-12 -->
                            </div>

                            <div class="form-group">
                                <label>Mobile</label>
                                <input class="form-control" type="text" name="mobile" placeholder="Mobile Number" value="<?php if(isset($mobile)) echo $mobile ?>" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Email ID" value="<?php if(isset($email)) echo $email ?>" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-condition">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb1" checked>
                                    <label for="chb1">I agree to StockView's <a href="<?php echo base_url() ?>policies/terms">Terms of Services</a></label>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-group">
                                <button class="theme-btn register-btn" type="submit">Register Account</button>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 account-assist">
                                <p class="account__desc">Already have an account?<a href="<?php echo base_url() ?>auth/login"> Login</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </form>
                </div><!-- end contact-form -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="form-shared-content">
                    <ul>
                        <li>
                            <i class="fa fa-lock"></i>
                            <h4>safe & secure</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                               Consequatur dicta fuga ipsam molestias natus?
                               Architecto illo maiores non reprehenderit vitae.
                            </p>
                            <a href="#">learn more</a>
                        </li>
                        <li>
                            <i class="fa fa-mobile"></i>
                            <h4>mobile app</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                               Consequatur dicta fuga ipsam molestias natus?
                               Architecto illo maiores non reprehenderit vitae.
                            </p>
                            <a href="#">learn more</a>
                        </li>
                    </ul>
                </div><!-- end form-shared-content-->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->
