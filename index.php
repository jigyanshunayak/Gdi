
<?php
    include 'header.php';
?>

<style>
    /* GDI Home Page Frontend Design */
    .gdi-home {
        --gdi-green: #126b50;
        --gdi-dark: #073e32;
        --gdi-gold: #e5a63b;
        --gdi-light: #f5f8f6;
    }

    .gdi-home img {
        max-width: 100%;
    }

    /* Main Banner Slider */
    .gdi-home .slider-container {
        overflow: hidden;
        background: #073e32;
    }

    .gdi-home .rev_slider_wrapper {
        width: 100%;
    }

    /* Promotional Cards */
    .gdi-promo-section {
        padding: 65px 0 70px;
        background: var(--gdi-light);
    }

    .gdi-promo-card {
        height: 100%;
        overflow: hidden;
        border: 1px solid #e5ece7;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 8px 30px rgba(15, 65, 43, .07);
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .gdi-promo-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 40px rgba(15, 65, 43, .14);
    }

    .gdi-promo-card .gdi-promo-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        display: block;
        transition: transform .45s ease;
    }

    .gdi-promo-card:hover .gdi-promo-image {
        transform: scale(1.035);
    }

    .gdi-promo-card .card-body {
        padding: 22px 15px;
        background: #fff;
    }

    .gdi-home .gdi-btn {
        display: inline-block;
        padding: 12px 27px;
        border: 0;
        border-radius: 7px;
        background: var(--gdi-green);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: .5px;
        text-decoration: none;
        text-transform: uppercase;
        transition: background .25s ease, transform .25s ease;
    }

    .gdi-home .gdi-btn:hover {
        background: var(--gdi-dark);
        color: #fff;
        transform: translateY(-2px);
    }

    /* Bulk Order Section */
    .gdi-bulk-order {
        position: relative;
        overflow: hidden;
        padding: 48px 0;
        background: linear-gradient(115deg, #073e32, #14785b);
    }

    .gdi-bulk-order::after {
        position: absolute;
        content: "";
        width: 250px;
        height: 250px;
        top: -140px;
        right: 12%;
        border: 1px solid rgba(255,255,255,.16);
        border-radius: 50%;
        pointer-events: none;
    }

    .gdi-bulk-order .container {
        position: relative;
        z-index: 1;
    }

    .gdi-bulk-order h2 {
        margin: 0;
        color: #fff;
        font-size: clamp(26px, 3vw, 38px);
        font-weight: 800;
        letter-spacing: .5px;
    }

    .gdi-bulk-order p {
        margin: 10px 0 0;
        color: #e0f1e9;
        font-size: 15px;
        line-height: 1.8;
    }

    .gdi-bulk-order .gdi-contact-btn {
        display: inline-block;
        padding: 15px 30px;
        border: 2px solid var(--gdi-gold);
        border-radius: 7px;
        background: var(--gdi-gold);
        color: #173a2c;
        font-size: 14px;
        font-weight: 800;
        text-decoration: none;
        transition: all .25s ease;
    }

    .gdi-bulk-order .gdi-contact-btn:hover {
        border-color: #fff;
        background: #fff;
        color: var(--gdi-dark);
    }

    /* Gallery */
    .gdi-gallery-section {
        padding: 75px 0 80px;
        background: #fff;
    }

    .gdi-section-heading {
        margin-bottom: 12px;
        color: var(--gdi-dark);
        font-size: clamp(28px, 3vw, 38px);
        font-weight: 800;
        letter-spacing: .5px;
    }

    .gdi-section-subtitle {
        margin: 15px auto 30px;
        color: #66766d;
        font-size: 15px;
        line-height: 1.8;
    }

    .gdi-heading-divider {
        width: 65px;
        height: 4px;
        margin: 18px auto 0;
        border-radius: 5px;
        background: var(--gdi-gold);
    }

    .gdi-gallery-section .owl-carousel > div {
        padding: 8px;
    }

    .gdi-gallery-item {
        display: block;
        overflow: hidden;
        border-radius: 12px;
        background: #f5f8f6;
        box-shadow: 0 5px 20px rgba(15, 65, 43, .08);
    }

    .gdi-gallery-item img {
        display: block;
        width: 100%;
        height: 150px;
        object-fit: cover;
        opacity: .92;
        transition: opacity .3s ease, transform .35s ease;
    }

    .gdi-gallery-item:hover img {
        opacity: 1;
        transform: scale(1.06);
    }

    .gdi-gallery-more {
        margin-top: 28px;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
        .gdi-promo-section {
            padding: 45px 0;
        }

        .gdi-promo-card .gdi-promo-image {
            height: 220px;
        }

        .gdi-bulk-order .gdi-contact-wrap {
            margin-top: 24px;
            text-align: left;
        }
    }

    @media (max-width: 575px) {
        .gdi-promo-section {
            padding: 35px 0;
        }

        .gdi-promo-card .gdi-promo-image {
            height: 230px;
        }

        .gdi-bulk-order {
            padding: 38px 0;
        }

        .gdi-gallery-section {
            padding: 50px 0;
        }

        .gdi-gallery-item img {
            height: 220px;
        }
    }
</style>

<div role="main" class="main gdi-home">

    <!-- Main Banner Slider -->
    <section class="slider-container light rev_slider_wrapper"
             style="height:650px;">

        <div id="revolutionSlider"
             class="slider rev_slider"
             data-version="5.4.8"
             data-plugin-revolution-slider
             data-plugin-options="{'delay':9000,'gridwidth':100,'gridheight':400,'disableProgressBar':'on','responsiveLevels':[4096,1200,992,500],'navigation':{'arrows':{'enable':true,'style':'arrows-style-1 arrows-big arrows-dark'},'bullets':{'enable':false,'style':'bullets-style-1 bullets-color-primary','h_align':'center','v_align':'bottom','space':7,'v_offset':70,'h_offset':0}}}">

            <ul>
                <li data-transition="fade">
                    <img src="img/Banner33.jpg"
                         alt="GDI Main Banner"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>

                <li data-transition="fade">
                    <img src="img/slides/Banner6.jpg"
                         alt="GDI Banner 2"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>

                <li data-transition="fade">
                    <img src="img/GDI-Bnr11.jpg"
                         alt="GDI Banner 3"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>

                <li data-transition="fade">
                    <img src="img/GDI-Bnr22.jpg"
                         alt="GDI Banner 4"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>

                <li data-transition="fade">
                    <img src="img/GDI-Bnr33.jpg"
                         alt="GDI Banner 5"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>

                <li data-transition="fade">
                    <img src="img/GDI-Bnr44.jpg"
                         alt="GDI Banner 6"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>

                <li data-transition="fade">
                    <img src="img/GDI-Bnr5.jpg"
                         alt="GDI Banner 7"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>
            </ul>

        </div>
    </section>

    <!-- Promotional Cards -->
    <section class="gdi-promo-section">
        <div class="container-fluid px-lg-4">
            <div class="row">

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="gdi-promo-card">
                        <img class="gdi-promo-image"
                             src="img/1a.jpg"
                             alt="GDI Initiative 1"
                             loading="lazy">

                        <div class="card-body text-center">
                            <a href="https://www.sarasa.in/gdi"
                               class="gdi-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="gdi-promo-card">
                        <img class="gdi-promo-image"
                             src="img/2a.JPG"
                             alt="GDI Initiative 2"
                             loading="lazy">

                        <div class="card-body text-center">
                            <a href="https://www.sarasa.in/gdi/"
                               class="gdi-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="gdi-promo-card">
                        <img class="gdi-promo-image"
                             src="img/3a.JPG"
                             alt="GDI Initiative 3"
                             loading="lazy">

                        <div class="card-body text-center">
                            <a href="https://www.sarasa.in/gdi/"
                               class="gdi-btn">View More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="gdi-promo-card">
                        <img class="gdi-promo-image"
                             src="img/4a.JPG"
                             alt="GDI Initiative 4"
                             loading="lazy">

                        <div class="card-body text-center">
                            <a href="https://www.sarasa.in/gdi/"
                               class="gdi-btn">View More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Bulk Order Call to Action -->
    <section class="gdi-bulk-order">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-8">
                    <h2>FOR BULK ORDER</h2>

                    <p>
                        For bulk orders and enquiries, please get in
                        touch with our team.
                    </p>
                </div>

                <div class="col-md-4 gdi-contact-wrap text-md-right">
                    <a href="contactus.php"
                       class="gdi-contact-btn">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Our Gallery -->
    <section class="gdi-gallery-section">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">

                    <h2 class="gdi-section-heading">
                        OUR GALLERY
                    </h2>

                    <div class="gdi-heading-divider"></div>

                    <p class="gdi-section-subtitle">
                        Explore our activities, community initiatives,
                        and moments from Global Development Initiative.
                    </p>

                    <div class="owl-carousel owl-theme mb-0"
                         data-plugin-options="{'responsive':{'0':{'items':1},'476':{'items':1},'768':{'items':5},'992':{'items':6},'1200':{'items':6}},'autoplay':true,'autoplayTimeout':3000,'dots':false}">

                        <div>
                            <div class="gdi-gallery-item">
                                <img src="img/gdiimg (1).jpg"
                                     alt="GDI Gallery Image 1"
                                     loading="lazy">
                            </div>
                        </div>

                        <div>
                            <div class="gdi-gallery-item">
                                <img src="img/gdiimg (20).jpg"
                                     alt="GDI Gallery Image 2"
                                     loading="lazy">
                            </div>
                        </div>

                        <div>
                            <div class="gdi-gallery-item">
                                <img src="img/gdiimg (22).jpg"
                                     alt="GDI Gallery Image 3"
                                     loading="lazy">
                            </div>
                        </div>

                        <div>
                            <div class="gdi-gallery-item">
                                <img src="img/gdiimg (32).jpg"
                                     alt="GDI Gallery Image 4"
                                     loading="lazy">
                            </div>
                        </div>

                        <div>
                            <div class="gdi-gallery-item">
                                <img src="img/gdiimg (33).jpg"
                                     alt="GDI Gallery Image 5"
                                     loading="lazy">
                            </div>
                        </div>

                        <div>
                            <div class="gdi-gallery-item">
                                <img src="img/gdiimg (37).jpg"
                                     alt="GDI Gallery Image 6"
                                     loading="lazy">
                            </div>
                        </div>

                    </div>

                    <div class="gdi-gallery-more">
                        <a href="gallery.php" class="gdi-btn">
                            View More
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

</div>

<?php
    include 'footer.php';
?>
