
<?php
    include 'header.php';
?>

<style>
/* ================= GDI CONTACT PAGE ================= */
.gdi-contact {
    --gdi-blue: #0756b5;
    --gdi-navy: #102747;
    --gdi-teal: #18b6a4;
    --gdi-muted: #64748b;
    color: #526176;
    background: #fff;
    overflow: hidden;
}

.gdi-contact * {
    box-sizing: border-box;
}

.gdi-contact .contact-hero {
    position: relative;
    padding: 65px 0 75px;
    color: #fff;
    background:
        radial-gradient(circle at 90% 15%, rgba(24,182,164,.24), transparent 27%),
        linear-gradient(125deg, #071d3b, #0756b5 70%, #1384d5);
    overflow: hidden;
}

.gdi-contact .contact-hero::after {
    content: "";
    position: absolute;
    width: 390px;
    height: 390px;
    right: -110px;
    top: -190px;
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 50%;
    box-shadow: 0 0 0 45px rgba(255,255,255,.035),
                0 0 0 90px rgba(255,255,255,.025);
    pointer-events: none;
}

.gdi-contact .hero-inner {
    position: relative;
    z-index: 1;
}

.gdi-contact .hero-tag {
    display: inline-block;
    padding: 9px 15px;
    margin-bottom: 18px;
    border: 1px solid rgba(255,255,255,.25);
    border-radius: 50px;
    background: rgba(255,255,255,.09);
    color: #cffff5;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.gdi-contact .contact-hero h1 {
    margin: 0 0 16px;
    color: #fff;
    font-size: clamp(36px, 5vw, 52px);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -1px;
}

.gdi-contact .contact-hero h1 span {
    color: #64f0d7;
}

.gdi-contact .contact-hero p {
    max-width: 650px;
    margin: 0;
    color: #e0eafa;
    font-size: 16px;
    line-height: 1.9;
}

.gdi-contact .contact-main {
    padding: 65px 0 75px;
    background: linear-gradient(180deg, #f5f8fd 0%, #fff 100%);
}

.gdi-contact .section-tag {
    display: inline-block;
    margin-bottom: 10px;
    color: var(--gdi-blue);
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.8px;
    text-transform: uppercase;
}

.gdi-contact .section-title {
    margin: 0 0 14px;
    color: var(--gdi-navy);
    font-size: clamp(26px, 3vw, 34px);
    font-weight: 800;
    line-height: 1.3;
}

.gdi-contact .section-description {
    margin-bottom: 28px;
    color: var(--gdi-muted);
    font-size: 14px;
    line-height: 1.85;
}

.gdi-contact .office-card {
    height: 100%;
    padding: 25px;
    border: 1px solid #e6edf7;
    border-radius: 19px;
    background: #fff;
    box-shadow: 0 14px 40px rgba(16,39,71,.07);
}

.gdi-contact .office-image {
    position: relative;
    margin-bottom: 24px;
    overflow: hidden;
    border-radius: 13px;
    background: #eaf1fa;
}

.gdi-contact .office-image img {
    display: block;
    width: 100%;
    height: 245px;
    object-fit: cover;
    transition: transform .35s ease;
}

.gdi-contact .office-card:hover .office-image img {
    transform: scale(1.035);
}

.gdi-contact .office-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 13px;
    margin-bottom: 13px;
    border-radius: 30px;
    background: #e4f8f3;
    color: #078775;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: .8px;
    text-transform: uppercase;
}

.gdi-contact .office-card h3 {
    margin: 0 0 15px;
    color: var(--gdi-navy);
    font-size: 22px;
    font-weight: 800;
}

.gdi-contact .office-detail {
    display: flex;
    align-items: flex-start;
    gap: 13px;
    padding: 15px 0;
    border-top: 1px solid #edf1f7;
}

.gdi-contact .detail-icon {
    display: flex;
    flex: 0 0 40px;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 11px;
    background: #edf5ff;
    color: var(--gdi-blue);
    font-size: 16px;
}

.gdi-contact .office-detail strong {
    display: block;
    margin: 1px 0 5px;
    color: #263750;
    font-size: 13px;
    font-weight: 800;
}

.gdi-contact .office-detail p,
.gdi-contact .office-detail a {
    margin: 0;
    color: #65748a;
    font-size: 13px;
    line-height: 1.8;
    overflow-wrap: anywhere;
}

.gdi-contact .office-detail a {
    color: var(--gdi-blue);
    text-decoration: none;
}

.gdi-contact .office-detail a:hover {
    text-decoration: underline;
}

.gdi-contact .contact-form-card {
    padding: 32px;
    border: 1px solid #e6edf7;
    border-radius: 19px;
    background: #fff;
    box-shadow: 0 14px 40px rgba(16,39,71,.07);
}

.gdi-contact .form-heading {
    padding-bottom: 22px;
    margin-bottom: 25px;
    border-bottom: 1px solid #edf1f7;
}

.gdi-contact .form-heading h2 {
    margin: 0 0 10px;
    color: var(--gdi-navy);
    font-size: 28px;
    font-weight: 800;
}

.gdi-contact .form-heading p {
    margin: 0;
    color: #748197;
    font-size: 13px;
    line-height: 1.8;
}

.gdi-contact .form-group {
    margin-bottom: 20px;
}

.gdi-contact .form-group label {
    display: block;
    margin-bottom: 9px;
    color: #253750;
    font-size: 13px;
    font-weight: 700;
}

.gdi-contact .required-star {
    color: #e14b58;
}

.gdi-contact .form-control {
    width: 100%;
    min-height: 49px;
    padding: 12px 15px;
    border: 1px solid #dce4ef;
    border-radius: 10px;
    background: #f9fbfe;
    color: #26364b;
    font-size: 14px;
    box-shadow: none;
    transition: border-color .2s, box-shadow .2s, background .2s;
}

.gdi-contact .form-control:focus {
    border-color: #3988e8;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(7,86,181,.09);
    outline: none;
}

.gdi-contact textarea.form-control {
    min-height: 145px;
    resize: vertical;
}

.gdi-contact .submit-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 11px;
    width: 100%;
    min-height: 53px;
    padding: 14px 20px;
    border: 0;
    border-radius: 10px;
    background: linear-gradient(100deg, #0756b5, #087ed1);
    color: #fff;
    font-size: 14px;
    font-weight: 800;
    cursor: pointer;
    transition: transform .2s, box-shadow .2s;
}

.gdi-contact .submit-btn:hover {
    transform: translateY(-2px);
    color: #fff;
    box-shadow: 0 9px 22px rgba(7,86,181,.22);
}

.gdi-contact .form-note {
    margin: 15px 0 0;
    color: #8390a3;
    font-size: 12px;
    text-align: center;
}

.gdi-contact .alert {
    border-radius: 10px;
    font-size: 13px;
}

.gdi-contact .map-section {
    padding: 0 0 70px;
    background: #fff;
}

.gdi-contact .map-heading {
    margin-bottom: 25px;
    text-align: center;
}

.gdi-contact .map-heading h2 {
    margin: 0 0 10px;
    color: var(--gdi-navy);
    font-size: 30px;
    font-weight: 800;
}

.gdi-contact .map-heading p {
    margin: 0;
    color: #748197;
    font-size: 14px;
    line-height: 1.8;
}

.gdi-contact .map-frame {
    overflow: hidden;
    border: 1px solid #e3eaf4;
    border-radius: 18px;
    background: #edf3fa;
    box-shadow: 0 14px 40px rgba(16,39,71,.09);
}

.gdi-contact .map-frame iframe {
    display: block;
    width: 100%;
    height: 400px;
    border: 0;
}

.gdi-contact .contact-bottom {
    padding: 27px 15px;
    background: #0b2342;
    color: #dce8f8;
    text-align: center;
}

.gdi-contact .contact-bottom p {
    margin: 0;
    font-size: 13px;
    line-height: 1.8;
}

.gdi-contact .contact-bottom strong {
    color: #fff;
}

@media (max-width: 991px) {
    .gdi-contact .contact-hero {
        padding: 50px 0 58px;
    }

    .gdi-contact .contact-main {
        padding: 45px 0 55px;
    }

    .gdi-contact .office-column {
        margin-bottom: 30px;
    }
}

@media (max-width: 575px) {
    .gdi-contact .office-card,
    .gdi-contact .contact-form-card {
        padding: 21px 18px;
        border-radius: 15px;
    }

    .gdi-contact .office-image img {
        height: 210px;
    }

    .gdi-contact .map-frame iframe {
        height: 320px;
    }

    .gdi-contact .map-section {
        padding-bottom: 45px;
    }
}
</style>

<div role="main" class="main gdi-contact">

    <!-- HERO SECTION -->
    <section class="contact-hero">
        <div class="container">
            <div class="hero-inner">
                <span class="hero-tag">
                    <i class="fas fa-globe-asia mr-2"></i>
                    Global Development Initiative
                </span>

                <h1>
                    Let's Start a<br>
                    <span>Conversation.</span>
                </h1>

                <p>
                    Have a question, an idea, or a proposal for collaboration?
                    We would love to hear from you. Connect with GDI and
                    let's work together to create meaningful change.
                </p>
            </div>
        </div>
    </section>

    <!-- OFFICE DETAILS AND CONTACT FORM -->
    <section class="contact-main">
        <div class="container">
            <div class="row align-items-start">

                <!-- OFFICE DETAILS -->
                <div class="col-lg-6 office-column">

                    <span class="section-tag">Visit Our Office</span>

                    <h2 class="section-title">
                        We Are Here <br>
                        <span>To Help You</span>
                    </h2>

                    <p class="section-description">
                        Reach out to our Bhubaneswar Head Office for
                        enquiries, information, and opportunities
                        to work together.
                    </p>

                    <div class="office-card">

                        <div class="office-image">
                            <img
                                src="img/Bhubaneswar.jpg"
                                class="img-fluid"
                                alt="Global Development Initiative Bhubaneswar Head Office"
                                loading="lazy">
                        </div>

                        <span class="office-badge">
                            <i class="fas fa-building"></i>
                            Head Office
                        </span>

                        <h3>Bhubaneswar Office</h3>

                        <div class="office-detail">
                            <div class="detail-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <strong>Office Address</strong>
                                <p>
                                    GDI HOUSE, HIG-1/47, KAPILA PRASAD
                                    BDA COLONY, NEAR LINGRAJ RAILWAY
                                    STATION, OLD TOWN, BHUBANESWAR,
                                    751002, KHORDHA, ODISHA
                                </p>
                            </div>
                        </div>

                        <div class="office-detail">
                            <div class="detail-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <strong>Email Address</strong>
                                <a href="mailto:Bhubaneswar@gdi.co.in">
                                    Bhubaneswar@gdi.co.in
                                </a>
                            </div>
                        </div>

                        <div class="office-detail">
                            <div class="detail-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div>
                                <strong>Location</strong>
                                <p>Bhubaneswar, Khordha, Odisha, India</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- CONTACT FORM -->
                <div class="col-lg-6">

                    <div class="contact-form-card">

                        <div class="form-heading">
                            <span class="section-tag">Get In Touch</span>
                            <h2>Contact Us</h2>
                            <p>
                                Complete the form below and send us your
                                message. Our team will be able to review
                                your enquiry.
                            </p>
                        </div>

                        <form id="contactForm"
                              class="contact-form"
                              action="php/contact-form.php"
                              method="POST">

                            <div class="contact-form-success alert alert-success d-none mt-4"
                                 id="contactSuccess">
                                <strong>Success!</strong>
                                Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4"
                                 id="contactError">
                                <strong>Error!</strong>
                                There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"
                                      id="mailErrorMessage"></span>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">
                                        Full Name
                                        <span class="required-star">*</span>
                                    </label>

                                    <input type="text"
                                           class="form-control"
                                           name="name"
                                           id="name"
                                           placeholder="Enter your full name"
                                           maxlength="100"
                                           autocomplete="name"
                                           data-msg-required="Please enter your name."
                                           required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">
                                        Email Address
                                        <span class="required-star">*</span>
                                    </label>

                                    <input type="email"
                                           class="form-control"
                                           name="email"
                                           id="email"
                                           placeholder="you@example.com"
                                           maxlength="100"
                                           autocomplete="email"
                                           data-msg-required="Please enter your email address."
                                           data-msg-email="Please enter a valid email address."
                                           required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="subject">
                                    Subject
                                    <span class="required-star">*</span>
                                </label>

                                <input type="text"
                                       class="form-control"
                                       name="subject"
                                       id="subject"
                                       placeholder="What is your enquiry about?"
                                       maxlength="100"
                                       data-msg-required="Please enter the subject."
                                       required>
                            </div>

                            <div class="form-group">
                                <label for="message">
                                    Your Message
                                    <span class="required-star">*</span>
                                </label>

                                <textarea class="form-control"
                                          name="message"
                                          id="message"
                                          rows="6"
                                          maxlength="5000"
                                          placeholder="Write your message here..."
                                          data-msg-required="Please enter your message."
                                          required></textarea>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit"
                                        class="submit-btn"
                                        data-loading-text="Loading...">
                                    Send Message
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>

                            <p class="form-note">
                                <i class="fas fa-shield-alt mr-1"></i>
                                Please provide accurate contact information.
                            </p>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- GOOGLE MAP -->
    <section class="map-section">
        <div class="container">

            <div class="map-heading">
                <span class="section-tag">Find Us</span>
                <h2>Visit Our Location</h2>
                <p>
                    Find the Global Development Initiative Head Office
                    in Bhubaneswar, Odisha.
                </p>
            </div>

            <div class="map-frame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4109.15852598822!2d85.81436261109413!3d20.234973214489656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a730b7eef639%3A0xffad1e96e7393f07!2sGlobal%20Development%20Initiative!5e1!3m2!1sen!2sin!4v1790840577854!5m2!1sen!2sin"
                    title="Global Development Initiative Head Office Map"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>

    <!-- FOOTER BANNER -->
    <section class="contact-bottom">
        <div class="container">
            <p>
                <strong>Global Development Initiative (GDI)</strong><br>
                Connecting people, creating opportunities, and building a
                better future together.
            </p>
        </div>
    </section>

</div>

<?php
    include 'footer.php';
?>
