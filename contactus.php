<?php include './header.php' ?>

<!-- breadcrumb-area-start -->
<div class="tp-breadcrumb__area p-relative fix tp-breadcrumb-height" data-background="assets/img/breadcrumb/breadcrumb-bg.png">
    <div class="tp-breadcrumb__shape-1 z-index-5">
        <img src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
    </div>
    <div class="tp-breadcrumb__shape-2 z-index-5">
        <img src="assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tp-breadcrumb__content z-index-5">
                    <div class="tp-breadcrumb__list">
                        <span><a href="index.php">home</a></span> 
                        <span class="dvdr"><i class="fa-sharp fa-solid fa-slash-forward"></i></span>
                        <span>Contact</span>
                    </div>
                    <h3 class="tp-breadcrumb__title">Contact Us</h3>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- contact-area-start -->
<div class="tp-contact__area mt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-contact__bg rounded-3">
                    <div class="tp-contact__wrapper d-lg-flex d-block align-items-center justify-content-between">
                        <div class="tp-contact__item d-flex align-items-center">
                            <div class="tp-contact__icon">
                                <span><i class="flaticon-phone"></i></span>
                            </div>
                            <div class="tp-contact__text">
                                <a href="tel:+92307776-0800">+ 92 (307) 776-0800</a>
                                <a href="tel:+008898768">+ 00 (8898) 768</a>
                            </div>
                        </div>                        
                        <div class="tp-contact__item d-flex align-items-center">
                            <div class="tp-contact__icon">
                                <span><i class="flaticon-email"></i></span>
                            </div>
                            <div class="tp-contact__text">
                                <a href="mailto:poorexcharityhelp@gmail.com">poorexcharityhelp@gmail.com</a>
                                <a href="mailto:infocompany@gmail.com">infocompany@gmail.com</a>
                            </div>
                        </div>
                        <div class="tp-contact__item d-flex align-items-center">
                            <div class="tp-contact__icon">
                                <span><i class="flaticon-location"></i></span>
                            </div>
                            <div class="tp-contact__text">
                                <a href="#">55 Hereford catdal street line <br> New york, USA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area-end -->

    <!-- form-area-start -->
<div class="tp-contact-form__area tp-contact-form__space">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 wow tpfadeLeft" data-wow-duration=".9s"
            data-wow-delay=".3s">
                <div class="tp-contact-form__left-box">
                    <span class="tp-contact-form__subtitle">CONTACT WITH POOREX</span>
                    <h4 class="tp-section-title pb-20">Just have a quick <br>any questions?</h4>
                    <p>Charity is the act of extending love and kindness to others <br>unconditionalwhich is a conscious act but the decision is <br>made by the heart, without expecting</p>
                    <div class="tp-contact-form__social-box">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 wow tpfadeRight" data-wow-duration=".9s"
            data-wow-delay=".7s">
                <div class="tp-contact-form__form-box rounded-3">
                    <form method="post" action="./final_email/email/mail.php">
                        <div class="row">
                            <div class="col-xl-6 mb-30">
                                <div class="tp-contact-form__input-box">
                                    <input type="text" name="name" placeholder="Your Name" class="rounded-3">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-30">
                                <div class="tp-contact-form__input-box">
                                    <input type="email" name="email" placeholder="Your Email" class="rounded-3">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-30">
                                <div class="tp-contact-form__input-box">
                                    <input type="text" name="phone" placeholder="Phone" class="rounded-3">
                                </div>
                            </div>
                            <div class="col-xl-6 mb-30">
                                <div class="tp-contact-form__input-box">
                                    <input type="text" name="subject" placeholder="Subject" class="rounded-3">
                                </div>
                            </div>
                            <div class="col-xl-12 mb-30">
                                <div class="tp-contact-form__textarea-box">
                                    <textarea type="text" name="message" placeholder="Write Your Message" class="rounded-3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tp-contact-form__button">
                            <button name="send" type="submit" class="tp-btn rounded-3">Send Your Message</button>
                        </div>                                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- form-area-end -->

<?php include './footer.php' ?>

    