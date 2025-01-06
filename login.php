
<?php include 'config/header.php'; ?>


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/d1.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <!-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li>-</li>
                        <li>Login</li>
                    </ul> -->
                    <h2 class="page-header__title">Login</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
      
      <!--Appointment One Start -->
      <section class="appointment-one login-box" style="padding-top:200px;padding-bottom:100px;">
            <div class="container">
                <div class="appointment-one__inner">
                    <div class="appointment-one__shape-1 float-bob-y">
                        <img src="assets/images/shapes/appointment-one-shape-1.png" alt="">
                    </div>
                    <div class="appointment-one__shape-2 float-bob-x">
                        <img src="assets/images/shapes/appointment-one-shape-2.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="appointment-one__left">
                                <div class="appointment-one__img">
                                    <img src="assets/images/resources/device.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="appointment-one__right">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <p class="section-title__tagline">Login</p>
                                    </div>
                            
                                </div>
                          
                                <div class="appointment-one__form-box">
                                    <form action="#"
                                        class="appointment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                           
                                            <div class="col-xl-12">
                                                <div class="appointment-one__input-box">
                                                    <input type="email" placeholder="Email Address*" name="email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-xl-12">
                                                <div class="appointment-one__input-box">
                                                    <input type="text" placeholder="Password*" name="email">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-xl-12">
                                                
                                                <div class="appointment-one__btn-box">
                                                    <button type="submit" class="thm-btn appointment-one__btn">Login<span class="icon-right-arrow"></span></button>
                                                </div>

                                                <p>Don't have an account?  <a href="signup.php">SignUp</a></p>

                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Appointment One End -->


        
<script>

var element=document.getElementById("header_padding");
console.log(element);
element.classList.add("header-inner-padding");
</script>

<?php include 'config/footer.php'; ?>