<?php include('header.php') ?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="contact-page-shape-1 float-bob-x">
                <img src="assets/images/shapes/contact-page-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact us</span>
                                <h2 class="section-title__title">Feel Free to Write</h2>
                                <div class="section-title__line"></div>
                            </div>
                            <div class="contact-page__form">
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" name="Phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Subject" name="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__right">
                            <div class="contact-page__details">
                                <ul class="list-unstyled contact-page__details-list">
                                    <li>
                                        <span>Call anytime</span>
                                        <p><a href="tel:980009630">+ 91 9842869957</a></p>
                                    </li>
                                    <li>
                                        <span>Send email</span>
                                        <p><a href="mailto:ambed@company.com">info@rubypainters.com</a></p>
                                    </li>
                                    <li>
                                        <span>Visit Office</span>
                                        <p>No. 16, CSI Good News Complex, Puthur Main Road, Trichy - 620017</p>
                                    </li>
                                </ul>
                                <div class="contact-page__social">
                                    <a href="https://www.facebook.com/rubypainterstrichy" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/ruby_painters/" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->
<?php include('footer.php') ?>