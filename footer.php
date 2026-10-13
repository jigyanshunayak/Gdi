
<style>
/* ===== GDI Footer Design ===== */
#footer {
    background-color: #573e7a !important;
    color: #ffffff;
    margin-top: 0;
}

#footer .footer-main {
    padding: 55px 0 35px;
}

#footer .footer-column {
    margin-bottom: 30px;
}

#footer .footer-heading {
    position: relative;
    color: #ffffff;
    font-size: 21px;
    font-weight: 700;
    margin-bottom: 28px;
    padding-bottom: 13px;
}

#footer .footer-heading::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 48px;
    height: 3px;
    background-color: #e7c56a;
    border-radius: 3px;
}

#footer .footer-address,
#footer .footer-email {
    color: #f4eff9;
    font-size: 14px;
    line-height: 1.9;
    margin-bottom: 7px;
    overflow-wrap: anywhere;
}

#footer .footer-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    flex: 0 0 34px;
    border: 1px solid rgba(255,255,255,0.35);
    border-radius: 50%;
    color: #e7c56a;
    font-size: 15px;
    margin-right: 11px;
}

#footer .footer-link-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

#footer .footer-link-list li {
    margin-bottom: 12px;
}

#footer .footer-link-list a {
    display: inline-block;
    color: #ffffff !important;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.25s ease, padding-left 0.25s ease;
}

#footer .footer-link-list a::before {
    content: "›";
    color: #e7c56a;
    font-size: 19px;
    font-weight: bold;
    margin-right: 10px;
    vertical-align: -1px;
}

#footer .footer-link-list a:hover {
    color: #f5d77d !important;
    padding-left: 5px;
}

#footer .footer-map {
    width: 100%;
    max-width: 100%;
    height: 220px;
    display: block;
    border: 2px solid rgba(255,255,255,0.35) !important;
    border-radius: 12px;
}

#footer .footer-map-link {
    display: inline-block;
    color: #ffffff;
    font-size: 13px;
    margin-top: 12px;
    text-decoration: none;
}

#footer .footer-map-link:hover {
    color: #f5d77d;
}

#footer .footer-bottom {
    background-color: #573e7a !important;
    border-top: 1px solid rgba(255,255,255,0.22);
    padding: 20px 0;
}

#footer .footer-copyright-text {
    color: #f4eff9;
    font-size: 13px;
    line-height: 1.8;
    margin: 0;
    text-align: center;
}

#footer .footer-copyright-text a {
    color: #f5d77d;
    font-weight: 600;
    text-decoration: none;
}

#footer .footer-copyright-text a:hover {
    color: #ffffff;
    text-decoration: underline;
}

@media (max-width: 767px) {
    #footer .footer-main {
        padding: 38px 0 20px;
    }

    #footer .footer-heading {
        font-size: 19px;
        margin-bottom: 22px;
    }

    #footer .footer-column {
        margin-bottom: 25px;
    }

    #footer .footer-map {
        height: 230px;
    }

    #footer .footer-bottom {
        padding: 18px 12px;
    }
}
</style>

<footer id="footer" class="mt-0">

    <div class="container footer-main">
        <div class="row">

            <!-- Address and Contact -->
            <div class="col-md-6 col-lg-4 footer-column">
                <h5 class="footer-heading">Our Address</h5>

                <div class="d-flex align-items-start mb-3">
                    <span class="footer-icon" aria-hidden="true">&#8962;</span>
                    <div>
                        <p class="footer-address mb-0">
                            <strong>GDI HOUSE, HIG-1/47,</strong><br>
                            NEAR LINGRAJ RAILWAY STATION,<br>
                            OLD TOWN, BHUBANESWAR,<br>
                            751002, KHORDHA, ODISHA
                        </p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <span class="footer-icon" aria-hidden="true">&#9993;</span>
                    <p class="footer-email mb-0">
                        <strong>Email:</strong><br>
                        <a href="mailto:bhubaneswar@gdi.co.in"
                           style="color:#fff;text-decoration:none;">
                            bhubaneswar@gdi.co.in
                        </a>
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-6 col-lg-4 footer-column">
                <h5 class="footer-heading">Quick Links</h5>

                <ul class="footer-link-list">
                    <li><a href="about-gdi.php">About GDI</a></li>
                    <li><a href="mission-vision.php">Mission &amp; Vision</a></li>
                    <li><a href="what-we-do.php">What We Do</a></li>
                    <li><a href="boad-of-advisory.php">Board of Advisory</a></li>
                    <li><a href="social-marketing.php">Social Marketing</a></li>
                </ul>
            </div>

            <!-- Google Maps -->
            <div class="col-md-12 col-lg-4 footer-column">
                <h5 class="footer-heading">Reach Us</h5>

                <iframe
                    class="footer-map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4109.15852598822!2d85.81436261109413!3d20.234973214489656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a730b7eef639%3A0xffad1e96e7393f07!2sGlobal%20Development%20Initiative!5e1!3m2!1sen!2sin!4v1790840577854!5m2!1sen!2sin"
                    title="Global Development Initiative location map"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <a
                    class="footer-map-link"
                    href="https://www.google.com/maps/search/?api=1&query=Global+Development+Initiative+Bhubaneswar"
                    target="_blank"
                    rel="noopener noreferrer">
                    View location on Google Maps &rarr;
                </a>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="footer-copyright-text">
                        &copy; Copyright 2021. All Rights Reserved.
                        Developed by
                        <a href="https://cakiweb.com"
                           target="_blank"
                           rel="noopener noreferrer">Cakiweb</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

</div>

<!-- Vendor Scripts: Preserved -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/jquery.vide.min.js"></script>
<script src="vendor/vivus/vivus.min.js"></script>

<!-- Theme Scripts -->
<script src="js/theme.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/views/view.contact.js"></script>
<script src="js/custom.js"></script>
<script src="js/theme.init.js"></script>

</body>
</html>
