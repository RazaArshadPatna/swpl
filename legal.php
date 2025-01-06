
<?php include 'config/header.php'; ?>


        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/d.jpg);">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <!-- <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li>-</li>
                        <li>Legal</li>
                    </ul> -->
                    <h2 class="page-header__title">UseFull Documents</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
      
<!--Gallery Page Start-->
<section class="gallery-page" style="background:url(assets/images/shapes/about_shape02.png);padding-bottom:81px;">
    <div class="container">

        
        

        <div class="row masonary-layout">
            <!--Gallery Page Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/GST.jpg" alt="">
                        </div>
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="assets/images/gallery/GST.jpg"><span
                                    class="fas fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
           
            <!--Gallery Page Single Start-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                <div class="gallery-page__single">
                    <div class="gallery-page__img">
                        <div class="gallery-page__img-box">
                            <img src="assets/images/gallery/OIP.jpeg" alt="">
                        </div>
                        <div class="gallery-page__icon">
                            <a class="img-popup" href="assets/images/gallery/OIP.jpeg"><span
                                    class="fas fa-plus"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Gallery Page Single End-->
            
            
        </div>
    </div>
</section>
<!--Gallery Page End-->


        
<script>
//    $("#header_padding").addClass("header-inner-padding");
var element=document.getElementById("header_padding");
console.log(element);
element.classList.add("header-inner-padding");
</script>

<?php include 'config/footer.php'; ?>