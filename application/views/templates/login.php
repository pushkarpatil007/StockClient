<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title">login.</h2>
                        <ul class="breadcrumb__list">
                            <li class="active__list-item"><a href="index.html">home</a></li>
                            <li>login</li>
                        </ul>
                    </div><!-- end breadcrumb-inner -->
                    <div class="text-outline">login</div>
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
                <div class="form-shared-content">
                    <div class="login-box">
                       <h3>If You Are New to StockView</h3>
                        <p>
                            Fusce interdum ipsum egestas urna amet fringilla, et placerat ex
                            venenatis. Aliquet luctus pharetra. odio possimus quam soluta ullam veniam?
                        </p>
                        <a href="<?php echo base_url() ?>auth/register" class="theme-btn">register now</a>
                    </div>
                </div><!-- end form-shared-content-->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Login to your account!</h3>
                    </div>
                    <!--Contact Form-->
                    <form method="post" action="<?php echo base_url() ?>auth/login">
                        <div class="row">

                                <?php if(!empty($this->session->flashdata('display_message'))) { ?>
                                    <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
                                        <div class="alert alert-warning" role="alert"><?php echo $this->session->flashdata('display_message'); ?></div>
                                    <div>
                                <?php } ?>

                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="text" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email ?>" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-condition">
                                <div class="custom-checkbox">
                                    <input type="checkbox" id="chb1"/>
                                    <label for="chb1">Remember Me</label>
                                    <a href="<?php echo base_url() ?>auth/recover" class="pass__desc float-right"> Forgot your password?</a>
                                    
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-group">
                                <button class="theme-btn login-btn" type="submit">Login now</button>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-group account-assist">
                                <p class="account__desc">Not a member?<a href="<?php echo base_url() ?>auth/register"> Register</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </form>
                </div><!-- end contact-form -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->
